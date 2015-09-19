<?php
//$j = '["img/a-scene-from-inception.jpg","img/a-window-with-a-view.jpg","img/always-coca-cola.jpg","img/an-apple-a-day-watching-it-rain.jpg","img/another-hard-day-at-work.jpg","img/big-fish-small-pond.jpg","img/book-two-conquered.jpg","img/calm-sea-dont-make-skillful-sailors.jpg","img/cant-silence-good-music.jpg","img/catch-me-if-you-can.jpg","img/chilling-like-a-boss.jpg","img/chocolate-is-not-your-friend.jpg","img/christmas-shopping.jpg","img/double-rainbow-no-pot-of-gold.jpg","img/every-ship-can-be-sunk.jpg","img/first-day-in-new-place.jpg","img/fortaleza-brazil.jpg","img/fortaleza-view-01.jpg","img/fortaleza-view-02.jpg","img/fortaleza-view-03.jpg","img/fortaleza-view-04.jpg","img/fortaleza-view-05.jpg","img/fortaleza-view-06.jpg","img/fortaleza-view-07.jpg","img/friendly-leafs.jpg","img/good-night-fortaleza.jpg","img/home-is-where-you-pay-the-bills-at.jpg","img/html5-snake-game.png","img/ipark-01.jpg","img/ipark-02.jpg","img/last-day-in-new-place.jpg","img/let-the-festivities-begin.jpg","img/lights-camera-action.jpg","img/looks-like-it-might-raign.jpg","img/now-you-see-me-now-you-dont.jpg","img/peppa-and-her-friend.jpg","img/surprise.jpg","img/the-prodigy.jpg","img/transp.gif","img/utah-sunset-01.jpg","img/utah-view-001.jpg","img/utah-view-002.jpg","img/utah-view-03.jpg","img/utah-view-04.jpg","img/waiting-for-the-bus.jpg","img/waiting-for-the-clouds-to-pass-by.jpg","img/watch-out-peter-parker.jpg","img/what-lies-beyond-the-shadow-of-the-statue.jpg"]';
//    $d = json_decode($j, true);
//    foreach ($d as $img) {
//        $caption = explode('img/', $img);
//        $caption = explode('.', $caption[1]);
//        $caption = explode('-', $caption[0]);
//        $caption = implode(' ', $caption);
//        echo 'array(\'src\' => \'', $img,'\', \'caption\' => \'', ucwords($caption), '\'),';
//    }
//    exit;
$photos = array(
    array('src' => 'img/a-scene-from-inception.jpg', 'caption' => 'A Scene From Inception'),
    array('src' => 'img/a-window-with-a-view.jpg', 'caption' => 'A Window With A View'),
    array('src' => 'img/always-coca-cola.jpg', 'caption' => 'Always Coca Cola'),
    array('src' => 'img/an-apple-a-day-watching-it-rain.jpg', 'caption' => 'An Apple A Day Watching It Rain'),
    array('src' => 'img/another-hard-day-at-work.jpg', 'caption' => 'Another Hard Day At Work'),
    array('src' => 'img/big-fish-small-pond.jpg', 'caption' => 'Big Fish Small Pond'),
    array('src' => 'img/book-two-conquered.jpg', 'caption' => 'Book Two Conquered'),
    array('src' => 'img/calm-sea-dont-make-skillful-sailors.jpg', 'caption' => 'Calm Sea Dont Make Skillful Sailors'),
    array('src' => 'img/cant-silence-good-music.jpg', 'caption' => 'Cant Silence Good Music'),
    array('src' => 'img/catch-me-if-you-can.jpg', 'caption' => 'Catch Me If You Can'),
    array('src' => 'img/chilling-like-a-boss.jpg', 'caption' => 'Chilling Like A Boss'),
    array('src' => 'img/chocolate-is-not-your-friend.jpg', 'caption' => 'Chocolate Is Not Your Friend'),
    array('src' => 'img/christmas-shopping.jpg', 'caption' => 'Christmas Shopping'),
    array('src' => 'img/double-rainbow-no-pot-of-gold.jpg', 'caption' => 'Double Rainbow No Pot Of Gold'),
    array('src' => 'img/every-ship-can-be-sunk.jpg', 'caption' => 'Every Ship Can Be Sunk'),
    array('src' => 'img/first-day-in-new-place.jpg', 'caption' => 'First Day In New Place'),
    array('src' => 'img/fortaleza-brazil.jpg', 'caption' => 'Fortaleza Brazil'),
    array('src' => 'img/fortaleza-view-01.jpg', 'caption' => 'Fortaleza View 01'),
    array('src' => 'img/fortaleza-view-02.jpg', 'caption' => 'Fortaleza View 02'),
    array('src' => 'img/fortaleza-view-03.jpg', 'caption' => 'Fortaleza View 03'),
    array('src' => 'img/fortaleza-view-04.jpg', 'caption' => 'Fortaleza View 04'),
    array('src' => 'img/fortaleza-view-05.jpg', 'caption' => 'Fortaleza View 05'),
    array('src' => 'img/fortaleza-view-06.jpg', 'caption' => 'Fortaleza View 06'),
    array('src' => 'img/fortaleza-view-07.jpg', 'caption' => 'Fortaleza View 07'),
    array('src' => 'img/friendly-leafs.jpg', 'caption' => 'Friendly Leafs'),
    array('src' => 'img/good-night-fortaleza.jpg', 'caption' => 'Good Night Fortaleza'),
    array('src' => 'img/home-is-where-you-pay-the-bills-at.jpg', 'caption' => 'Home Is Where You Pay The Bills At'),
    array('src' => 'img/html5-snake-game.png', 'caption' => 'Html5 Snake Game'),
    array('src' => 'img/ipark-01.jpg', 'caption' => 'Ipark 01'),
    array('src' => 'img/ipark-02.jpg', 'caption' => 'Ipark 02'),
    array('src' => 'img/last-day-in-new-place.jpg', 'caption' => 'Last Day In New Place'),
    array('src' => 'img/let-the-festivities-begin.jpg', 'caption' => 'Let The Festivities Begin'),
    array('src' => 'img/lights-camera-action.jpg', 'caption' => 'Lights Camera Action'),
    array('src' => 'img/looks-like-it-might-raign.jpg', 'caption' => 'Looks Like It Might Raign'),
    array('src' => 'img/now-you-see-me-now-you-dont.jpg', 'caption' => 'Now You See Me Now You Dont'),
    array('src' => 'img/peppa-and-her-friend.jpg', 'caption' => 'Peppa And Her Friend'),
    array('src' => 'img/surprise.jpg', 'caption' => 'Surprise'),
    array('src' => 'img/the-prodigy.jpg', 'caption' => 'The Prodigy'),
    array('src' => 'img/utah-sunset-01.jpg', 'caption' => 'Utah Sunset 01'),
    array('src' => 'img/utah-view-01.jpg', 'caption' => 'Utah View 001'),
    array('src' => 'img/utah-view-02.jpg', 'caption' => 'Utah View 002'),
    array('src' => 'img/utah-view-03.jpg', 'caption' => 'Utah View 03'),
    array('src' => 'img/utah-view-04.jpg', 'caption' => 'Utah View 04'),
    array('src' => 'img/waiting-for-the-bus.jpg', 'caption' => 'Waiting For The Bus'),
    array('src' => 'img/waiting-for-the-clouds-to-pass-by.jpg', 'caption' => 'Waiting For The Clouds To Pass By'),
    array('src' => 'img/watch-out-peter-parker.jpg', 'caption' => 'Watch Out Peter Parker'),
    array('src' => 'img/what-lies-beyond-the-shadow-of-the-statue.jpg', 'caption' => 'What Lies Beyond The Shadow Of The Statue'),
);

