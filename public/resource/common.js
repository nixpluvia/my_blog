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


function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .mobile-side-bar-bg').click(MobileSideBar__toggle);
    $('.mobile-side-bar .menu-box-1 ul > li').click(MobileSnsMenu__toggle);
    addCaretIcon();
}

$(function () {
    MobileSideBar__init();
})