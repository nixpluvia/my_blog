function languageBox__init(){
    $(".language-box").click(function() {
        $(".language-box").toggleClass("active");
    });
}

function searchPopUp__init(){
    $(".search-icon-box").click(function() {
        $(".search-popup").addClass("active");
    });
    $(".search-popup").click(function() {
        $(".search-popup").removeClass("active");
    });
    $(".search-popup-content").click(function(e) {
        e.stopPropagation();
    });
}



/* 구역 스크롤 */
function ScrollBox__init() {
    var animationDuration = 800;
  
    $(".scroll-box").data('scroll-box-index', 0);
  
    $(".scroll-box > .page").on("mousewheel DOMMouseScroll", function (e) {
      e.preventDefault();
  
      var $this = $(this);
  
      var $scrollBox = $(this).closest('.scroll-box');
      var nowWork = $scrollBox.data('scroll-box-now-work');
  
      if ( nowWork == true ) {
        return;
      }
  
      var wheelUp = true;
      var delta = window.event.wheelDelta;
      if (delta < 0) {
        wheelUp = false;
      }
  
      var $post = null;
  
      if ( wheelUp ) {
        if ( $this.prev().length > 0 ) {
          $post = $this.prev();
        }
        // 마우스휠을 아래에서 위로
      }
      else {
        if ( $this.next().length > 0 ) {
          $post = $this.next();
        }
      }
  
      if ( $post != null ) {
        var moveTop = $post.offset().top;
  
        // 화면 이동 0.8초(800)
        $scrollBox.data('scroll-box-now-work', true);
        $scrollBox.data('scroll-box-index', $post.index());
  
        $("html,body")
          .stop()
          .animate(
          {
            scrollTop: moveTop + "px"
          },
          {
            duration: animationDuration,
            complete: function () {
              $scrollBox.data('scroll-box-now-work', false);
            }
          }
        );
      }
    });
  
    $(window).resize(function() {
      $(".scroll-box").each(function(index, node) {
        var $scrollBox = $(node);
        var index = $scrollBox.data('scroll-box-index');
        
        var moveTop = $scrollBox.find(' > .page').eq(index).offset().top;
  
        var animationDuration = 0;
        
        $("html,body")
          .stop()
          .animate(
          {
            scrollTop: moveTop + "px"
          },
          {
            duration: animationDuration,
            complete: function () {
              $scrollBox.data('scroll-box-now-work', false);
            }
          }
        );
      });
    });
}


/* 슬라이드 */
function slide(){
  var $this = $(this);
  var $btnSlide = $this.closest('.btn-slide');
  var NowAnimating = $btnSlide.attr('data-now-animating');
  var $btnLeft = $this.index() == 0;
  var $prodSection = $this.closest('.prod-slide-section');
  var $slides = $prodSection.find(' > .slider.active > .slides > li');
  var $activeSlide = $prodSection.find(' > .slider.active > .slides > li.active');
  var $activePost;
  
  /*클릭 중복 방지*/
  if (NowAnimating == 'Y') {
    return;
  }
  
  /*트랜지션 제거*/
  $slides.removeClass('rm-active');
  
  /*버튼이 왼쪽 일 때*/
  if ($btnLeft) {
    $activePost = $activeSlide.prev();
    if ($activePost.length == 0) {
      $activePost = $('.slider.active > .slides > li:last-child');
    }
    slide_left($slides,$activeSlide,$activePost);
  }
  
  /*버튼이 오른쪽 일 때*/
  else{
    $activePost = $activeSlide.next();
    if ($activePost.length == 0){
      $activePost = $('.slider.active > .slides > li:first-child');
    }
    slide_right($slides,$activeSlide,$activePost);
  }
  

  var $slideText = $prodSection.find(' > .prod-content > .tab-content.active > .slide-text > li');
  var $actText = $prodSection.find(' > .prod-content > .tab-content.active > .slide-text > .active');
  var $indexText = $prodSection.find(' > .prod-content > .tab-content.active > .btn-slide > span > .slideIndex-text');

  var actSlideIndex = $activePost.index();
  $actText.removeClass('active');
  $slideText.eq(actSlideIndex).addClass('active');
  setTimeout(function(){
    $indexText.text(actSlideIndex + 1);
  }, 1000);


  /*클릭 중복 방지*/
  $btnSlide.attr('data-now-animating','Y');
  /*1초마다 실행*/
  setTimeout(function(){
    $btnSlide.attr('data-now-animating','N');
  }, 1000);
}

function slide_left($slides,$activeSlide,$activePost){
  $slides.removeClass('right-set');
  $slides.not('active').addClass('left-set');
  
  /*액티브 였던 슬라이드 오른쪽 이동*/
  $activeSlide.addClass('rm-active');
  $activeSlide.removeClass('left-set');
  $activeSlide.addClass('right-set');
  $activeSlide.removeClass('active');

  $activePost.addClass('active');
  $activePost.removeClass('left-set');
}

function slide_right($slides,$activeSlide,$activePost){
  $slides.removeClass('left-set');
  $slides.not('active').addClass('right-set');
  
  /*액티브 였던 슬라이드 왼쪽 이동*/
  $activeSlide.addClass('rm-active');
  $activeSlide.removeClass('right-set');
  $activeSlide.addClass('left-set');
  $activeSlide.removeClass('active');

  $activePost.addClass('active');
  $activePost.removeClass('right-set');
}

function slide_init(){
  $('.prod-slide-section > .prod-content > .tab-content > .btn-slide > div').click(slide);
}



/* 상품 슬라이드 탭 기능 */

function prodSlideTab(){
  var $this = $(this);
  var tabName = $this.attr('data-tab-name');
  var tabHead = $this.attr('data-tab-head');

  $('[data-tab-name="' + tabName + '"]').removeClass('active');

  $('[data-tab-name="' + tabName + '"][data-tab-head="' + tabHead + '"]').addClass('active');
  $('[data-tab-name="' + tabName + '"][data-tab-body="' + tabHead + '"]').addClass('active');
}

function prodSlideTab__init(){
  $('[data-tab-head]').click(prodSlideTab);
}



$(function(){
    languageBox__init();
    searchPopUp__init();
    ScrollBox__init();
    slide_init();
    prodSlideTab__init();
});