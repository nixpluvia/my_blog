<meta charset="UTF-8">

<?php

/* 학원 로그인
$dbHost = '127.0.0.1';
$dbLoginId = 'sbsst';
$dbLoginPw = 'sbs123414';
$dbName = 'site3';
*/
/* 집 로그인
$dbHost = '127.0.0.1';
$dbLoginId = 'root';
$dbLoginPw = '';
$dbName = 'site1';
*/
$dbHost = '127.0.0.1';
$dbLoginId = 'root';
$dbLoginPw = '';
$dbName = 'site3';

$conn = mysqli_connect($dbHost, $dbLoginId, $dbLoginPw, $dbName);

$sql = "
SELECT id, regDate, title
FROM article
";

$rs = mysqli_query($conn, $sql);
$rows = [];

while ( $row = mysqli_fetch_assoc($rs) ) {
    $rows[] = $row;
}

?>

<h1>게시물 리스트</h1>
<?php foreach ($rows as $row) { ?>
<div><?=$row['id']?> / <?=$row['regDate']?> / <?=$row['title']?></div>
<?php } ?>