var $document = $(document);
var $window = $(window);

(function($){
    $(function(){

        $('.button-collapse').sideNav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();

    }); // end of document ready
})(jQuery); // end of jQuery name space

$document.ready(function() {

    $.setClientUTC();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
    
    $("nav #hover-black").hover(
        function() {
            $("nav #hover-black").attr("style", "color: rgba(0, 0, 0, 0.3) !important");
            $(this).attr("style", "color: #000 !important");
        },
        function() {
            $("nav #hover-black").attr("style", "color: #000 !important");
        }
    );

    $("nav #hover-white").hover(
        function() {
            $("nav #hover-white").attr("style", "color: rgba(255, 255, 255, 0.3) !important");
            $(this).attr("style", "color: #FFF !important");
        },
        function() {
            $("nav #hover-white").attr("style", "color: #FFF !important");
        }
    );

    /*$( "form button" ).click(function() {
        $(this).addClass('disabled'); 
        var oldText = $(this).text();
        $(this).text('Загрузка...');
        setTimeout(function() {
            $(this).removeClass('disabled'); 
            $(this).text(oldText);
        }, 5000);
    });*/

    $("form").submit(function() {
        var th = $(this).find('button');
        th.addClass('disabled'); 
        th.text('Загрузка...');
    });

    setCookie('onelove', true, '/');

    if(!getCookie('s_width') && !getCookie('s_height')) {
        setCookie('s_width', screen.width, '/');
        setCookie('s_height', screen.height, '/');
        setCookie('os', navigator.platform, '/');
        setCookie('lang_browser', navigator.language, '/');
        setCookie('name_browser', navigator.product, '/');
        setCookie('type_browser', navigator.appName, '/');
    }
});

$.updateDate = function () {
    setTimeout($.updateDate, 1000);
};

function pl(a, c) {
    var b = c[0],
        d = c[1],
        e = c[2];
    return a + (1 == a % 10 && 11 != a % 100 ? b : 2 <= a % 10 && 4 >= a % 10 && (10 > a % 100 || 20 <= a % 100) ? d : e) + " "
}
var st = [
    [" \u0433\u043e\u0434", " \u0433\u043e\u0434\u0430", " \u043b\u0435\u0442"],
    [" \u043c\u0435\u0441\u044f\u0446", " \u043c\u0435\u0441\u044f\u0446\u0430", " \u043c\u0435\u0441\u044f\u0446\u0435\u0432"],
    [" \u0434\u0435\u043d\u044c", " \u0434\u043d\u044f", " \u0434\u043d\u0435\u0439"],
    [" \u0447\u0430\u0441", " \u0447\u0430\u0441\u0430 ", " \u0447\u0430\u0441\u043e\u0432 "],
    [" \u043c\u0438\u043d\u0443\u0442\u0430", " \u043c\u0438\u043d\u0443\u0442\u044b", " \u043c\u0438\u043d\u0443\u0442"]
];

function passed(a, c, b, d, e) {
    var f = new Date(a, c - 1, b, d, e, 0, 0),
        g = new Date;
    for (c = 0;; c++) {
        a = new Date(f.getFullYear(), f.getMonth() + 2, 0, d, e, 0, 0);
        a.getDate() > b && a.setDate(b);
        if (a > g) break;
        f = a
    }
    b = g - f;
    d = b % 864E5 / 36E5 | 0;
    e = (b % 864E5 / 6E4 | 0) % 60;
    b = Math.floor(b / 864E5);
    a = Math.floor(c / 12);
    return "" + [a, c % 12, b, d, e].reduce(function(a, b, c) {
        return b ? a + pl(b, st[c]) : a
    }, "")
};
//alert(passed(2017, 1, 24, 12, 34 ));


$.formatDate = function(sec, min, hour, day, month, year) {
    var dateNow = new Date();

    var secDev = dateNow.getSeconds() - sec;
    secDev = secDev < 0 ? 60 - (dateNow.getSeconds() - sec) * -1 : secDev;

    var minDev = dateNow.getMinutes() - min;
    minDev = minDev < 0 ? 60 - (dateNow.getMinutes() - min) * -1 : minDev;

    if (dateNow.getSeconds() - sec < 0)
        minDev --;

    var hourDev = dateNow.getHours() - hour;
    hourDev = hourDev < 0 ? 24 - (dateNow.getHours() - hour) * -1 : hourDev;

    if (dateNow.getMinutes() - min < 0)
        hourDev --;

    var daysDev = dateNow.getDate() - day;
    daysDev = daysDev < 0 ? 31 - (dateNow.getDate() - day) * -1 : daysDev;

    if (dateNow.getHours() - hour < 0)
        daysDev --;

    var monthDev = dateNow.getMonth() - month + 1;
    monthDev = monthDev < 0 ? 12 - (dateNow.getMonth() - month) * -1 : monthDev;

    if (dateNow.getDate() - day < 0)
        monthDev --;

    var yearDev = dateNow.getFullYear() - year;

    if (dateNow.getMonth() - month + 1 < 0)
        yearDev --;

    if (yearDev < 1) yearDev = '';
    else yearDev = yearDev + 'г. ';

    return yearDev + monthDev + 'мес. ' + daysDev + 'д. ' + hourDev + 'ч. ' + minDev + 'мин. ' + secDev + 'сек.';
};

$.setClientUTC = function() {
    setCookie('UTC', +$.getClientUTC(), '/');
};

$.getClientUTC = function() {
    var offset = new Date().getTimezoneOffset();
    offset = (offset / -1) / 60;
    return offset;
};

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options) {
    options = options || {};

    var expires = options.expires;

    if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }

    value = encodeURIComponent(value);

    var updatedCookie = name + "=" + value;

    for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
            updatedCookie += "=" + propValue;
        }
    }

    document.cookie = updatedCookie;
}

function deleteCookie(name) {
    setCookie(name, "", {
        expires: -1
    })
}