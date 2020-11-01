$(function () {
    $('.btn-openMenuMobile').click(function (){
        $('.mobile-nav').fadeIn(500);
    });

    $('#close').click(function (e){
        var target = e.target.className;
        if (target == "mobile-nav"){
            $(".mobile-nav").fadeOut(500)

        }

    });

})