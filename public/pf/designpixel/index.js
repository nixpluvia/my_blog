
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
}

$(function(){
    slider__init()
});