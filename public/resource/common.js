/* 모바일 사이드 바 토글*/
function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');
    var $mobileSideBar = $('.mobile-side-bar');
    var $mobileSideBarBg = $('.mobile-side-bar-bg');
    var $html = $('html');
    
    if ($btn.hasClass('active')) {
        $btn.removeClass('active');
        $mobileSideBar.removeClass('active');
        $mobileSideBarBg.removeClass('active');
        $html.removeClass('active');
    } 
    else {
        $btn.addClass('active');
        $mobileSideBar.addClass('active');
        $mobileSideBarBg.addClass('active');
        $html.addClass('active');
    }
}

/* 상단 메뉴 border bottom*/
function HoverBorder() {
    var $this = $(this);
    var $activeThis = $('.top-bar .top-bar-wrap .menu-box-1 .menu-box-wrap > ul > li.active');
    var activeWidth = $activeThis.width();
    var activePosition = $activeThis.position().left;
    var $border = $this.parent().parent().find(' > span');
    if ( $this.hasClass('active') ) {
        $border.css('width',activeWidth - 40 +'px');
        $border.css('left',activePosition + 20 +'px');
    }
}


/*상단 메뉴 스크롤 숨기기 나타내기*/
var lastScrollTop= 0;
var topBarHeight = $('.top-bar').outerHeight();

function topBarScroll__init(){

  $(window).scroll(function() {
    var st = $(this).scrollTop();

    if ( st > lastScrollTop ) {
      $('.top-bar').addClass('nav-up');
    }
    else {
      $('.top-bar').removeClass('nav-up');
    }
    
    lastScrollTop = st;
  });
}




//저장소
function HoverBorder__init() {
    $('.top-bar .top-bar-wrap .menu-box-1 .menu-box-wrap > ul > li').mouseenter(function(){
        $(this).addClass('active');
    });
    $('.top-bar .top-bar-wrap .menu-box-1 .menu-box-wrap > ul > li').mouseleave(function(){
        var $border = $('.top-bar .top-bar-wrap .menu-box-1 .menu-box-wrap > span');
        $(this).removeClass('active');
        $border.css('width','');
        $border.css('left','');
    });
    $('.top-bar .top-bar-wrap .menu-box-1 .menu-box-wrap > ul > li').mouseenter(HoverBorder);
}

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .mobile-side-bar-bg').click(MobileSideBar__toggle);
}

function cuttonOpen__init(){
    $('.cutton').addClass('active');
}



//적용
$(function () {
    MobileSideBar__init();
    cuttonOpen__init();
    HoverBorder__init();
    topBarScroll__init();
})






