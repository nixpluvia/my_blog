// 부모에게 active 클래스 추가하는 함수 시작
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
// 부모에게 active 클래스 추가하는 함수 끝


// 라인 애니메이션 딜레이 시작
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
// 라인 애니메이션 딜레이 끝


// 타이틀 라인 사이즈 구하는 함수 시작
function lineSize__init() {
    var titleSize = $('.intro > .title').outerWidth();
    var sizePercent = titleSize / 20;
    $('.intro > .title > .title-paint-line > img').css('width', titleSize + sizePercent);
}
// 타이틀 라인 사이즈 구하는 함수 끝




// 탭박스 함수 시작
function tabBox__init() {
    $('[data-tab-head-item-name]').click(function () {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name');
        var itemName = $this.attr('data-tab-head-item-name');

        $('[data-tab-name="' + tabName + '"]').removeClass('active');

        $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');

        $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');

        if (tabName == "box-2") {
            if (itemName == 1) {
                console.log("hi");
                $('[data-tab-name="' + tabName + '"][data-tab-body-item-name]').addClass('active');
            }
        }

        if (tabName == "box-1") {
            if ($this.index() == 1) {
                numIncrease__init();
                progressAni__init();
            }
        }
    });
}
// 탭박스 함수 끝



// 숫자 증가 함수 시작
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
// 숫자 증가 함수 끝


// 프로그레스 바 애니메이션 시작
function progressAni__init() {
    $('.progress-bar > .bar').each(function () {
        var $this = $(this);
        var maxWidth = $this.attr('data-width');
        $this.css('width', 0);

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
// 프로그레스 바 애니메이션 끝



// 인트로 페이지 함수 시작
function introAni__init() {

    var aboutPage = $('.about').offset().top + 200;

    // 스크롤 방지
    $('html').data('data-intro', true);
    preventScroll();

    // 스크롤 방지 해제
    setTimeout(function () {
        $('html').data('data-intro', false);
        $('html,body').animate({
            scrollTop: aboutPage + 'px'
        }, 1000);
    }, 5000);
}

// 스크롤 방지 함수
function preventScroll(){
    $('.wrap, .top-bar, .side-bar, .pagenation').on("mousewheel DOMMouseScroll", function (e) {
        if ($('html').data('data-intro') == true) {
            e.preventDefault();
        }
        return;
    })
}
// 인트로 페이지 함수 끝




// 발견 하는 함수 시작

// 발견 요소의 offset 설정
function ActiveOnVisible__initOffset() {
    $(".active-on-visible").each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.offset().top;
        var offsetBottom = offsetTop + $node.outerHeight();
        $node.attr("data-active-on-visible-offsetTop", offsetTop);
        $node.attr("data-active-on-visible-offsetBottom", offsetBottom);

        if (!$node.attr("data-active-on-visible-diff-y")) {
            $node.attr("data-active-on-visible-diff-y", "0");
        }

        if (!$node.attr("data-active-on-visible-delay")) {
            $node.attr("data-active-on-visible-delay", "0");
        }
    });

    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
    // 발견하면 클래스 추가하기
    $(".active-on-visible").each(function (index, node) {
        var $node = $(node);
        

        var offsetTop = parseInt($node.attr("data-active-on-visible-offsetTop"));
        var offsetBottom = parseInt(
            $node.attr("data-active-on-visible-offsetBottom")
        );
        var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
        var delay = parseInt($node.attr("data-active-on-visible-delay"));


        if ($(window).scrollTop() + diffY > offsetBottom == false) {
            if ($(window).scrollTop() + diffY >= offsetTop) {
                setTimeout(function () {
                    $node.addClass("active");
                    $('.pagenation > ul > li').removeClass('active');
                    $('.pagenation > ul > li').eq(index).addClass('active');
                }, delay);
            }
        }
    });
    // 벗어나면 클래스 제거
    $(".active-on-visible.active").each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.attr("data-active-on-visible-offsetTop");
        var offsetBottom = $node.attr("data-active-on-visible-offsetBottom");
        var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
        var delay = parseInt($node.attr("data-active-on-visible-delay"));
        
        if (
            $(window).scrollTop() + $(window).height() < offsetTop ||
            $(window).scrollTop() > offsetBottom
        ) {
            setTimeout(function () {
                $node.removeClass("active");
            }, delay);
        }
    });
}

// 발견 함수 실행함수
function ActiveOnVisible__init() {
    // 최초실행
    setTimeout(function(){
        ActiveOnVisible__initOffset();
    }, 1000);
    ActiveOnVisible__checkAndActive();
    

    $(window).resize(ActiveOnVisible__initOffset);
    $(window).scroll(ActiveOnVisible__checkAndActive);
}

// 발견 하는 함수 끝


// 리사이즈
// function windowResize__init() {
//     $(window).resize(function () {
//         var windowSize = $(window).outerWidth();
//         if (windowSize > 1400 && windowSize < 1500) {
//             lineSize__init();
//         }
//     });
// }


