function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');
    var $btn2 = $('.mobile-side-bar');
    var $btn3 = $('.mobile-side-bar-bg');
    var $btn4 = $('html');
    
    if ($btn.hasClass('active')) {
        $btn.removeClass('active');
        $btn2.removeClass('active');
        $btn3.removeClass('active');
        $btn4.removeClass('active');
    } else {
        $btn.addClass('active');
        $btn2.addClass('active');
        $btn3.addClass('active');
        $btn4.addClass('active');
    }
}

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .mobile-side-bar-bg').click(MobileSideBar__toggle);
}

$(function () {
    MobileSideBar__init();
})