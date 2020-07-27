

function slide(){
  var $this = $(this);
  var $btnSlide = $this.closest('.btn-slide');
  var NowAnimating = $btnSlide.attr('data-now-animating');
  var $btnLeft = $this.index() == 0;
  var $slider = $this.closest('.slider');
  var $slides = $slider.find('> .slides > .slide');
  var $activeSlide = $slider.find('> .slides > .active');
  var $activePost;
  
  /*클릭 중복 방지*/
  if (NowAnimating == 'Y') {
    return;
  }
  
  /*트랜지션 제거*/
  $slides.removeClass('rm-active');


  if ( $this.index() == 0 ) {
    $post = $activeSlide.prev();
    if( $post.length == 0 ) {
        $post = $('.slider > .slides > .slide:last-child');
    }
    $slides.attr('slide-direction','left');
  }
  else {
    $post = $activeSlide.next();
    if( $post.length == 0 ) {
        $post = $('.slider > .slides > .slide:first-child');
    }
    $slides.attr('slide-direction','right');
  }


  
  $activeSlide.removeClass('active');
  $activeSlide.addClass('rm-active');
  $post.addClass('active');


  /*클릭 중복 방지*/
  $btnSlide.attr('data-now-animating','Y');
  /*1초마다 실행*/
  setTimeout(function(){
    $btnSlide.attr('data-now-animating','N');
  }, 1000);
}
  

function slide_init(){
  $('.slider > .btn-slide > i').click(slide);

  $('.slider > .slides > .slide:first-child').addClass('active');

  setInterval(function(){
      $('.slider > .btn-slide > i:last-child').click();
  }, 4000);
}


  
$(function(){
  slide_init();
})