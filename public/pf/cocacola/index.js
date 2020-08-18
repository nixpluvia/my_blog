/* 구역 스크롤 */
function ScrollBox__init() {
    var animationDuration = 800;

    $(".scroll-box > .page").on("mousewheel DOMMouseScroll", function (e) {
        e.preventDefault();
        var $this = $(this);
        var $body = $('body');
        var $scrollBox = $(this).closest('.scroll-box');

        /* 마우스 휠 이벤트 중단 여부 판단*/
        var nowWork = $body.data('scroll-box-now-work');

        if (nowWork == true) {
            return;
        }

        var wheelUp = true;
        /* 마우스 휠 이벤트 정보 */
        var delta = window.event.wheelDelta;
        /* 휠 업하면 +120, 휠 다운 하면 -120 */
        if (delta < 0) {
            wheelUp = false;
        }

        var $post = null;
        
        if (wheelUp) {
            if ($this.prev().length > 0) {
                $post = $this.prev();
            }
            // 마우스휠을 아래에서 위로
        } else {
            if ($this.next().length > 0) {
                $post = $this.next();
            }
        }

        /* 현재 페이지의 다음이나 이전 요소가 없지 않을 때 실행 */
        if ($post != null) {
            var moveTop = $post.offset().top;
            var postIndex = $post.index();

            // 화면 이동 방지 0.8초(800)
            $body.data('scroll-box-now-work', true);
            // 현재 페이지의 숫자 기입
            $body.data('scroll-box-index', $post.index());

            /* 특정 구역 여부 판단 실행 */
            topBarScroll__init();

            // dot의 active 변경
            $('.scroll-dots > li.active').removeClass('active');
            $('.scroll-dots > li').eq(postIndex).addClass('active');

            /* 페이지 active 삭제 */
            $this.removeClass('active');

            /* 스크롤 애니메이션 실행 */
            $("html,body")
                .stop()
                .animate({
                    scrollTop: moveTop + "px"
                }, {
                    duration: animationDuration,
                    complete: function () {
                        /* 중복 마우스 휠 방지 해제 */
                        $body.data('scroll-box-now-work', false);
                        /* 페이지 active 추가 */
                        $post.addClass('active');
                    }
                });
        }
    });

    // 화면 resize 함수 실행
    $(window).resize(function(){
        var $scrollBox = $('.scroll-box');
        var index = $('body').data('scroll-box-index');
        

        // 현재페이지가 없을 때 0 기입
        if (index == null ) {
            index = $scrollBox.data('scroll-box-index', 0);
        }
        
        // 현재 페이지의 top 값
        var moveTop = $scrollBox.find(' > .page').eq(index).offset().top;

        var animationDuration = 0;

        $("html,body")
        .stop()
        .animate({
            scrollTop: moveTop + "px"
        }, {
            duration: animationDuration,
            complete: function () {
                $scrollBox.data('scroll-box-now-work', false);
            }
        });
    });
}

/* dot 클릭 이벤트 */
function sideDotsScroll__init() {
    $('.scroll-dots > li').click(function (e) {
        e.preventDefault();
        
        
        var $scrollBox = $('.scroll-box');
        var animationDuration = 800;

        /* 중복 클릭 클릭 방지 */
        var nowWork = $scrollBox.data('scroll-box-now-work');
        if (nowWork == true) {
            return;
        }

        var $this = $(this);
        var dotIndex = $this.index();
        /* 누른 버튼과 같은 숫자의 페이지로 이동 */
        var moveTop = $('.scroll-box > .page').eq(dotIndex).offset().top;
        // 현재 페이지의 숫자 기입
        $('body').data('scroll-box-index', dotIndex);

        /* 특정 구역 여부 판단 실행 */
        topBarScroll__init();

        /* dot에 active 변경 */
        $('.scroll-dots > li.active').removeClass('active');
        $this.addClass('active');

        /* 페이지의 클래스 */
        var $activedPage = $('.scroll-box > .page.active');
        var $postPage = $('.scroll-box > .page').eq(dotIndex);

        /* 페이지 active 제거 */
        $activedPage.removeClass('active');

        $scrollBox.data('scroll-box-now-work', true);
        /* 스크롤 애니메이션 */
        $("html,body")
            .stop()
            .animate({
                scrollTop: moveTop + "px"
            }, {
                duration: animationDuration,
                complete: function () {
                    /* 중복 클릭 방지 해제 */
                    $scrollBox.data('scroll-box-now-work', false);
                    /* 페이지 active 추가 */
                    $postPage.addClass('active');
                }
            });
    });
}

/* 다른 요소 스크롤 방지 */
function preventScroll__init(){
    $('.scroll-box, .scroll-dots, body>.wrap, .btn-scroll, body, html').on("mousewheel DOMMouseScroll", function(e){
        e = e || window.event;
        e.preventDefault();
        e.stopPropagation();
        return false;
    })
}

/* 특정 구역 여부 판단 */
function topBarScroll__init() {
    var ScrollIndex = $('body').data('scroll-box-index');

    if ( ScrollIndex > 0) {
        $('body').addClass('content_page');
    } else {
        $('body').removeClass('content_page');
    }
}




/* 스크롤 dots 만들기 */
function addDot__init() {
    for (var i = 1; i <= $('.scroll-box > .page').length; i++) {
        $('.scroll-dots').append('<li class="dot"></li>');
    }
}


function pageHover__init(){
    $('.top-bar').mouseenter(function(){
        if( $('body').data('scroll-box-index') == 0 ){
            $('body').addClass('topbar_Down');
        }
    })
    $('.top-bar').mouseleave(function(){
        $('body').removeClass('topbar_Down');
    })
}
// refresh할 때 0번으로 초기화 하기
function nowPage() {
    $(document).ready(function(){
        // 스크롤 0 으로 이동
        // 이전에 있던 class remove
        $('body').removeClass('active');
        $('body').removeClass('topbar_Down');
        $('body').removeClass('content_page');
        $('.scroll-box > .page').removeClass('active');
        $('.scroll-dots > .dot').removeClass('active');
        // 0번 페이지에 클래스 추가
        setTimeout(function(){
            $(window).scrollTop(0);
            $('body').data('scroll-box-index', 0);
            $('.scroll-box > .page').eq(0).addClass('active');
            $('.scroll-dots > .dot').eq(0).click();
        }, 100)
    });
}

/* 슬릭 슬라이더 */
function slickSlider1(){
    $('#slide1').slick({
        infinite: true,
        slidesToShow: 4,
        variableWidth: true,
        arrows: false,
        dots: true,
        appendDots:$('.page3 > .slider-dot'),
        rtl: true
    })
}

/* tab box */
function tabBox__init(){
    $('[data-tab-head-item-name]').click(function(){
        var $this = $(this);
        var tabName = $this.attr('data-tab-name');
        var itemName =$this.attr('data-tab-head-item-name');
        
        $('[data-tab-name="' + tabName + '"]').removeClass('active');

        $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName +'"]').addClass('active');
        $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName +'"]').addClass('active');
    });
}

$(function(){
    // 스크롤 페이지네이션 버튼 추가
    addDot__init();
    // 메인 페이지 - 상단 메뉴 바
    pageHover__init();
    
    // 원페이지 스크롤
    ScrollBox__init();
    // 스크롤 페이지네이션
    sideDotsScroll__init();
    // 스크롤 방지
    preventScroll__init();
    
    // refresh할 때 0번으로 초기화 하기
    nowPage();
    // 슬릭슬라이더
    slickSlider1();
    // 탭 박스
    tabBox__init();
});