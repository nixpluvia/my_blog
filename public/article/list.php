<meta charset="UTF-8">

<?php
require_once __DIR__ . '/../../config.php';

if ( isset($_GET['searchKeyWord']) == false ){
    $_GET['searchKeyWord'] = '';
};

$searchKeyWord = $_GET['searchKeyWord'];

$sql = "
SELECT *
FROM article
where 1
";

if (!empty($searchKeyWord)) {
    $sql .="
    AND title LIKE '%{$searchKeyWord}%'
    ";
}

$sql .= "
ORDER BY id DESC
LIMIT 100
";

/*
ORDER = 순서
ASC = Ascending = 오름차순
DESC = Descending = 내림차순
 */

$rs = mysqli_query($dbConn, $sql);
$articles = [];

while ( $article = mysqli_fetch_assoc($rs) ) {
    $articles[] = $article;
}

?>

<table border="1">
    <thead>
        <tr>
            <th>번호</th>
            <th>날짜</th>
            <th>조회수</th>
            <th>제목</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article) { ?>
            <tr>
                <td><?=$article['id']?></td>
                <td><?=$article['regDate']?></td>
                <td><?=$article['hit']?></td>
                <td>
                <a href="detail.php?id=<?=$article['id']?>"><?=$article['title']?></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>