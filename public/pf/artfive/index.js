function barClick__init() {
    $('.bar-icon-box').click(function () {
        $(this).toggleClass('active');
    })
}

/* 구역 스크롤 */
function ScrollBox__init() {
    var animationDuration = 800;

    topBarScroll__init();

    $(".scroll-box > .page").on("mousewheel DOMMouseScroll", function (e) {
        e.preventDefault();

        var $this = $(this);
        var $scrollBox = $(this).closest('.scroll-box');

        /* 마우스 휠 이벤트 중단 여부 판단*/
        var nowWork = $scrollBox.data('scroll-box-now-work');

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
            $scrollBox.data('scroll-box-now-work', true);
            // 현재 페이지의 숫자 기입
            $scrollBox.data('scroll-box-index', $post.index());

            // dot의 active 변경
            $('.scroll-dots > li.active').removeClass('active');
            $('.scroll-dots > li').eq(postIndex).addClass('active');

            /* 페이지 active 변경 */
            setTimeout(function(){
                $this.removeClass('active');
                $post.addClass('active');
            }, animationDuration / 2);

            /* 스크롤 애니메이션 실행 */
            $("html,body")
                .stop()
                .animate({
                    scrollTop: moveTop + "px"
                }, {
                    duration: animationDuration,
                    complete: function () {
                        /* 중복 마우스 휠 방지 해제 */
                        $scrollBox.data('scroll-box-now-work', false);
                        /* 특정 구역 여부 판단 실행 */
                        topBarScroll__init();
                    }
                });
        }
    });

    // 화면 resize 함수 실행
    $(window).resize(resizeEvent);
}

// 화면 resize 함수
function resizeEvent(){
    $(".scroll-box").each(function (index, node) {
        var $scrollBox = $(node);
        var index = $scrollBox.data('scroll-box-index');

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

        /* 페이지의 클래스 */
        var $activedPage = $('.scroll-box > .page.active');
        var $postPage = $('.scroll-box > .page').eq(dotIndex);

        /* dot에 active 변경 */
        $('.scroll-dots > li.active').removeClass('active');
        $this.addClass('active');

        /* 페이지 active 변경 */
        setTimeout(function(){
            $activedPage.removeClass('active');
            $postPage.addClass('active');
        }, animationDuration / 2);


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
                    /* 특정 구역 여부 판단 실행 */
                    topBarScroll__init();
                }
            });
    });
}

/* 특정 구역 여부 판단 */
function topBarScroll__init() {
    var actSlide = $('.scroll-box').data('scroll-box-index');

    if (actSlide == 5 || actSlide == 6 || actSlide == 7 || actSlide == 8 || actSlide == 9) {
        $('.top-bar').addClass('active');
    } else {
        $('.top-bar').removeClass('active');
    }
}

/* 리프레쉬 할 때 현재 페이지에 active 걸기 & 스크롤 박스 부모에게 data 현재 index 정보 넘기기 */
function nowPage() {
    $(".scroll-box > .page").each(function(){
        var $this = $(this);
        var thisIndex = $this.index();
        var windowST = $(window).scrollTop();
        var thisOffsetT = $this.offset().top;
        var thisOffsetB = thisOffsetT + $this.outerHeight();
        var now = null;
        
        if (windowST >= thisOffsetT && windowST < thisOffsetB) {
            $('.scroll-box > .page').eq(thisIndex).addClass('active');
            $('.scroll-dots > .dot').eq(thisIndex).addClass('active');
            now = $('.scroll-box').data('scroll-box-index', thisIndex);
        }
    });
}

/* 점 갯수 만들기 */
function addDot__init() {
    for (var i = 1; i <= $('.scroll-box > .page').length; i++) {
        $('.scroll-dots').append('<li class="dot"><div></div></li>');
    }
}


$(function () {
    addDot__init();
    barClick__init();

    nowPage();
    ScrollBox__init();
    sideDotsScroll__init();
})