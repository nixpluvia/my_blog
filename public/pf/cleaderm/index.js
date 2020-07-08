
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




function slide__init(){
    $('.top-bn-slider > .slide-button > span').click(slide);
    $('.top-bn-slider > .btn-slide-dots > li').click(slideDots);
}






/* 실행 */
$(function(){
    slide__init()
});