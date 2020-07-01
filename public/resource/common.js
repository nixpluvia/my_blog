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
function MobileSnsMenu__toggle(e) {
    
    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
    } 
    else {
        $(this).addClass('active');
    }
    e.stopPropagation();
}
function addCaretIcon() {
    $('.mobile-side-bar .menu-box-1 ul > li > a:not(:only-child)').append('<i class="fas fa-caret-down"></i>');
    $('.mobile-side-bar .menu-box-1 ul > li > a:not(:only-child)').append('<i class="fas fa-caret-right"></i>');
};



function HoverBorder() {
    var $this = $(this);
    var $activeThis = $('.top-bar .top-bar-wrap .menu-box-1 .menu-box-wrap > ul > li.active');
    var activeWidth = $activeThis.width();
    var activePosition = $activeThis.position().left;
    var $border = $this.parent().parent().find(' > span');
    if ( $this.hasClass('active') ) {
        $border.css('width',activeWidth);
        $border.css('left',activePosition);
    }
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
    $('.mobile-side-bar .menu-box-1 ul > li').click(MobileSnsMenu__toggle);
    addCaretIcon();
}





function cuttonOpen__init(){
    $('.cutton').addClass('active');
}

//적용
$(function () {
    MobileSideBar__init();
    cuttonOpen__init();
    HoverBorder__init();
})

