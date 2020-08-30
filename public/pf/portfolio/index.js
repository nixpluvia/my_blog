function parentToggle(){
    var $this = $(this);
    var $parent = $this.parent();

    if ( $parent.hasClass('active') ) {
        $parent.removeClass('active');
        $parent.addClass('close-ani');
        $parent.removeClass('open-ani');
        // console.log("remove");
    }
    else {
        $parent.addClass('active');
        $parent.addClass('open-ani');
        $parent.removeClass('close-ani');
        // console.log("add");
    }
}

function button__init(){
    $('.btn-side-bar').click(parentToggle);
}

// 라인 애니메이션 딜레이
function lineAni__init(){
    var line = $('.intro > .title > div');
    var arrLine = [line.eq(0),line.eq(1),line.eq(2)];
    var delayTime = 700;
    var setIndex = 0;
    for (var i = 0; i < 3; i++) {
        setTimeout(function(){
            console.log(setIndex);
            arrLine[setIndex].addClass('active');
            setIndex ++;
        }, delayTime);
        delayTime += 800;
    }
}
$(function(){
    button__init();
    lineAni__init();
});