sort($photos);
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rodrigo Silveira Photography</title>

    <link href="//fonts.googleapis.com/css?family=Roboto:400,300,700" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <style>
    </style>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/art">
                    Art by Rodrigo Silveira
                </a>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right scroll">
                    <li><a href="#art">Art</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="/">Software Engineering</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="home">
    <div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/an-apple-a-day-watching-it-rain.jpg">
            </div>
            <div class="item">
                <img src="img/good-night-fortaleza.jpg">
            </div>
            <div class="item">
                <img src="img/cant-silence-good-music.jpg">
            </div>
            <div class="item">
                <img src="img/looks-like-it-might-raign.jpg">
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>

<a name="about"></a>
<div id="about" class="container spacer about">
    <h2 class="text-center">Art by Rodrigo Silveira</h2>

    <div class="services">
        <h4 class="text-center">I've always been a big fan of art and expressing myself through creative means. I would not dare consider myself more than a hobbyist with little to no formal training in any of the arts listed below.</h4>
        <p><br/></p>
        <ul class="row text-center list-inline  wowload bounceInUp animated" style="visibility: visible; animation-name: bounceInUp;">
            <li>
                <span><i class="fa fa-camera-retro"></i><b>Photography</b></span>
            </li>
            <li>
                <span><i class="fa fa-pencil"></i><b>Drawing</b></span>
            </li>
            <li>
                <span><i class="fa fa-cubes"></i><b>3D Modeling</b></span>
            </li>
            <li>
                <span><i class="fa fa-picture-o"></i><b>Graphic Design</b></span>
            </li>
        </ul>
    </div>
