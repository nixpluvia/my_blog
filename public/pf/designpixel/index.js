
function slider(){
    var $this = $(this);
    var $parent = $this.closest('.slider');
    var $slide = $parent.find(' > .slides > .slide');
    var $actSlide = $parent.find(' > .slides > .slide.active');
    var $post;
    var postIndex; 

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
}



















function slider__init(){
    $('.slider > .btn-slide > .btn').click(slider);
}

$(function(){
    slider__init()
});