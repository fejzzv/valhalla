$(document).ready(function () {
    $('.totop_page').hide();
    $('.totop_page').tottTop({
        scrtollTopBtnDuration: 400,
        duration: 1000,
        scrollTop: 800,
    });
    $('.burger-click').on('click', function () {
        $('body').addClass('overflowing');
        $('.burger-menu').addClass('active');
    });

    $('.close-menu').on('click', function () {
        $('body').removeClass('overflowing');
        $('.burger-menu').removeClass('active');
    });

    $(".videoModal").iziModal({
        title: '&nbsp;',
        headerColor: '#000',
        background: '#000',
        history: false,
        iframe: true,
        fullscreen: true,
        headerColor: '#000000',
        loop: false,
        width: 700
    });
    $('.owl-carousel.owl-news').owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false
    });
    $('.owl-carousel.owl-car').owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        nav: false,
        dots: true
    });
    $('.owl-carousel.owl-howgogame').owlCarousel({
        loop: false,
        margin: 0,
        items: 1,
        navText: ["<img src='images/svg/arrow-left-dark.svg' />", "Naprijed <img src='images/svg/arrow-right-dark.svg' />"],
        nav: true,
        dots: true
    });

    $(".topline").sticky({
        topSpacing: 0
    });
    $('.logined').on('click', function () {
        $('.drop-menu').slideDown('fast');
    })
    $(document).mouseup(function (e) { // событие клика по веб-документу
        var div = $("ul.drop-menu"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.hide(); // скрываем его
        }
    });

    if($(".modl").length) {
        $(".modl").iziModal({
            width: 432,
            bodyOverflow: true,
            transitionIn: 'fadeInDown'
        });
    }
    if($(".modllong").length) {
        $(".modllong").iziModal({
            width: 770,
            bodyOverflow: true,
            transitionIn: 'fadeInDown'
        });
    }
    if($(".owl-carousel").length) {
        $('.owl-carousel.owl-howgogame').owlCarousel({
            loop: false,
            margin: 0,
            items: 1,
            navText: ["<img src='images/svg/arrow-left-dark.svg' />", "Naprijed <img src='images/svg/arrow-right-dark.svg' />"],
            nav: true,
            dots: true
        });
    }
});
