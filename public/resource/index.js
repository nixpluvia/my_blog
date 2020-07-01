function topBnSlider(){
    var $clickedBtn = $(this);
    var isLeft = $clickedBtn.index() == 0;
    var $slider = $clickedBtn.closest('.sliderbox');
    var $current = $slider.find(' > .slides > div.active');
    var $post = null;
    if( isLeft ) {
        $post = $current.prev();
    }
    else {
        $post = $current.next();
    }
    if ( $post.length == 0 ) {
        if (isLeft) {
            $post = $slider.find(' > .slides > div:last-child');
        }
        else {
            $post = $slider.find(' > .slides > div:first-child');
        }
    }
    
    $current.removeClass('active');
    $post.addClass('active');
}

$('.sliderbox .side-bar > div').click(topBnSlider);

var isPause = false;
var bnSliderInterval = setInterval(function(){
    $('.sliderbox .side-bar > div:last-child').click();
}, 3000);

$('.sliderbox').mouseenter(function(){
    if( !isPause ) {
        clearInterval(bnSliderInterval);
        console.log(isPause);
        isPause = true;
    }
    else {
        bnSliderInterval = setInterval(function(){
            $('.sliderbox .side-bar > div:last-child').click();
        }, 3000);
        console.log(isPause);
        isPause = false;
    }
});
$('.sliderbox').mouseleave(function(){

    if( !isPause ) {
        clearInterval(bnSliderInterval);
        console.log(isPause);
        isPause = true;
    }
    else {
        bnSliderInterval = setInterval(function(){
            $('.sliderbox .side-bar > div:last-child').click();
        }, 3000);
        console.log(isPause);
        isPause = false;
    }
    
});

