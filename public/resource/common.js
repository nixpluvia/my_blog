
function mobileToggleSideBar() {
    $('.btn-toggle-mobile-side-bar').click(function(){
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active');
        }
      });
}

$(function () {
    mobileToggleSideBar();
})