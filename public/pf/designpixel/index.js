console.clear();
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

$(function(){
    slider__init();
    iconCenter();
});

