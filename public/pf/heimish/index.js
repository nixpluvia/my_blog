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

$(function(){
    languageBox__init();
    searchPopUp__init();
});