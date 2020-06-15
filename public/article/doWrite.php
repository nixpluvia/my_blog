<meta charset="UTF-8">

<?php
require_once __DIR__ . '/../../config.php';

$title = $_GET['title'];
$body = $_GET['body'];

$sql = "
INSERT INTO article
SET regDate = NOW(),
title = '{$title}',
body = '{$body}'
";

mysqli_query($dbConn, $sql);
?>

<h2><a href="list.php">리스트로 돌아가기</a></h2>