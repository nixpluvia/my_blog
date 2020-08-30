<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/portfolio.css">
<script src="/resource/portfolio.js"></script>
<?php
include "../part/head_body.php";
include "../config.php";

$sql = "
SELECT *
FROM portfolio
ORDER BY id DESC
";

$rs = mysqli_query($dbConn, $sql);
$portfolios = [];

while ($portfolio = mysqli_fetch_assoc($rs) ) {
    $portfolios[] = $portfolio;
}

?>

<div class="portfolio-animation-box con">
    <div class="ani-img">
        <div class="img-head img-box">
            <img src="https://nixpluvia.github.io/img1/blog/site/cutslime-head.svg" alt="">
            <img class="slime-eye left" src="https://nixpluvia.github.io/img1/blog/site/eye-ani-big.gif" alt="">
            <img class="slime-eye right" src="https://nixpluvia.github.io/img1/blog/site/eye-ani-big.gif" alt="">
        </div>
        <div class="slider portfolio-slider">
            <div class="btn-slide">
                <i class="teeth-left"></i>
                <i class="teeth-right"></i>
            </div>
            <div class="slides portfolio-slides">
                <?php foreach($portfolios as $pf ) { ?>
                    <a class="slide" href="<?=$pf['siteUrl']?>" target="_blank"
                    style="background-image: url(<?=$pf['thumbImgUrl']?>)"></a>
                <?php } ?>
            </div>
        </div>
        <div class="img-foot img-box">
            <img src="https://nixpluvia.github.io/img1/blog/site/cutslime-foot.svg" alt="">
        </div>
    </div>
</div>
<nav class="con">
    <ul>
        <li class="flex list1">
            <a href="/pf/cleaderm" target="_blank">클리덤 닥터락토</a>
            <ul>
                <li>
                    <a href="https://cleaderm.co.kr/" target="_blank">클리덤 닥터락토 원본 사이트</a>
                </li>
            </ul>
        </li>
        <li class="flex list1">
            <a href="/pf/heimish" target="_blank">헤이미쉬 공식 온라인몰</a>
            <ul>
                <li>
                    <a href="http://www.eheimish.com/" target="_blank">헤이미쉬 원본 사이트</a>
                </li>
            </ul>
        </li>
        <li class="flex list1">
            <a href="/pf/designpixel" target="_blank">디자인 픽셀 모작</a>
            <ul>
                <li>
                    <a href="https://designpixel.co.kr/" target="_blank">디자인 픽셀 원본 사이트</a>
                </li>
            </ul>
        </li>
        <li class="flex list1">
            <a href="/pf/artfive/index.php" target="_blank">아트파이브 모작</a>
            <ul>
                <li>
                    <a href="http://www.artfive.co.kr/" target="_blank">아트파이브 원본 사이트</a>
                </li>
            </ul>
        </li>
        <li class="flex list1">
            <a href="/pf/cocacola/index.php" target="_blank">코카콜라 리디자인</a>
        </li>
    </ul>
</nav>
<h1 class="con">디자인</h1>
<nav class="con">
    <ul>
        <li class="flex list1">
            <a href="https://nixpluvia.github.io/img1/pf/artworks/1/1.png" target="_blank">아트워크1</a>
            <ul>
                <li>창작여부 : 모작</li>
            </ul>
            <ul>
                <li>출처: <a href="https://www.mangoboard.net/MangoTemplateAll.do">망고보드</a></li>
            </ul>
        </li>
        <li class="flex list1">
            <a href="https://nixpluvia.github.io/img1/pf/artworks/2/2.png" target="_blank">아트워크2</a>
            <ul>
                <li>창작여부 : 모작</li>
            </ul>
            <ul>
                <li>출처: <a href="https://www.mangoboard.net/MangoTemplateAll.do">망고보드</a></li>
            </ul>
        </li>
        <li class="flex list1">
            <a href="https://nixpluvia.github.io/img1/pf/artworks/3/3.png" target="_blank">아트워크3 앱</a>
            <ul>
                <li>창작여부 : 창작</li>
            </ul>
        </li>
        <li class="flex list1">
            <a href="https://nixpluvia.github.io/img1/pf/artworks/4/4.png" target="_blank">코카콜라 웹사이트 리디자인 시안</a>
            <ul>
                <li>창작여부 : 창작</li>
            </ul>
        </li>
        <li class="flex list1">
            <a href="https://nixpluvia.github.io/img1/pf/portfolio/1.png" target="_blank">포트폴리오 시안</a>
            <ul>
                <li>창작여부 : 창작</li>
            </ul>
        </li>
        <li class="flex list1">
            <a href="https://nixpluvia.github.io/img1/pf/portfolio/2.png" target="_blank">포트폴리오 스킬 페이지</a>
            <ul>
                <li>창작여부 : 창작</li>
            </ul>
        </li>
    </ul>
</nav>
<?php
include "../part/foot.php";
?>