</div>

<a name="art"></a>
<div id="works" class="clearfix grid">
    <?php foreach ($photos as $img): ?>
    <figure class="effect-oscar">
        <img src="img/transp.gif" data-echo="mini/<?= $img['src']; ?>" width="530" height="255">
        <figcaption>
            <h2 style="display:none">Good morning</h2>
            <p><?= $img['caption']; ?><br>
                <a href="<?= $img['src']; ?>" title="1" data-gallery="">View full image</a></p>
        </figcaption>
    </figure>
    <?php endforeach; ?>
</div>

<div class="footer text-center spacer">
    <p class="text-center">&copy; 2015 <a href="http://www.rodrigo-silveira.com">Rodrigo Silveira</a></p>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    window.echo = (function (window, document) {

        'use strict';

        /*
         * Constructor function
         */
        var Echo = function (elem) {
            this.elem = elem;
            this.render();
            this.listen();
        };

        /*
         * Images for echoing
         */
        var echoStore = [];

        /*
         * Element in viewport logic
         */
        var scrolledIntoView = function (element) {
            var coords = element.getBoundingClientRect();
            return ((coords.top >= 0 && coords.left >= 0 && coords.top) <= (window.innerHeight || document.documentElement.clientHeight));
        };

        /*
         * Changing src attr logic
         */
        var echoSrc = function (img, callback) {
            img.src = img.getAttribute('data-echo');
            if (callback) {
                callback();
            }
        };

        /*
         * Remove loaded item from array
         */
        var removeEcho = function (element, index) {
            if (echoStore.indexOf(element) !== -1) {
                echoStore.splice(index, 1);
            }
        };

        /*
         * Echo the images and callbacks
         */
        var echoImages = function () {
            for (var i = 0; i < echoStore.length; i++) {
                var self = echoStore[i];
                if (scrolledIntoView(self)) {
                    echoSrc(self, removeEcho(self, i));
                }
            }
        };

        /*
         * Prototypal setup
         */
        Echo.prototype = {
            init : function () {
                echoStore.push(this.elem);
            },
            render : function () {
                if (document.addEventListener) {
                    document.addEventListener('DOMContentLoaded', echoImages, false);
                } else {
                    window.onload = echoImages;
                }
            },
            listen : function () {
                window.onscroll = echoImages;
            }
        };

        /*
         * Initiate the plugin
         */
        var lazyImgs = document.querySelectorAll('img[data-echo]');
        for (var i = 0; i < lazyImgs.length; i++) {
            new Echo(lazyImgs[i]).init();
        }

    })(window, document);
</script>
<script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-15090706-1']);
            _gaq.push(['_trackPageview']);
            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
</body>
</html>
