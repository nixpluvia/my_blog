<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/index.css">
<?php
include "../part/head_body.php";
?>
<?php
$dbConn = mysqli_connect("site6.blog.oa.gg","site6","sbs123414","site6",3306) or die ("DB CONNECT ERROR");

$sql = "
SELECT *
FROM article
ORDER BY ID DESC
LIMIT 2;
";

$rs = mysqli_query($dbConn, $sql);
$squareArticles = [];
while ( $squareArticle = mysqli_fetch_assoc($rs) ) {
    $squareArticles[] = $squareArticle;
}
$squareArticleBg1 = str_replace(array("![image](",")"),"",substr($squareArticles[0]['body'], strpos($squareArticles[0]['body'], "![image]" ), strpos($squareArticles[0]['body'], ")" ) ));
$squareArticleBg2 = str_replace(array("![image](",")"),"",substr($squareArticles[1]['body'], strpos($squareArticles[1]['body'], "![image]" ), strpos($squareArticles[1]['body'], ")" ) ));
?>

<!--상단 슬라이드 배너-->
<div class="top-bn-slider con">
    <div class="sliderbox">
        <div class="slides">
            <div class="active" style="background-image: url(https://nixpluvia.github.io/img1/blog/site/top_bn_box_1.jpg);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div style="background-image: url(https://nixpluvia.github.io/img1/blog/site/top_bn_box_4.jpg);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div
                style="background-image: url(https://nixpluvia.github.io/img1/blog/site/top_bn_box_5.jpg);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div
                style="background-image: url(https://nixpluvia.github.io/img1/blog/site/top_bn_box_6.jpg); background-size:contain; background-color: rgb(255,222,85);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="side-bar">
            <div><span><i class="fas fa-angle-left"></i></span></div>
            <div><span><i class="fas fa-angle-right"></i></span></div>
        </div>
    </div>
</div>

<div class="squareContentBox flex con">
    <ul class="flex">
        <li class="flex">
            <?php if (empty($squareArticleBg1)){ ?>
                <a class="squareImage" href="/detail.php?id=<?=$squareArticles[0]['id']?>"></a>
            <?php } else { ?>
                <a class="squareImage" href="/detail.php?id=<?=$squareArticles[0]['id']?>" style="background-image: url(<?=$squareArticleBg1?>)"></a>
            <?php } ?>
            <div class="squareTextBox flex">
                <div class="squareTextBox-wrap">
                    <div class="type">설명</div>
                    <div class="title"><?=$squareArticles[0]['title']?></div>
                    <div class="textBox">
                        <?=$squareArticles[0]['body']?>
                    </div>
                    <a href="/detail.php?id=<?=$squareArticles[0]['id']?>">
                        더보기
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </li>
        <li class="flex">
            <?php if (empty($squareArticleBg2)){ ?>
                <a class="squareImage" href="/detail.php?id=<?=$squareArticles[1]['id']?>"></a>
            <?php } else { ?>
                <a class="squareImage" href="/detail.php?id=<?=$squareArticles[1]['id']?>" style="background-image: url(<?=$squareArticleBg2?>)"></a>
            <?php } ?>
            <div class="squareTextBox flex">
                <div class="squareTextBox-wrap">
                    <div class="type">설명</div>
                    <div class="title"><?=$squareArticles[1]['title']?></div>
                    <div class="textBox">
                        <?=$squareArticles[1]['body']?>
                    </div>
                    <a href="/detail.php?id=<?=$squareArticles[1]['id']?>">
                        더보기
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </li>
    </ul>



</div>

<?php
include "../part/foot.php";
?>