
function slider(){
    var $this = $(this);
    var $parent = $this.closest('.slider');
    var $slide = $parent.find(' > .slides > .slide');
    var $actSlide = $parent.find(' > .slides > .slide.active');
    var $progressBar = $('.progressBar');
    var $post;
    var postIndex;

    if ( $('.slider > .slides').attr('stop-slider') == 'Y' ){
        return;
    }
    $('.slider > .slides').attr('stop-slider','Y');
    $actSlide.attr('ani-play','N');

    $slide.removeClass('rm-active')


    if ( $this.index() == 0 ) {
        $post = $actSlide.prev();
        if( $post.length == 0 ) {
            $post = $('.slider > .slides > .slide:last-child');
        }
        $slide.attr('slide-direction','left');
    }
    else {
        $post = $actSlide.next();
        if( $post.length == 0 ) {
            $post = $('.slider > .slides > .slide:first-child');
        }
        $slide.attr('slide-direction','right');
    }

    postIndex = $post.index();
    
    
    $actSlide.removeClass('active');
    $actSlide.addClass('rm-active');
    $post.addClass('active');

    slideTimeOut($post,$parent,$progressBar,postIndex);
}

function slideTimeOut($post,$parent,$progressBar,postIndex){
    var slideTotal = $parent.find('> .slides > .slide').length;
    $progressBar.removeClass('active');

    setTimeout(function(){
        $progressBar.addClass('active');

        if ( postIndex <= 9 ){
            $('.slide-num > .num-now').attr('min-num','Y');
        }
        else {
            $('.slide-num > .num-now').attr('min-num','N');
        }

        $('.btn-slide > .slide-num > .num-now').text(postIndex + 1);

        $post.attr('ani-play','Y');
    }, 1200);

    setTimeout(function(){
        $('.slider > .slides').attr('stop-slider','N');
    }, 2700)
}

function slider__init(){
    $('.slider > .btn-slide > .btn').click(slider);
    
    $('.slider > .slides > .slide:first-child').attr('ani-play','Y');
    $('.progressBar').addClass('active');

    setTimeout(function(){
        $('.slider > .btn-slide > .btn:last-child').click();
        setInterval(function(){
            $('.slider > .btn-slide > .btn:last-child').click();
        }, 4200);
    }, 3000);
}




function menuBox__init(){
    /* 화면 풀사이즈 */
    $('.menu-bar > .menu-bar-icon').mouseenter(function(){
        $('.layout').attr('full-size','Y');
    })
    $('.menu-bar > .menu-bar-icon').mouseleave(function(){
        $('.layout').attr('full-size','N');
    })

    /* 메뉴 애니메이션 */
    $('.menu-bar > .menu-bar-icon').click(function(){
        var $this = $(this);
        var $menuBar = $this.closest('.menu-bar');
        var $barIcon = $this.find('> .bar-icon');
        var $closeIcon = $this.find('> .close-icon');

        if( $barIcon.hasClass('active') ) {

            $closeIcon.removeClass('active');
            $menuBar.removeClass('active');
            
            setTimeout(function(){
                $barIcon.removeClass('active');
            }, 1000);
            menuListAniOff();
        }
        else {

            $barIcon.addClass('active');
            $menuBar.addClass('active');

            setTimeout(function(){
                $closeIcon.addClass('active');
            }, 500);
            menuListAniOn();
        }
    });
}
/* 메뉴창 오픈 이벤트 */
function menuListAniOn(){
    var max = $('.menu-box > .left-menu > li').length;
    var i = 0;

    function aniOn(){
        $('.menu-box > .left-menu > li').eq(i).attr('ani-now','Y');
        i++
        if( i == max ) {
            clearInterval(aniOnInterval);
            setTimeout(function(){
                $('.menu-bar .menu-box > .left-menu > .menu-footer').attr('ani-now','Y');
            }, 100);
        }
    }
    var aniOnInterval = setInterval(aniOn, 100);
}
/* 메뉴창 오프 이벤트 */
function menuListAniOff(){
    var max = $('.menu-box > .left-menu > li').length;
    var i = 0;

    function aniOff(){
        $('.menu-box > .left-menu > li').eq(i).attr('ani-now','N');
        i++
        if( i == max ) {
            clearInterval(aniOffInterval);
            setTimeout(function(){
                $('.menu-bar .menu-box > .left-menu > .menu-footer').attr('ani-now','N');
            }, 100);
        }
    }
    var aniOffInterval = setInterval(aniOff, 100);
}






var animationStart1;
var animationEnd1;
var animationStart2;
var animationEnd2;

function btnAnimation__on(){
    $('.menu-bar > .menu-box > .right-menu > .btn-animation').attr('ani-now','Y');
    $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set1','N');
    $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set2','N');

    

    $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set1','Y');
    animationEnd1 = setInterval(function(){
        $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set1','N');
    }, 1240);
    animationStart1 = setInterval(function(){
        $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set1','Y');
    }, 1250);


    $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set2','Y');
    animationEnd2 = setInterval(function(){
        $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set2','N');
    }, 1240);
    animationStart2 = setInterval(function(){
        $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set2','Y');
    }, 1250);
}

function btnAnimation__off(){
    $('.menu-bar > .menu-box > .right-menu > .btn-animation').attr('ani-now','N');
    clearInterval(animationStart1);
    clearInterval(animationStart2);
    clearInterval(animationEnd1);
    clearInterval(animationEnd2);
    $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set1','N');
    $('.menu-bar > .menu-box > .right-menu > .btn-animation > a').attr('ani-set2','N');
}

function btnAnimation__init(){
    $('.menu-bar > .menu-box > .right-menu > .btn-animation').mouseenter(btnAnimation__on);
    $('.menu-bar > .menu-box > .right-menu > .btn-animation').mouseleave(btnAnimation__off);
}









/* 슬라이드 사이트 아이콘 위치 중앙 */
function iconCenter(){
    $('.slider > .slides > .slide > .text-box > .site-icon ').imagesLoaded( function() {
        $('.slider > .slides > .slide > .text-box > .site-icon').each(function(){
            var $this = $(this);
            var imgWidth = $this.find(' > .icon-img > img ').width();
            $this.css('margin-left', -imgWidth / 2 + 'px');
        });
    });
}




$(function(){
    slider__init();
    menuBox__init();
    iconCenter();
    btnAnimation__init();
});