// pagenation 함수 시작
function pagenation__init(){
    $('.pagenation > ul > li').click(function(e){
        if ($('html').data('data-intro') == true) {
            e.preventDefault();
            return;
        }
        var $this = $(this);
        var dotIndex = $this.index();
        var $section = $('.wrap > section').eq(dotIndex);
        var sectionOffset = parseInt($section.attr("data-active-on-visible-offsetTop"));

        var diffy = 1;

        if( dotIndex == 1 ) {
            diffy = 200;
        }

        $('html,body').stop().animate({
            scrollTop : sectionOffset + diffy + 'px'
        }, 1000);
    })
}
// pagenation 함수 끝



// swiper 슬라이드 시작
function swiperSlide__init() {
    var swiper = new Swiper(".swiper-container");
}
// swiper 슬라이드 끝







// 팝업 함수
function popup__init(){
    var $this = $(this);
    var $item = $this.closest('.item');
    var itemIndex = $item.index();

    var $img = $item.find('> .item-content > .img');
    var imgHref = $img.attr('data-pu-href');
    var imgUrl = $img.attr('data-pu-imgurl');

    var $popup = $('.portfolio-popup');
    var $popupImg = $popup.find(' > .popup-box > .popup-img > a');
    var $popupTxt = $popup.find(' > .popup-box > .txt-box > ul > li').eq(itemIndex);

    $popupImg.attr('href', imgHref);
    $popupImg.css('background-image', 'url(' + imgUrl + ')');
    $popup.addClass('active');
    $popupTxt.addClass('active');
}

// 팝업 스크롤 방지
function preventScroll(){
    $('.portfolio-popup').on("mousewheel DOMMouseScroll", function (e) {
        e.preventDefault();
        return;
    })
}


// 클릭 이벤트 모음
function click__init(){
    // 사이드 바 클릭 이벤트
    $('.btn-side-bar').click(parentToggle);
    // 탭박스 클릭 이벤트
    $('[data-tab-name="box-2"][data-tab-head-item-name="1"]').click();
    $('.portfolio > .content-box > .head > button').click(ActiveOnVisible__initOffset);

    // 팝업 클릭 이벤트
    $('.portfolio .content-box .body .img, .portfolio .content-box .body .txt').click(popup__init);
    $('.portfolio-popup > .popup-box').click(function(e){
        e.stopPropagation();
    })
    $('.portfolio-popup').click(function(){
        $('.portfolio-popup').removeClass('active');
        $('.portfolio-popup > .popup-box > .txt-box > ul > li').removeClass('active');
    });
}



// 지연 시작 모음
function setTime__init(){
    setTimeout(function(){
        $('.icon-scroll').addClass('active');
    }, 4000);
}



$(function () {
    // 라인 애니메이션
    lineAni__init();
    // 타이틀 라인 사이즈 함수
    lineSize__init();
    // 탭박스 함수
    tabBox__init();

    // 슬라이드
    swiperSlide__init();
    // windowResize__init();

    // 인트로 페이지 함수
    introAni__init();

    // 발견 함수
    ActiveOnVisible__init();

    // 클릭 이벤트 모음
    click__init();

    pagenation__init();
    
    setTime__init();
});

// // 시작 위치 초기화
// setTimeout(function () {
//     $(window).scrollTop(0);
// }, 150)

//웹페이지 닫기, 새로고침, 다른 URL 이동시 문서 최상단으로
// 자바스크립트 버전
// window.onbeforeunload = function() {window.scrollTo(0,0);}

// 제이쿼리
$(window).on('beforeunload', function(){
    $(window).scrollTop(0);
});




// 이메일 보내는 기능
function sendEmailFormSubmit(form) {
    if ( form.receiverName.value.length == 0 ) {
        alert('폼안에 receiverName 의 value 를 입력해주세요.');
        return false;
    }

    if ( form.receiverEmail.value.length == 0 ) {
        alert('폼안에 receiverEmail 의 value 를 입력해주세요.');
        return false;
    }

    form.senderName.value = form.senderName.value.trim();

    if ( form.senderName.value.length == 0 ) {
        alert('당신의 이름을 입력해주세요.');
        form.senderName.focus();
        return false;
    }

    form.senderEmail.value = form.senderEmail.value.trim();

    if ( form.senderEmail.value.length == 0 ) {
        alert('당신의 이메일을 입력해주세요.');
        form.senderEmail.focus();
        return false;
    }

    form.body.value = form.body.value.trim();

    if ( form.body.value.length == 0 ) {
        alert('내용을 입력해주세요.');
        form.body.focus();
        return false;
    }

    var senderName = form.senderName.value;
    var senderEmail = form.senderEmail.value;
    var title = '[이력서 보고 연락 드립니다]';
    var body = nl2br(form.body.value);
    var receiverName = form.receiverName.value;
    var receiverEmail = form.receiverEmail.value;

    var url = 'https://email.oa.gg/doSendEmail2.php?senderName=' + senderName + '&senderEmail=' + senderEmail + '&receiverName=' + receiverName + '&receiverEmail=' + receiverEmail + '&title=' + title + '&body=' + body;

    //console.log("URL : " + url);

    var head= document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;
    head.appendChild(script);
}

function nl2br(str){  
    return str.replace(/\n/g, "<br />");  
}

function Email__callback(data) {
    if ( data.resultCode.substr(0, 2) == 'S-' ) {
        document.sendEmailForm.reset();
    }

    alert(data.msg);
}