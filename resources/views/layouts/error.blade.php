<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head  prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Bright Park">

    <title>Страница не найдена</title>
    <meta name="description" content="Страница не найдена">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- <meta name="format-detection" content="telephone=no"> -->
    <meta name="yandex-verification" content="b3d9ee8d4fb4066b" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js', 'build') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app2.css', 'build') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="wrapper @isset($class) {{ $class  }} @endisset">
        @yield('content')
    </div>
</div>
<script src="https://api-maps.yandex.ru/2.1/?apikey=e65fea9d-e8a0-479d-b21a-35637fdc6c6c&lang=ru_RU&init=onload"
        type="text/javascript">
</script>

@if (app()->environment('production'))
    <!-- StreamWood code -->
    <link href="https://clients.streamwood.ru/StreamWood/sw.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://clients.streamwood.ru/StreamWood/sw.js" charset="utf-8"></script>
    <script type="text/javascript">
        swQ(document).ready(function(){
            swQ().SW({
                swKey: 'd780aa68ebad661ef6dc3a10ca71b1f5',
                swDomainKey: 'aff90937246c0f13a056816f279cb551'
            });
            swQ('body').SW('load');
        });
    </script>
    <!-- /StreamWood code -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(54496129, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });

    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/54496129" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Jivosite -->
    <script src="//code.jivosite.com/widget/H95FUE1JmR" async></script>
    <!-- /Jivosite -->
    <script>
        function jivo_onLoadCallback(){
            jivo_api.setUserToken(yaCounter54496129.getClientID());
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144189432-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-144189432-5');
    </script>
    <!-- /Global site tag (gtag.js) - Google Analytics -->

    <!-- Calibri -->
    <script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8" ></script>
    <script>callibri_wait(window, null, function(){ document.body.dataset.jsLoaded == true}, 10, 50, callibriInit);</script>
    <!-- /Calibri -->
@endif
</body>
</html>
