<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/pf/cocacola/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/pf/cocacola/index.js"></script>
    <title>The Coca-Cola Company</title>
</head>
<body>
    <div class="wrap con">
        <div class="top-bar">
            <div class="logo img-box">
                <a class="block" href="#">
                    <?php require_once __DIR__ . "/logo.php" ?>
                </a>
            </div>
            <!--메인 페이지 메뉴-->
            <nav class="top-menu-bar">
                <ul class="flex">
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Coke Story</a></li>
                    <li><a href="#">Life</a></li>
                    <li><a href="#">Community</a></li>
                </ul>
            </nav>
            <!-- 2페이지 이후 부터 나오는 메뉴 버튼-->
            <div class="btn-menu"></div>
        </div>

        <ul class="scroll-dots"></ul>
    </div>
    <div class="top-bar-bg"></div>

    <div class="scroll-box">
        <div class="page page1">
            <div class="bg-video">
                <video height="100%" muted="muted" preload="auto" autoplay="" loop="" playsinline="">
                    <source src="https://nixpluvia.github.io/img1/pf/cocacola/Coca Cola - Anthem (Global Version).mp4" type="video/mp4">
                    <!-- <source src="./resource/v005.mp4" type="video/mp4"> -->
                </video>
            </div>
            <div class="btn-scroll">
                <p>Scroll Down</p>
                <div class="line"></div>
            </div>
        </div>
        <div class="page page2">
            <div class="wrap con">
                <figure class="main-img">
                    <img src="https://nixpluvia.github.io/img1/pf/cocacola/figure1.png" alt="존 펨버턴">
                </figure>
                <div class="page-bg  img-box">
                    <img src="https://nixpluvia.github.io/img1/pf/cocacola/bg1.png" alt="배경이미지">
                </div>
                <div class="page-num flex">
                    <div class="num">02</div>
                    <div class="line"></div>
                </div>
                <div class="red-line"></div>
            </div>
            <div class="content-txt con flex">
                <div class="con-title">About</div>
                <div class="txt-box">
                    <div class="txt1">
                        <p>코카콜라는 약사인 존 펨버턴 박사의 연구 끝에</p>
                        <p>1886년 미국 조지아주 애틀랜타에서  탄생했습니다.</p>
                    </div>
                    <div class="txt2">
                        <p>그 후 130여 년 동안 코카-콜라는 전 세계 역사상</p>
                        <p>가장 많이 사랑받았으며 영향력 있는 브랜드로 기억되고 있습니다.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="page page3"></div>
        <div class="page page4"></div>
        <div class="page page5"></div>
    </div>
</body>
</html>