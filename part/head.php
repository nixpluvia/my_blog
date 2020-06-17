<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="/resource/common.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/resource/common.js"></script>
    <title>블로그</title>
</head>

<body>
    <!--모바일 상단 바-->
    <div class="mobile-top-bar window-md-down flex">
        <a href="#" class="btn-toggle-mobile-side-bar flex-self-c">
            <div></div>
            <div></div>
            <div></div>
        </a>
        <a href="/"class="title">NIX BLOG</a>
    </div>
    <!--모바일 사이드 바-->
    <div class="mobile-side-bar-bg window-md-down"></div>
    <div class="mobile-side-bar window-md-down">
        <div class="logo-box">
            <a href="/">NIX BLOG</a>
            <div class="logo-border"></div>
        </div>
        <nav class="menu-box-1">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Articles</a></li>
                <li><a href="#">About me</a></li>
                <li>
                    <a href="#">SNS</a>
                    <ul>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Tistory블로그</a></li>
                        <li>
                            <a href="#">Github</a>
                            <ul>
                                <li><a href="#">my_blog</a></li>
                                <li><a href="#">test</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!--pc 상단 바-->
    <div class="top-bar window-md-up">
        <div class="top-bar-wrap flex con">
            <a class="logo img-box flex-self-c" href="/">
            </a>
            <nav class="menu-box-1 flex-jc-end flex-1-0-0">
                <ul class="flex">
                    <li class="flex"><a href="/itPrograming.php" class="flex-ai-c">IT PROGRAMING</a></li>
                    <li class="flex"><a href="/photo.php" class="flex-ai-c">PHOTO</a></li>
                    <li class="flex"><a href="/dailyLife.php" class="flex-ai-c">DAILY LIFE</a></li>
                    <li class="flex"><a href="/aboutMe.php" class="flex-ai-c">ABOUT ME</a></li>
                    <li class="flex">
                        <a href="#" class="flex-ai-c">SNS</a>
                        <ul>
                            <li class="flex"><a href="#" class="flex-ai-c flex-jc-c flex-1-0-0">YOUTUBE</a></li>
                            <li class="flex"><a href="#" class="flex-ai-c flex-jc-c flex-1-0-0">TISTORY</a></li>
                            <li class="flex"><a href="#" class="flex-ai-c flex-jc-c flex-1-0-0">GITHUB</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--상단 슬라이드 배너-->
    <div class="top-bn-slider">
        <div class="sliderbox">
            <div class="slides">
                <div class="active"></div>
                <div></div>
                <div style="background-size:contain; background-color: rgb(214,223,253);"></div>
            </div>
            <div class="side-bar">
                <div><span><i class="fas fa-angle-left"></i></span></div>
                <div><span><i class="fas fa-angle-right"></i></span></div>
            </div>
        </div>
    </div>