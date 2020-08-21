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
                    <!-- <source src="./resource/Coca Cola - Anthem (Global Version).mp4" type="video/mp4"> -->
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
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand5.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand6.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand7.png" alt="코카콜라 브랜드">
                        </a>
                    </div>
                    <div class="item">
                        <a class="block" href="">
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/brand8.png" alt="코카콜라 브랜드">
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
                            <img src="https://nixpluvia.github.io/img1/pf/cocacola/vision-img.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-txt con">
                <div class="txt-wrap">
                    <div class="head">
                        <ul>
                            <li class="con-title active" data-tab-name="box-1" data-tab-body-item-name="1">Business</li>
                            <li class="con-title" data-tab-name="box-1" data-tab-body-item-name="2">Vision</li>
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
                                <p>코카콜라의 비전은 사람들이 좋아하는 음료의 브랜드를 
                                만들고, 사람들의 몸과 마음을 더 건강하게 하는 것입니다.
                                그리고 지역사회, 그리고 지구에 좋은 변화를 주는 지속 가능한
                                사업과 더 나은 미래로 향하는 방법을 찾고 있습니다.</p>
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
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/promotion-img1.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/promotion-img2.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/promotion-img3.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/promotion-img4.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/promotion-img5.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/promotion-img6.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/promotion-img7.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/promotion-img8.jpg)"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="media-slide2" data-tab-name="box-2" data-tab-body-item-name="2">
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/media-life-img1.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/media-life-img2.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/media-life-img3.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/media-life-img4.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/media-life-img5.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/media-life-img6.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/media-life-img7.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/media-life-img8.jpg)"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="media-slide3" data-tab-name="box-2" data-tab-body-item-name="3">
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/community-img1.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/community-img2.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/community-img3.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/community-img4.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/community-img5.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/community-img6.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/community-img7.png)"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="media-slide4" data-tab-name="box-2" data-tab-body-item-name="4">
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/news-img1.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/news-img2.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/news-img3.jpg)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/news-img4.png)"></div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div style="background-image:url(https://nixpluvia.github.io/img1/pf/cocacola/news-img5.png)"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sliders-arrows">
                            <div class="arrow slide-arrow1 flex" data-tab-name="box-2" data-tab-body-item-name="1"></div>
                            <div class="arrow slide-arrow2 flex" data-tab-name="box-2" data-tab-body-item-name="2"></div>
                            <div class="arrow slide-arrow3 flex" data-tab-name="box-2" data-tab-body-item-name="3"></div>
                            <div class="arrow slide-arrow4 flex" data-tab-name="box-2" data-tab-body-item-name="4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer page page6">
            <div class="footer-menu con flex">
                <div class="logo">
                    <a href="#">
                        <img src="https://nixpluvia.github.io/img1/pf/cocacola/foot-logo.svg" alt="코카콜라-로고">
                    </a>
                </div>
                <nav class="menu">
                    <ul class="flex">
                        <li><a href="#">제휴문의</a></li>
                        <li><a href="#">코카콜라 재단</a></li>
                        <li><a href="#">회사소식</a></li>
                        <li><a href="#">회사연혁</a></li>
                        <li><a href="#">자주묻는질문</a></li>
                        <li><a href="#">정책</a></li>
                        <li><a href="#">개인정보처리방침</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-content con flex">
                <div class="footer-desc">2020 The Coca-Cola Company. All Rights Reserved.</div>
                <div class="sns-menu">
                    <ul class="flex">
                        <li>
                            <a href="#">
                                <svg viewBox="0 0 43 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="nav-home-page-" transform="translate(-1338.000000, -4212.000000)">
                                            <g id="footer" transform="translate(-1.000000, 4026.000000)">
                                                <g id="Social">
                                                    <g transform="translate(1079.000000, 187.000000)">
                                                        <g id="Group-17" transform="translate(261.432836, 0.000000)">
                                                            <ellipse id="Oval-4" stroke="#D6D5D5" stroke-width="0.9" cx="20.2835821" cy="20.0543478" rx="20.2835821" ry="20.0543478"></ellipse>
                                                            <g id="Instagram" transform="translate(9.916418, 9.804348)" fill="#B7B7B7">
                                                                <path d="M10.8145191,0 C7.87745643,0 7.50917527,0.0123084886 6.3556941,0.0643436853 C5.20461692,0.116251553 4.41847249,0.297016563 3.73059076,0.561351967 C3.01944193,0.834557971 2.41634343,1.20016253 1.81509083,1.79457764 C1.21388117,2.3890352 0.844097512,2.98531781 0.567768586,3.68842961 C0.300411656,4.36853727 0.117580384,5.1457971 0.0650791756,6.28386542 C0.0124491827,7.42431056 0,7.78842961 0,10.6922992 C0,13.5961263 0.0124491827,13.9602453 0.0650791756,15.1006905 C0.117580384,16.2387588 0.300411656,17.0160186 0.567768586,17.6961263 C0.844097512,18.3992381 1.21388117,18.9955207 1.81509083,19.5899783 C2.41634343,20.1843934 3.01944193,20.5499979 3.73059076,20.8232464 C4.41847249,21.0875393 5.20461692,21.2683043 6.3556941,21.3202122 C7.50917527,21.3722474 7.87745643,21.3845559 10.8145191,21.3845559 C13.7515389,21.3845559 14.11982,21.3722474 15.2733012,21.3202122 C16.4243784,21.2683043 17.2105228,21.0875393 17.8984045,20.8232464 C18.6095534,20.5499979 19.2126519,20.1843934 19.8139045,19.5899783 C20.4151141,18.9955207 20.7848978,18.3992381 21.0612697,17.6961263 C21.3285837,17.0160186 21.5114149,16.2387588 21.5639161,15.1006905 C21.6165461,13.9602453 21.6289953,13.5961263 21.6289953,10.6922992 C21.6289953,7.78842961 21.6165461,7.42431056 21.5639161,6.28386542 C21.5114149,5.1457971 21.3285837,4.36853727 21.0612697,3.68842961 C20.7848978,2.98531781 20.4151141,2.3890352 19.8139045,1.79457764 C19.2126519,1.20016253 18.6095534,0.834557971 17.8984045,0.561351967 C17.2105228,0.297016563 16.4243784,0.116251553 15.2733012,0.0643436853 C14.11982,0.0123084886 13.7515389,0 10.8145191,0 Z M10.8145191,1.92653313 C13.7020856,1.92653313 14.0441376,1.93744099 15.1844827,1.98888199 C16.2388856,2.03641822 16.811505,2.21060455 17.1925788,2.35703313 C17.6973717,2.55099793 18.0576253,2.78269462 18.4360375,3.15687267 C18.8144927,3.53100828 19.0488378,3.88719048 19.2450198,4.38627847 C19.3931221,4.76304555 19.5692995,5.32919358 19.6173791,6.37168012 C19.6694081,7.49913768 19.6804407,7.83732402 19.6804407,10.6922992 C19.6804407,13.5472319 19.6694081,13.8854182 19.6173791,15.0128758 C19.5692995,16.0553623 19.3931221,16.6215104 19.2450198,16.9982774 C19.0488378,17.4973654 18.8144927,17.8535476 18.4360375,18.2276832 C18.0576253,18.6018613 17.6973717,18.833558 17.1925788,19.0275228 C16.811505,19.1739513 16.2388856,19.3481377 15.1844827,19.3956739 C14.0443093,19.4471149 13.7023002,19.4580228 10.8145191,19.4580228 C7.9266951,19.4580228 7.58472893,19.4471149 6.44451258,19.3956739 C5.39010974,19.3481377 4.81749026,19.1739513 4.43641649,19.0275228 C3.9316236,18.833558 3.57137001,18.6018613 3.19295778,18.2276832 C2.81454556,17.8535476 2.5801575,17.4973654 2.38397555,16.9982774 C2.23587321,16.6215104 2.05969581,16.0553623 2.0116162,15.0128758 C1.95958721,13.8854182 1.94855466,13.5472319 1.94855466,10.6922992 C1.94855466,7.83732402 1.95958721,7.49913768 2.0116162,6.37168012 C2.05969581,5.32919358 2.23587321,4.76304555 2.38397555,4.38627847 C2.5801575,3.88719048 2.81450263,3.53100828 3.19295778,3.15687267 C3.57137001,2.78269462 3.9316236,2.55099793 4.43641649,2.35703313 C4.81749026,2.21060455 5.39010974,2.03641822 6.44451258,1.98888199 C7.58485771,1.93744099 7.92690974,1.92653313 10.8145191,1.92653313 L10.8145191,1.92653313 Z" id="Fill-1"></path>
                                                                <path d="M10.8145191,14.2563706 C8.82359431,14.2563706 7.2096651,12.6606812 7.2096651,10.6922992 C7.2096651,8.72387474 8.82359431,7.1281853 10.8145191,7.1281853 C12.805401,7.1281853 14.4193302,8.72387474 14.4193302,10.6922992 C14.4193302,12.6606812 12.805401,14.2563706 10.8145191,14.2563706 Z M10.8145191,5.20165217 C7.74742687,5.20165217 5.26111045,7.65986957 5.26111045,10.6922992 C5.26111045,13.7246863 7.74742687,16.1829037 10.8145191,16.1829037 C13.8815684,16.1829037 16.3678849,13.7246863 16.3678849,10.6922992 C16.3678849,7.65986957 13.8815684,5.20165217 10.8145191,5.20165217 L10.8145191,5.20165217 Z" id="Fill-4"></path>
                                                                <path d="M17.8850539,4.98472567 C17.8850539,5.69335507 17.3040205,6.2677795 16.587291,6.2677795 C15.8706044,6.2677795 15.289571,5.69335507 15.289571,4.98472567 C15.289571,4.27609627 15.8706044,3.7016294 16.587291,3.7016294 C17.3040205,3.7016294 17.8850539,4.27609627 17.8850539,4.98472567" id="Fill-5"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg viewBox="0 0 43 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="nav-home-page-" transform="translate(-1077.000000, -4212.000000)">
                                            <g id="footer" transform="translate(-1.000000, 4026.000000)">
                                                <g id="Social">
                                                    <g transform="translate(1079.000000, 187.000000)">
                                                        <g id="Group-8">
                                                            <path d="M21.4612662,30.5056101 L21.4612662,21.0757225 L24.6801792,21.0757225 L25.1606774,17.384487 L21.4612662,17.384487 L21.4612662,15.0343723 C21.4612662,13.9665206 21.7631722,13.2434084 23.3109718,13.2434084 L25.2882433,13.2434084 L25.2882433,9.94736208 C24.3347011,9.8499229 23.3766296,9.80220988 22.4180105,9.80442129 C19.5732909,9.80442129 17.6342892,11.5197107 17.6342892,14.6686121 L17.6342892,17.384487 L14.4238806,17.384487 L14.4238806,21.0757225 L17.6342892,21.0757225 L17.6342892,30.5056101 L21.4612662,30.5056101 Z" id="Facebook" fill="#B7B7B7" fill-rule="nonzero"></path>
                                                            <ellipse id="Oval-4" stroke="#D6D5D5" stroke-width="0.9" cx="20.2835821" cy="20.0543478" rx="20.2835821" ry="20.0543478"></ellipse>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg viewBox="0 0 43 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="nav-home-page-" transform="translate(-1129.000000, -4212.000000)">
                                            <g id="footer" transform="translate(-1.000000, 4026.000000)">
                                                <g id="Social">
                                                    <g transform="translate(1079.000000, 187.000000)">
                                                        <g id="Group-9" transform="translate(52.286567, 0.000000)">
                                                            <ellipse id="Oval-4" stroke="#D6D5D5" stroke-width="0.9" cx="20.2835821" cy="20.0543478" rx="20.2835821" ry="20.0543478"></ellipse>
                                                            <path d="M16.5012172,29.3024251 C24.4026748,29.3024251 28.7235855,22.8302997 28.7235855,17.2181875 C28.7235855,17.0342775 28.7198167,16.8511955 28.7112741,16.6691072 C29.5499622,16.0696815 30.2791034,15.3217035 30.8543091,14.4700535 C30.0845485,14.8080637 29.2562455,15.0359432 28.387323,15.1386215 C29.2742521,14.612975 29.9551523,13.7809499 30.2762558,12.7892766 C29.4461103,13.2757563 28.5271044,13.6295823 27.5486348,13.8201167 C26.7648039,12.9946332 25.6483956,12.4782609 24.41306,12.4782609 C22.0405457,12.4782609 20.1166885,14.3803757 20.1166885,16.7251662 C20.1166885,17.0585394 20.1544604,17.3825555 20.2280781,17.6935713 C16.6580001,17.5161201 13.492191,15.8259862 11.3736951,13.2561315 C11.0044345,13.8836282 10.7919568,14.612975 10.7919568,15.3907629 C10.7919568,16.8643615 11.5503272,18.165146 12.7035025,18.9261244 C11.9989843,18.9046779 11.3369282,18.7132327 10.7579536,18.3947644 C10.7569486,18.4124847 10.7569486,18.4302878 10.7569486,18.4489189 C10.7569486,20.5061276 12.2379275,22.2233387 14.2033255,22.6127708 C13.8426075,22.7098183 13.4628779,22.7621511 13.0709206,22.7621511 C12.7942054,22.7621511 12.5250279,22.7350739 12.263388,22.6855565 C12.8102857,24.3729578 14.3960379,25.6008738 16.276428,25.6354863 C14.805918,26.7746354 12.9538359,27.4534712 10.9412021,27.4534712 C10.5945543,27.4534712 10.2526804,27.4339292 9.91641791,27.3946796 C11.8176622,28.5992447 14.0749344,29.3024251 16.5012172,29.3024251" id="Twitter" fill="#B7B7B7"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="nav-home-page-" transform="translate(-1234.000000, -4212.000000)">
                                            <g id="footer" transform="translate(-1.000000, 4026.000000)">
                                                <g id="Social">
                                                    <g transform="translate(1079.000000, 187.000000)">
                                                        <g id="Group-15" transform="translate(156.859701, 0.000000)">
                                                            <ellipse id="Oval-4" stroke="#D6D5D5" stroke-width="0.9" cx="20.2835821" cy="20.0543478" rx="20.2835821" ry="20.0543478"></ellipse>
                                                            <path d="M18.0298507,24.9565217 L18.0298507,16.9347826 L24.3402985,20.9458723 L18.0298507,24.9565217 Z M32.827678,14.3703239 C32.5374135,13.2748368 31.6822033,12.411821 30.5961529,12.1189784 C28.6276734,11.5869565 20.7342245,11.5869565 20.7342245,11.5869565 C20.7342245,11.5869565 12.8409833,11.5869565 10.8725039,12.1189784 C9.78645339,12.411821 8.93124318,13.2748368 8.64097868,14.3703239 C8.11343284,16.356497 8.11343284,20.4998952 8.11343284,20.4998952 C8.11343284,20.4998952 8.11343284,24.643503 8.64097868,26.6294664 C8.93124318,27.7249536 9.78645339,28.588179 10.8725039,28.880812 C12.8409833,29.4130435 20.7342245,29.4130435 20.7342245,29.4130435 C20.7342245,29.4130435 28.6276734,29.4130435 30.5961529,28.880812 C31.6822033,28.588179 32.5374135,27.7249536 32.827678,26.6294664 C33.3552239,24.643503 33.3552239,20.4998952 33.3552239,20.4998952 C33.3552239,20.4998952 33.3552239,16.356497 32.827678,14.3703239 L32.827678,14.3703239 Z" id="YouTube" fill="#B7B7B7"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="nav-home-page-" transform="translate(-1182.000000, -4212.000000)">
                                            <g id="footer" transform="translate(-1.000000, 4026.000000)">
                                                <g id="Social">
                                                    <g transform="translate(1079.000000, 187.000000)">
                                                        <g id="Group-11" transform="translate(104.573134, 0.000000)">
                                                            <ellipse id="Oval-4" stroke="#D6D5D5" stroke-width="0.9" cx="20.2835821" cy="20.0543478" rx="20.2835821" ry="20.0543478"></ellipse>
                                                            <path d="M27.757246,27.4441234 L24.6543669,27.4441234 L24.6543669,22.6402805 C24.6543669,21.4948107 24.6316842,20.0209958 23.0404044,20.0209958 C21.4241156,20.0209958 21.1780953,21.2682468 21.1780953,22.5574755 L21.1780953,27.4441234 L18.0763794,27.4441234 L18.0763794,17.5655961 L21.0530496,17.5655961 L21.0530496,18.9152034 L21.095507,18.9152034 C21.5096119,18.138331 22.5233548,17.3194811 24.0343727,17.3194811 C27.1762195,17.3194811 27.757246,19.3648808 27.757246,22.025568 L27.757246,27.4441234 Z M14.5745171,16.2142637 C13.5764776,16.2142637 12.7726952,15.41669 12.7726952,14.4339551 C12.7726952,13.4523703 13.5764776,12.6542216 14.5745171,12.6542216 C15.5679037,12.6542216 16.3745941,13.4523703 16.3745941,14.4339551 C16.3745941,15.41669 15.5679037,16.2142637 14.5745171,16.2142637 Z M13.0192971,27.4441234 L16.1274107,27.4441234 L16.1274107,17.5655961 L13.0192971,17.5655961 L13.0192971,27.4441234 Z M29.3037419,9.80434783 L11.461169,9.80434783 C10.6091131,9.80434783 9.91641791,10.4725386 9.91641791,11.2959888 L9.91641791,29.011669 C9.91641791,29.8362693 10.6091131,30.5056101 11.461169,30.5056101 L29.3037419,30.5056101 C30.156961,30.5056101 30.8548907,29.8362693 30.8548907,29.011669 L30.8548907,11.2959888 C30.8548907,10.4725386 30.156961,9.80434783 29.3037419,9.80434783 L29.3037419,9.80434783 Z" id="LinkedIn" fill="#B7B7B7"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>