$(document).ready(function () {
    $(".ad").click(function (e) {
        e.preventDefault();
        if (!$(e.target).hasClass("img_slider") && e.target.id != "right" && e.target.id != "left") {
            window.open($(this).attr("page"), "_blank")
        }
    });
});
$(document).scroll(function () {
    let logoPos = 33.3;
    if ($(document).scrollTop() > 0) {
        $(".logo").css('top', `${logoPos - $(document).scrollTop()}px`);
        if($(document).scrollTop() >= logoPos) {
            $(".logo").css("top", "-22px");
        }
    } else {
        $(".logo").css("top", "3.4vmin");
    }
});