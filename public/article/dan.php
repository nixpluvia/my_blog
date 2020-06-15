<?php
$dan = $_GET['dan'];
$limit = $_GET['limit'];

echo "<h1 style=\"color: pink\">{$dan}단</h1>";

for ( $i = 1 ; $i <= $limit ; $i++ ){

    $rs = $dan * $i;
    echo "{$dan} * {$i} = {$rs}<br>";
};
?>