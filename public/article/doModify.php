<?php
require_once __DIR__ . '/../../config.php';

$id = $_GET['id'];
$title = $_GET['title'];
$body = $_GET['body'];

$sql = "
UPDATE article
SET title = '{$title}',
body = '{$body}'
WHERE id = '{$id}'
";

mysqli_query($dbConn, $sql);
?>

<h2><a href="list.php">리스트로 돌아가기</a></h2>