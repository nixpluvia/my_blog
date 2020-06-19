<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/index.css">
<?php
include "../part/head_body.php";
?>

<!--상단 슬라이드 배너-->
<div class="top-bn-slider">
    <div class="sliderbox">
        <div class="slides">
            <div class="active" style="background-image: url(./resource/images/top_bn_box_1.jpg);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div style="background-image: url(./resource/images/top_bn_box_2.jpg);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div style="background-image: url(./resource/images/top_bn_box_3.jpg); background-size:contain; background-color: rgb(214,223,253);">
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
    <div class="squareImage" style="background-image: url(./resource/images/squareImage_1.jpg)"></div>
    <div><div class="squareArticleBox"></div></div>
    <div><div class="squareArticleBox"></div></div>
    <div class="squareImage" style="background-image: url(./resource/images/squareImage_2.jpg)"></div>
</div>
<?php
include "../part/foot.php";
?>