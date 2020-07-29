function barClick__init() {
    $('.bar-icon-box').click(function () {
        $(this).toggleClass('active');
    })
}

/* 구역 스크롤 */
function ScrollBox__init() {
    var animationDuration = 800;

    $(".scroll-box").data('scroll-box-index', 0);

    topBarScroll__init();

    $(".scroll-box > .page").on("mousewheel DOMMouseScroll", function (e) {
        e.preventDefault();

        var $this = $(this);

        var $scrollBox = $(this).closest('.scroll-box');
        var nowWork = $scrollBox.data('scroll-box-now-work');

        if (nowWork == true) {
            return;
        }

        var wheelUp = true;
        var delta = window.event.wheelDelta;
        /* 휠 업하면 +120, 휠 다운 하면 -120 */
        console.log(delta);
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

        if ($post != null) {
            var moveTop = $post.offset().top;
            var postIndex = $post.index();

            // 화면 이동 0.8초(800)
            $scrollBox.attr('scroll-box-now-work', true);
            $scrollBox.attr('scroll-box-index', $post.index());



            $('.scroll-dots > li.active').removeClass('active');
            $('.scroll-dots > li').eq(postIndex).addClass('active');

            $("html,body")
                .stop()
                .animate({
                    scrollTop: moveTop + "px"
                }, {
                    duration: animationDuration,
                    complete: function () {
                        $scrollBox.attr('scroll-box-now-work', false);
                        $this.removeClass('active');
                        $post.addClass('active');
                        topBarScroll__init();
                    }
                });
        }
    });



    $(window).resize(resizeEvent);
}

function resizeEvent(){
    $(".scroll-box").each(function (index, node) {
        var $scrollBox = $(node);
        var index = $scrollBox.attr('scroll-box-index');

        if (index == null ) {
            index = $scrollBox.attr('scroll-box-index', 0);
        }

        var moveTop = $scrollBox.find(' > .page').eq(index).offset().top;

        var animationDuration = 0;


        var $activedPage = $('.scroll-box > .page.active');
        var $postPage = $('.scroll-box > .page').eq(index);

        $("html,body")
            .stop()
            .animate({
                scrollTop: moveTop + "px"
            }, {
                duration: animationDuration,
                complete: function () {
                    $scrollBox.data('scroll-box-now-work', false);
                    $activedPage.removeClass('active');
                    $postPage.addClass('active');
                }
            });
    });
}



function sideDotsScroll__init() {
    $('.scroll-dots > li').click(function (e) {
        e.preventDefault();

        var $scrollBox = $('.scroll-box');
        var nowWork = $scrollBox.attr('scroll-box-now-work');

        if (nowWork == true) {
            return;
        }

        var $this = $(this);
        var dotIndex = $this.index();
        var moveTop = $('.scroll-box > .page').eq(dotIndex).offset().top;

        var $activedPage = $('.scroll-box > .page.active');
        var $postPage = $('.scroll-box > .page').eq(dotIndex);


        $('.scroll-dots > li.active').removeClass('active');
        $this.addClass('active');

        $("html,body")
            .stop()
            .animate({
                scrollTop: moveTop + "px"
            }, {
                duration: 800,
                complete: function () {
                    $activedPage.removeClass('active');
                    $postPage.addClass('active');
                    $scrollBox.attr('scroll-box-now-work', false);
                    topBarScroll__init();
                }
            });
    });
}


function topBarScroll__init() {
    var actSlide = $('.scroll-box').attr('scroll-box-index');

    if (actSlide == 5 || actSlide == 6 || actSlide == 7 || actSlide == 8 || actSlide == 9) {
        $('.top-bar').addClass('active');
    } else {
        $('.top-bar').removeClass('active');
    }
}

/* 리프레쉬 할 때 현재 페이지에 active 걸기 */
function nowPage() {
    $(".scroll-box > .page").each(function(){
        var $this = $(this);
        var thisIndex = $this.index();
        var windowST = $(window).scrollTop();
        var thisOffsetT = $this.offset().top;
        var thisOffsetB = thisOffsetT + $this.outerHeight();
        var now = null;
        
        if (windowST  >= thisOffsetT && windowST < thisOffsetB) {
            $('.scroll-box > .page').eq(thisIndex).addClass('active');
            $('.scroll-dots > .dot').eq(thisIndex).addClass('active');
            now = $('.scroll-box').attr('scroll-box-index', thisIndex);
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
    ScrollBox__init();
    sideDotsScroll__init();
    nowPage();
})