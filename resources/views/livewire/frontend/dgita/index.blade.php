<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beranda Kreatif - IT & Software Development</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/bootstrap.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/animate.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/themewar-font.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/dgita-icon.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/owl.theme.default.min.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/settings.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/lightslider.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/slick.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/lightcase.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/preset.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/ignore_for_wp.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/theme.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/responsive.css" />
        <link rel="stylesheet" href="{{asset('frontend')}}/dgita/css/custom.css" />

        <link rel="icon" type="image/png" href="{{asset('logobox.png')}}" />
        <style>
            .mainMenu > ul ul li a {
                15rem !important;
            }

        </style>
    </head>
    <body>
        <div class="preloader text-center">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        @include('livewire.frontend.dgita.inc.header')

        {{$slot}}

        @include('livewire.frontend.dgita.inc.footer')
        <a href="javascript:void(0);" id="backtotop"><i class="twi-arrow-to-top1"></i></a>

        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/jquery.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/jquery-ui.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/jquery.appear.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/owl.carousel.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/jquery.shuffle.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/lightslider.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/slick.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/lightcase.js"></script>

        <script src="{{asset('frontend')}}/dgita/js/jquery.themepunch.tools.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/jquery.themepunch.revolution.min.js"></script>

        <script src="{{asset('frontend')}}/dgita/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/extensions/revolution.extension.video.min.js"></script>
        <script src="{{asset('frontend')}}/dgita/js/theme.js"></script>
    </body>
</html>
