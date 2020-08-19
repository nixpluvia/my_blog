<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="/pf/cocacola/index.css">
    <script src="/pf/cocacola/index.js"></script>
    <title>The Coca-Cola Company</title>
</head>
<body>
    <!--상단 바-->
    <div class="wrap con">
        <div class="top-bar">
            <!-- 메인 로고 -->
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

        <!-- 페이지 네비게이션 -->
        <ul class="scroll-dots"></ul>
    </div>
    <!-- 메인 페이지 상단 바 배경 -->
    <div class="top-bar-bg"></div>

    <!--스크롤 박스-->
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

                <div class="page-bg  img-box no-drag">
                    <img src="https://nixpluvia.github.io/img1/pf/cocacola/bg1.png" alt="배경이미지">
                </div>

                <div class="page-num flex">
                    <div class="num">02</div>
                </div>

                <div class="red-line"></div>

                <div class="tag1">SINCE 1886</div>
                <div class="tag2">coca-father</div>
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
        <div class="page page3">
            <div class="wrap con">
                <div class="page-num flex">
                    <div class="num">03</div>
                </div>
                
                <div class="red-line"></div>

                <div class="tag1">brands</div>
            </div>


            <div class="page-bg img-box no-drag">
                <img src="https://nixpluvia.github.io/img1/pf/cocacola/bg2.png" alt="배경이미지">
            </div>

            <div class="content-txt con">
                <div class="txt-wrap flex">
                    <div class="con-title">Brands</div>
                    <div class="txt-box">
                        <div class="txt1">
                            <p>글로벌 종합 음료회사, 코카-콜라는 전 세계 200여 개국 이상에 진출해있으며, 탄산, 스포츠음료, 먹는 샘물, 주스, 차, 커피 등</p>
                            <p>총 500여 개 이상의 브랜드, 4,700여 가지 종류의 제품을 보유하고 있습니다. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider" dir="rtl">
                <div id="slide1">
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand1.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand2.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand3.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand4.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand4.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand4.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand4.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand4.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand4.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand4.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                </div>
            </div>

            <div class="slider-dot flex"></div>

        </div>
        <div class="page page4">
            <div class="wrap con">
                <div class="page-bg img-box no-drag">
                    <img src="https://nixpluvia.github.io/img1/pf/cocacola/bg3.png" alt="배경이미지">
                </div>

                <div class="red-line"></div>

                <div class="page-num flex">
                    <div class="num">04</div>
                </div>

                <div class="tag1">sustainable business</div>

                <div class="content-img con">
                    <ul>
                        <li class="con-img1 img-box active" data-tab-name="box-1" data-tab-body-item-name="1">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/img1.png" alt="">
                        </li>
                        <li class="con-img2 img-box" data-tab-name="box-1" data-tab-body-item-name="2">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/img1.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-txt con">
                <div class="txt-wrap">
                    <div class="head">
                        <ul>
                            <li class="con-title active" data-tab-name="box-1" data-tab-body-item-name="1">Business</li>
                            <li class="con-title" data-tab-name="box-1" data-tab-body-item-name="2">Business?</li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="txt-box">
                            <li class="txt1 active" data-tab-name="box-1" data-tab-body-item-name="1">
                                <p>우리는 더 지속 가능하고 더 나은 공유된 미래를 만들기 위해
                                사회적으로 행동하고 있습니다 . 올바른 행동을 실천 함으로써
                                사람들의 생활, 지역사회, 그리고 지구를 위해 더 좋은 변화를
                                전파하기 위해서 노력하고 있습니다.</p>
                            </li>
                            <li class="txt2" data-tab-name="box-1" data-tab-body-item-name="2">
                                <p>우리는 더 지속 가능하고 더 나은 공유된 미래를 만들기 위해
                                사회적으로 행동하고 있습니다 . 올바른 행동을 실천 함으로써
                                사람들의 생활, 지역사회, 그리고 지구를 위해 더 좋은 변화를
                                전파하기 위해서 노력하고 있습니다.</p>
                            </li>
                        </ul>
                        <div class="btn-tab-box flex">
                            <div class="active" data-tab-name="box-1" data-tab-head-item-name="1"></div>
                            <div data-tab-name="box-1" data-tab-head-item-name="2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page page5">
            <div class="wrap con">
                <div class="page-bg no-drag">
                    <img src="https://nixpluvia.github.io/img1/pf/cocacola/bg4.png" alt="배경이미지">
                </div>

                <div class="red-line"></div>

                <div class="page-num flex">
                    <div class="num">05</div>
                </div>
            </div>
            <div class="content">
                <div class="con-title">Media</div>
                <div class="media-content flex">
                    <div class="slide-tab">
                        <ul class="flex">
                            <li class="flex active" data-tab-name="box-2" data-tab-head-item-name="1">
                                <div></div>
                                <p>Promotion</p>
                            </li>
                            <li class="flex" data-tab-name="box-2" data-tab-head-item-name="2">
                                <div></div>
                                <p>Life</p>
                            </li>
                            <li class="flex" data-tab-name="box-2" data-tab-head-item-name="3">
                                <div></div>
                                <p>Community</p>
                            </li>
                            <li class="flex" data-tab-name="box-2" data-tab-head-item-name="4">
                                <div></div>
                                <p>News</p>
                            </li>
                        </ul>
                    </div>
                    <div class="media-slider">
                        <div class="sliders">
                            <div class="media-slide1 active" data-tab-name="box-2" data-tab-body-item-name="1">
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img1.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img3.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img4.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img5.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img6.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img7.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img8.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="media-slide2" data-tab-name="box-2" data-tab-body-item-name="2">
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img1.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img3.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img4.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img5.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img6.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img7.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img8.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="media-slide3" data-tab-name="box-2" data-tab-body-item-name="3">
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img1.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img3.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img4.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img5.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img6.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img7.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img8.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="media-slide4" data-tab-name="box-2" data-tab-body-item-name="4">
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img1.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img3.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img4.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img5.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img6.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img7.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="https://nixpluvia.github.io/img1/pf/cocacola/promotion-img8.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="sliders-arrows">
                            <div class="arrow slide-arrow1"></div>
                            <div class="arrow slide-arrow2"></div>
                            <div class="arrow slide-arrow3"></div>
                            <div class="arrow slide-arrow4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>