/*토스트 UI 플러그인 시작*/
// 유튜브 플러그인 시작
function youtubePlugin() {
    toastui.Editor.codeBlockManager.setReplacer("youtube", function (youtubeId) {
      // Indentify multiple code blocks
      const wrapperId = "yt" + Math.random().toString(36).substr(2, 10);
  
      // Avoid sanitizing iframe tag
      setTimeout(renderYoutube.bind(null, wrapperId, youtubeId), 0);
  
      return '<div id="' + wrapperId + '"></div>';
    });
  }
  
  function renderYoutube(wrapperId, youtubeId) {
    const el = document.querySelector('#' + wrapperId);
    
    var urlParams = getUrlParams(youtubeId);
  
    var width = '100%';
    var height = '100%';
    
    if ( urlParams.width ) {
      width = urlParams.width;
    }
  
    if ( urlParams.height ) {
      height = urlParams.height;
    }
    
    var maxWidth = 500;
    
    if ( urlParams['max-width'] ) {
      maxWidth = urlParams['max-width'];
    }
    
    var ratio = '16-9';
    
    if ( urlParams['ratio'] ) {
      ratio = urlParams['ratio'];
    }
    
    var marginLeft = 'auto';
    
    if ( urlParams['margin-left'] ) {
      marginLeft = urlParams['margin-left'];
    }
    
    var marginRight = 'auto';
    
    if ( urlParams['margin-right'] ) {
      marginRight = urlParams['margin-right'];
    }
    
    if ( youtubeId.indexOf('?') !== -1 ) {
      var pos = youtubeId.indexOf('?');
      youtubeId = youtubeId.substr(0, pos);
    }
    
    el.innerHTML = '<div style="max-width:' + maxWidth + 'px; margin-left:' + marginLeft + '; margin-right:' + marginRight + ';" class="ratio-' + ratio + ' relative"><iframe class="abs-full" width="' + width + '" height="' + height + '" src="https://www.youtube.com/embed/' + youtubeId + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
  }
  // 유튜브 플러그인 끝
  
  // repl 플러그인 시작
  function replPlugin() {
    toastui.Editor.codeBlockManager.setReplacer("repl", function (replUrl) {
      var postSharp = "";
      if ( replUrl.indexOf('#') !== -1 ) {
        var pos = replUrl.indexOf('#');
        postSharp = replUrl.substr(pos);
        replUrl = replUrl.substr(0, pos);
      }
  
      if ( replUrl.indexOf('?') === -1 ) {
        replUrl += "?dummy=1";
      }
  
      replUrl += "&lite=true";
      replUrl += postSharp;
  
      // Indentify multiple code blocks
      const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;
  
      // Avoid sanitizing iframe tag
      setTimeout(renderRepl.bind(null, wrapperId, replUrl), 0);
  
      return "<div id=\"" + wrapperId + "\"></div>";
    });
  }
  
  function renderRepl(wrapperId, replUrl) {
    const el = document.querySelector(`#${wrapperId}`);
  
    var urlParams = getUrlParams(replUrl);
  
    var height = 400;
  
    if ( urlParams.height ) {
      height = urlParams.height;
    }
  
    el.innerHTML = '<iframe height="' + height + 'px" width="100%" src="' + replUrl + '" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>';
  }
  // repl 플러그인 끝
  
  // codepen 플러그인 시작
  function codepenPlugin() {
    toastui.Editor.codeBlockManager.setReplacer("codepen", function (codepenUrl) {
      // Indentify multiple code blocks
      const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;
  
      // Avoid sanitizing iframe tag
      setTimeout(renderCodepen.bind(null, wrapperId, codepenUrl), 0);
  
      return '<div id="' + wrapperId + '"></div>';
    });
  }
  
  function renderCodepen(wrapperId, codepenUrl) {
    const el = document.querySelector(`#${wrapperId}`);
  
    var urlParams = getUrlParams(codepenUrl);
  
    var height = 400;
  
    if ( urlParams.height ) {
      height = urlParams.height;
    }
    
    var width = '100%';
  
    if ( urlParams.width ) {
      width = urlParams.width;
    }
    
    if ( !isNaN(width) ) {
      width += 'px';
    }
    
    if ( codepenUrl.indexOf('#') !== -1 ) {
      var pos = codepenUrl.indexOf('#');
      codepenUrl = codepenUrl.substr(0, pos);
    }
  
    el.innerHTML = '<iframe height="' + height + '" style="width: ' + width + ';" scrolling="no" title="" src="' + codepenUrl + '" frameborder="no" allowtransparency="true" allowfullscreen="true"></iframe>';
  }
  // repl 플러그인 끝
  /*토스트 UI 플러그인 끝*/
  
  // lib 시작
  String.prototype.replaceAll = function(org, dest) {
    return this.split(org).join(dest);
  }
  
  function getUrlParams(url) {
    url = url.trim();
    url = url.replaceAll('&amp;', '&');
    if ( url.indexOf('#') !== -1 ) {
      var pos = url.indexOf('#');
      url = url.substr(0, pos);
    }
    
    var params = {};
    
    url.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(str, key, value) { params[key] = value; });
    return params;
  }
  // lib 끝