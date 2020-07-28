function barClick__init() {
    $('.bar-icon-box').click(function () {
        $(this).toggleClass('active');
    })
}

/* 발견 이벤트 */
function ActiveOnVisible__init() {
    $(window).resize(ActiveOnVisible__initOffset);
    ActiveOnVisible__initOffset();

    $(window).scroll(ActiveOnVisible__checkAndActive);
    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
    $(".active-on-visible").each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.offset().top;
        var offsetBottom = offsetTop + $node.outerHeight();
        $node.attr("data-active-on-visible-offsetTop", offsetTop);
        $node.attr("data-active-on-visible-offsetBottom", offsetBottom);

        if (!$node.attr('data-active-on-visible-diff-y')) {
            $node.attr('data-active-on-visible-diff-y', '0');
        }

        if (!$node.attr("data-active-on-visible-delay")) {
            $node.attr("data-active-on-visible-delay", "0");
        }
    });

    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
    $(".active-on-visible").each(function (index, node) {
        var $node = $(node);

        var offsetTop = parseInt($node.attr("data-active-on-visible-offsetTop"));
        var offsetBottom = parseInt($node.attr("data-active-on-visible-offsetBottom"));
        var diffY = parseInt($node.attr('data-active-on-visible-diff-y'));
        var delay = parseInt($node.attr("data-active-on-visible-delay"));

        if ( ($(window).scrollTop() + diffY > offsetBottom ) == false ) {
            if ($(window).scrollTop() + $(window).height() - diffY > offsetTop) {
                setTimeout(function () {
                    $node.addClass("active");
                }, delay);
            }
        }
    });

    $(".active-on-visible.active").each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.attr("data-active-on-visible-offsetTop");
        var offsetBottom = $node.attr("data-active-on-visible-offsetBottom");
        var diffY = parseInt($node.attr('data-active-on-visible-diff-y'));
        var delay = parseInt($node.attr("data-active-on-visible-delay"));

        if (($(window).scrollTop() + $(window).height() < offsetTop) || ($(window).scrollTop() > offsetBottom)) {
            setTimeout(function () {
                $node.removeClass("active");
            }, delay);
        }
    });
}


function addDot__init(){
    for(var i = 1 ; i <= $('.scroll-box > .page').length; i++) {
        $('.dots').append('<div class="dot"></div>');
    }
}

function clickDot(){
    $('.dots > .dot').click(function(){
        $(this).toggleClass('active');
    });
}




$(function () {
    addDot__init();
    ActiveOnVisible__init();
    barClick__init();
    clickDot();
})