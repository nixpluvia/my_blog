
function slide(){
    var $this = $(this);
    var $thisLeft = $this.index() == 0;
    var $parentSlide = $this.closest('.top-bn-slider');
    var $slideActive = $parentSlide.find('.slides > .active');
    var $dotActive = $parentSlide.find('.btn-slide-dots > .active');
    var $slidePost = $slideActive.next();
    var $dotPost = $dotActive.next();

    if ( $thisLeft ) {
        $slidePost = $slideActive.prev();
        $dotPost = $dotActive.prev();
        if ($slidePost.length == 0) {
            $slidePost = $parentSlide.find('.slides > :last-child');
            $dotPost = $parentSlide.find('.btn-slide-dots > :last-child');
        }
    }
    else {
        if ($slidePost.length == 0) {
            $slidePost = $parentSlide.find('.slides > :first-child');
            $dotPost = $parentSlide.find('.btn-slide-dots > :first-child');
        }
    }

    $slideActive.removeClass('active');
    $dotActive.removeClass('active');
    $slidePost.addClass('active');
    $dotPost.addClass('active');
}

function slideDots() {
    var $this = $(this);
    var $thisIndex = $this.index();
    var $parentBtn = $this.closest('.top-bn-slider');
    var $slideIndex = $parentBtn.find('.slides > .slide').eq($thisIndex);
    var $slideActive = $parentBtn.find('.slides > .active');
    var $dotActive = $parentBtn.find('.btn-slide-dots > .active');

    $slideActive.removeClass('active');
    $dotActive.removeClass('active');
    $slideIndex.addClass('active');
    $this.addClass('active');
}

/* 슬라이드 인터벌 */
function slideInterval(){
    setInterval(function(){
        $('.top-bn-slider > .slide-button > span:last-child').click();
    }, 5000);
};

function slide__init(){
    $('.top-bn-slider > .slide-button > span').click(slide);
    $('.top-bn-slider > .btn-slide-dots > li').click(slideDots);
}


function searchClick(){
    var $this = $(this);
    if ($this.hasClass('active')) {
        $this.removeClass('active');
    }
    else {
        $this.addClass('active');
    }
}

function searchClick__init(){
    $('.search-icon-box').click(searchClick);
}


/* 요소의 높이 값 */
var windowHeight = $(window).height();

function scrollEvent(){
    var $this = $(this);
    var st = $this.scrollTop();
    var mainSectionT = $('.main-section-1').offset().top;
    var bestSectionT = $('.best-seller-section').offset().top;
    var bs_productT = $('.best-seller-section > ul > li > a > .product-img-box').offset().top;
    var product1T = $('.product-list-section > ul > li.pd-1').offset().top;
    var product2T = $('.product-list-section > ul > li.pd-6').offset().top;

    if (st > (mainSectionT - windowHeight + 300)) {
        $('.main-section-1').addClass('active');
    }

    if (st > (bestSectionT - windowHeight + 300)) {
        $('.best-seller-section').addClass('active');
    }

    if (st > (bs_productT - windowHeight + 300)) {
        $('.best-seller-section > ul > li > a > .product-img-box').addClass('active');
    }
    if (st > (product1T - windowHeight + 300)) {
        $('.product-list-section > ul > li.pd-list-1').addClass('active');
    }
    if (st > (product2T - windowHeight + 300)) {
        $('.product-list-section > ul > li.pd-list-2').addClass('active');
    }
}


function windowScroll() {
    $(window).scroll(scrollEvent);
}



/* 실행 */
$(function(){
    slide__init();
    slideInterval();
    searchClick__init();
    windowScroll();
});