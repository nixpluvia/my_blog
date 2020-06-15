<?php
require_once __DIR__ . '/../../config.php';

$id = $_GET['id'];

$sql = "
DELETE FROM article
WHERE id = '{$id}'
";

mysqli_query($dbConn, $sql);
?>

<h2><a href="list.php">리스트로 돌아가기</a></h2>