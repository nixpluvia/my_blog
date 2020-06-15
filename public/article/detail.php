<meta charset="UTF-8">

<?php
require_once __DIR__ . '/../../config.php';

$id = $_GET['id'];

$sql = "
UPDATE article
SET hit = hit + 1
WHERE id = '{$id}'
";

mysqli_query($dbConn, $sql);

$sql = "
SELECT id, regDate, title, hit, body
FROM article
WHERE id = {$id}
";

$rs = mysqli_query($dbConn, $sql);
$article = mysqli_fetch_assoc($rs);

?>

<h1>게시물 리스트</h1>

<?php if ( $article == null ) { ?>
    <h2><?=$id?>번 게시물이 존재하지 않습니다.</h2>
<?php exit; } ?>


<table border="1">
    <tbody>
        <tr>
            <th>번호</th>
            <td><?=$article['id']?></td>
        </tr>
        <tr>
            <th>날짜</th>
            <td><?=$article['regDate']?></td>
        </tr>
        <tr>
            <th>조회수</th>
            <td><?=$article['hit']?></td>
        </tr>
        <tr>
            <th>제목</th>
            <td><?=$article['title']?></td>
        </tr>
        <tr>
            <th>본문</th>
            <td><?=$article['body']?></td>
        </tr>
        <tr>
            <th>비고</th>
            <td>
            <a href="doModify.php?id=<?=$article['id']?>">수정</a>
            <a href="doDelete.php?id=<?=$article['id']?>">삭제</a>
            <a href="list.php">리스트</a>
            </td>
        </tr>
    </tbody>
</table>