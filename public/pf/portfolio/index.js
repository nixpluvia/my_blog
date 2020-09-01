function parentToggle() {
    var $this = $(this);
    var $parent = $this.parent();

    if ($parent.hasClass('active')) {
        $parent.removeClass('active');
        $parent.addClass('close-ani');
        $parent.removeClass('open-ani');
        // console.log("remove");
    } else {
        $parent.addClass('active');
        $parent.addClass('open-ani');
        $parent.removeClass('close-ani');
        // console.log("add");
    }
}

function button__init() {
    $('.btn-side-bar').click(parentToggle);
}

// 라인 애니메이션 딜레이
function lineAni__init() {
    var line = $('.intro > .title > div');
    var arrLine = [line.eq(0), line.eq(1), line.eq(2)];
    var delayTime = 700;
    var setIndex = 0;
    for (var i = 0; i < 3; i++) {
        setTimeout(function () {
            arrLine[setIndex].addClass('active');
            setIndex++;
        }, delayTime);
        delayTime += 800;
    }
}

// 라인 사이즈 구하는 함수
function lineSize__init() {
    var titleSize = $('.intro > .title').outerWidth();
    var sizePercent = titleSize / 20;
    $('.intro > .title > .title-paint-line > img').css('width', titleSize + sizePercent);
}

// 리사이즈
function windowResize__init() {
    $(window).resize(function () {
        var windowSize = $(window).outerWidth();
        if (windowSize > 1400 && windowSize < 1500) {
            console.log("hi");
        }
    });
}

// 탭박스
function tabBox__init() {
    $('[data-tab-head-item-name]').click(function () {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name');
        var itemName = $this.attr('data-tab-head-item-name');

        $('[data-tab-name="' + tabName + '"]').removeClass('active');

        $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');
        
        $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');

        if( tabName == "box-2") {
            if(itemName == 1){
                console.log("hi");
                $('[data-tab-name="' + tabName + '"][data-tab-body-item-name]').addClass('active');
            }
        }

        if( tabName == "box-1") {
            if ($this.index() == 1) {
                numIncrease__init();
                progressAni__init();
            }
        }
    });
}

// 숫자 증가 함수
function numIncrease__init() {
    $(".info-num").each(function () {
        var $this = $(this);
        var maxNum = parseInt($this.attr("data-max-num"));
        $({
            number: 0
        }).animate({
            number: maxNum
        }, {
            duration: 800,
            step: function () {
                var num = parseInt(this.number);
                $this.text(num);
            },
            complete: function () {
                var num = parseInt(this.number);
                $this.text(num);
            }
        });
    });
}

function progressAni__init() {
    $('.progress-bar > .bar').each(function () {
        var $this = $(this);
        var maxWidth = $this.attr('data-width');
        $this.css('width', 0 );

        $this.animate({
            width: maxWidth
        }, {
            duration: 1000,
            step: function (now) {
                $this.css('width', now);
            },
            complete: function (now) {
                $this.css('width', now);
            }
        });
    });
}


$(function () {
    button__init();
    lineAni__init();
    lineSize__init();
    tabBox__init();
    // windowResize__init();
    $('[data-tab-name="box-2"][data-tab-head-item-name="1"]').click();
});