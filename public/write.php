<?php
// 실행URL http://localhost:8023/write.php?title=제목1&&body=내용1

$title = $_GET ['title'];
$body = $_GET ['body'];

$sql = "
INSERT INTO article
SET regDate = NOW(),
title = '{$title}',
`body` = '{$body}';
";
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

mysqli_query($conn, $sql);
?>