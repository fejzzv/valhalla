<!DOCTYPE html>
<html lang="ba-BA">
<head>
    <meta charset="UTF-8" />
    <title>Naslovna - Valhalla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="fonts/sf/style.css" rel="stylesheet">
    <link href="css/iziModal.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<script>

var message = "Hmm ne radi ti to brate...";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;

document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
document.onkeypress = function (event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
      // alert('No F-12');
      return false;
    }
  };
$(document).keydown(function (event) {
    if (event.keyCode == 123) {
        return false;
       //                                                                    ¯\_( ͡❛ ‿ ͡❛)_/¯ MYAU 
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Ctrl+Shift+I        
        return false;
    }
});
$(document).on("contextmenu", function (e) {        
    e.preventDefault();
});
window.onload = function () {
document.addEventListener("contextmenu", function (e) {
e.preventDefault();
 }, false);
document.addEventListener("keydown", function (e) {
//document.onkeydown = function(e) {
// "I" key
if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
disabledEvent(e);
}
// "J" key
if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
disabledEvent(e);
}
// "S" key + macOS
if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
disabledEvent(e);
}
// "U" key
if (e.ctrlKey && e.keyCode == 85) {
disabledEvent(e);
}
// "F12" key
if (event.keyCode == 123) {
disabledEvent(e);
}
}, false);
function disabledEvent(e) {
if (e.stopPropagation) {
e.stopPropagation();
} else if (window.event) {
window.event.cancelBubble = true;
}
e.preventDefault();
return false;
}
}
</script>
<body>

