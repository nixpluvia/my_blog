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


























$(function(){
    languageBox__init();
    searchPopUp__init();
    ScrollBox__init();
});