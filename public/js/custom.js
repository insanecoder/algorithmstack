
$(function () {

    $(window).scroll(function () {

        if ($(this).scrollTop() < 50) {
            $("#back-to-top").fadeOut();

        } else {
            $("#back-to-top").fadeIn();
        }
    });
});

$(function () {

    $("a.smooth-scroll").click(function (event) {

        event.preventDefault();

        var section = $(this).attr("href");

        $('html, body').animate({
            scrollTop: $(section).offset().top - 64
        }, 1250, "easeInOutExpo");
    });
});




