<body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;">
<div class="burger-menu">
    <i class="close-menu"><img src="images/svg/close.svg" alt=""></i>
    <ul>
        <li><a href="index.php">Pocetna</a></li>
        <li><a href="start.php">Kako zapoceti igru</a></li>
        <li><a href="toplista.php">Top lista</a></li> <!-- ʕ•́ᴥ•̀ʔっ BURAZ NISI DOBAR :( VRLO SI ZLOCEST -->
        <li><a href="">Doniraj</a></li>
        <li><a href="">Forum</a></li>
    </ul>
</div>
<section class="overflowing">
    <div class="header">
        <div class="topline">
            <div class="fluid-width">
                <div class="logo-wrap">
                    <img src="images/logo.png" alt="">
                    <span class="logo-bage">SA:MP</span>
                </div>
                <div class="menu-wrap">
                    <i class="close-menu"><img src="images/svg/close.svg" alt=""></i>
                    <ul>
                        <li><a href="index.php">Pocetna</a></li>
                        <li><a href="start.php">Kako zapoceti igru</a></li>
                        <li><a href="toplista.php">Top lista</a></li>
                        <li><a href="">Doniraj</a></li>
                        <li><a href="">Forum</a></li>
                        <li><a href="https://discord.gg/ZhAP9Ga9rJ" target="_blank"><img src="images/discord.png"></a></li>
                    </ul>
                </div>
                    <div class="buttons-topline">
                        <a href="#" class="purple-href" data-izimodal-open="#loginModal"><img src="images/user.png" alt="">Coming soon</a>
                    <a href="#" class="purple-href burger-click clear forMobile"><img src="images/svg/burger.svg" alt=""></a>
    

                </div>
            </div>
        </div>
        <div class="fluid-width">
            <i class="fly-object main-art"><img src="images/main-art.png" alt=""></i>
            <div class="middle">
                <h1 class="forDesktop">Otkrijte svijet<br />San Andreasa</h1>
                <h1 class="forMobile">Otkrijte svijet<br />San Andreasa<br /></h1>
                <p class="desc">Pridruzi se vec danas</p>
                <div class="button-line">
                    <a href="samp://samp.valhalla-ogc.com:7777"><button class="primary-button">
                        <span class="light"></span>
                        <p>Zapocni igru</p>
                    </button></a>
                    <div class="online-wrapper">
                        <i class="progress-line"><i 
                            style="height:<?php 
                            require("SampQuery.class.php");
                            $query = new SampQuery("46.105.52.161", 7777);
                            if ($query->connect()) 
                            {
                                while($server = $query->getInfo())
                                {
                                    echo $server["players"] / 2;
                                    break;
                                }
                                }
                                ?>%
                            ">
                        </i>
                        </i>
                        <div>
                            <p><small>Trenutno online</small></p>
                             <?php 
                                $query = new SampQuery("46.105.52.161", 7777);
                                if ($query->connect()) 
                                { 
                                while($server = $query->getInfo())
                                {
                                        echo $server["players"] . ' <span>/ 200</span>';
                                        break;
                                    }  
                                } 
                            $query->close();
                            ?>    
                        </div>
                    </div>
                    <button class="video-button forMobile" data-iziModal-open="#videoModal">
                        <i><img src="images/svg/play.svg" alt="" class="animatedslow pulse infinite"></i>
                        <p>Pogledajte<br />trailer servera</p>
                    </button>
                </div>
                <div class="social-wrapper">
                    <ul>
                        <li><a href="https://discord.gg/ZhAP9Ga9rJ" target="_blank"><img src="images/discord.png" alt=""></a></li>
                        <li><a href="https://facebook.com/valhallaroleplay" target="_blank"><img src="images/svg/facebook.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <button class="video-button forDesktop" data-iziModal-open="#videoModal">
                <i><img src="images/svg/play.svg" alt="" class="animatedslow pulse infinite"></i>
                <p>Pogledajte<br />trailer servera</p>
            </button>
        </div>
    </div>
    <div class="news-wrapper">
        <div class="main-width">
            <i class="fly-object main-art-news"><img src="images/main-art-news.png" alt=""></i>
            <div class="title-wrap z200">
                <h2>Novosti</h2>
            </div>
            <div class="news-slider z200">
                <div class="owl-carousel owl-news">
                    <div>
                        <div class="news-item">
                            <div class="news-preview"><img src="images/momenzi/1.png" alt=""></div>
                            <div class="news-info">
                                <p class="news-title">Radite posao po vasoj zelji</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="news-item">
                            <div class="news-preview"><img src="images/momenzi/2.png" alt=""></div>
                            <div class="news-info">
                                <p class="news-title">Uronite u podzemlje Los Santosa</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="news-item">
                            <div class="news-preview"><img src="images/momenzi/3.png" alt=""></div>
                            <div class="news-info">
                                <p class="news-title">Update v0.7</p>
                                <p class="news-text">Vise informacija pogledajte na nasem forumu.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="news-item">
                            <div class="news-preview"><img src="images/momenzi/4.gif" alt=""></div>
                            <div class="news-info">
                                <p class="news-title">Update v1.0</p>
                                <p class="news-text">Vise informacija pogledajte na nasem forumu.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="news-item">
                            <div class="news-preview"><img src="images/momenzi/5.png" alt=""></div>
                            <div class="news-info">
                                <p class="news-title">Postanite dio drzavne organizacije</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="follow-wrap">
        <div class="main-width">
            <div class="fly-object main-art-social"><img src="images/main-art-social.png" alt=""></div>
            <div class="title-wrap text-center">
                <h2>Potrazite nas i preko</h2>
                <p>drustvenih mreza</p>
            </div>
            <div class="follow-grid">
                <div>
                    <p><strong><img src="images/discord.png" alt=""> Nas discord</strong></p>
                    <a href="https://discord.gg/ZhAP9Ga9rJ" target="_blank"><button class="primary-button mini">
                        <p>Connect</p>
                    </button></a>
                </div>
                <div>
                    <p><strong><img src="images/svg/facebook.png" alt=""> Facebook stranica</strong></p>
                    <a href="https://facebook.com/valhallaroleplay" target="_blank"><button class="primary-button mini">
                        <p>Pregledaj</p>
                    </button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="fluid-width column-middle">
            <a href="#" class="totop">Vrh <img src="images/svg/arrow-top.svg" alt=""></a>
            <a href="https://instagram.com/feejzq" class="href-easy">CODED BY fejza</a>
        </div>
    </div>
</section>
<!-- UCP COMING SOON -->
<div id="loginModal" class="modl">
    <i class="close" data-izimodal-close><img src="images/svg/close.svg" alt=""> Exit</i>
    <div class="modal-content">
        <div class="form-title">
            <h3>Unesite podatke<br />od vaseg accounta</h3>
        </div>
        <div class="form-modal" id="loginForm">
                <input type="text" name="easydata" class="easy-breezy" hidden>
                <label for="nickname">Vas nickname</label>
                <input type="text" id="rp_name" name="rp_name" class="primary-input text-center mb20" placeholder="Ime Prezime">
                <label for="nickname">Password</label>
                <input type="password" id="password" name="password" class="primary-input text-center mb20" placeholder="—">
                <div class="alerts-wrapper inhtml">
                    <div class="alert-box red"></div>
                </div>
                <button class="primary-button wide" id="loginButton">
                    <p>Login</p>
                </button><br>
        </div>
    </div>
</div>
<div id="videoModal" class="videoModal" data-izimodal-title="Youtube" data-izimodal-iframeURL="https://www.youtube.com/embed/TTz7-SHFe5U"></div>
<script src="js/jquery.min.js"></script>
<script src="js/iziModal.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/totop.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.hashchange.min.js"></script>
<script src="js/jquery.easytabs.min.js"></script>
<script src="js/script.js"></script>
<script src="js/client.js"></script>
</body>

</html>