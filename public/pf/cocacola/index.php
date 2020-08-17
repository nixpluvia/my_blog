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
                <a href="#">
                    <?php require_once __DIR__ . "/logo.php" ?>
                </a>
            </div>
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
        <div class="page page2"></div>
        <div class="page page3"></div>
        <div class="page page4"></div>
        <div class="page page5"></div>
    </div>
</body>
</html>