<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head  prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Bright Park">

    {!! SEO::generate() !!}

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

{{--    <link
        rel="preload"
        as="font"
        href="/build/fonts/PragmaticaLightC/PragmaticaLightC.woff2"
        type="font/woff2"
        crossorigin
    />

    <link
        rel="preload"
        as="font"
        href="/build/fonts/PragmaticaLightCBold/PragmaticaLightCBold.woff2"
        type="font/woff2"
        crossorigin
    />--}}

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

@if (app()->environment('production'))
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144189432-5"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-144189432-5');
</script>
<!-- /Global site tag (gtag.js) - Google Analytics -->

<script>
    var fired = false;

    window.addEventListener('scroll', () => {
        if (fired === false) {
            fired = true;

            setTimeout(() => {
                var tag_head = document.getElementsByTagName("head")[0];
                var tag_body = document.getElementsByTagName("body")[0];

                // StreamWood code
                var streamwood_style = document.createElement('link');
                streamwood_style.rel = 'stylesheet';
                streamwood_style.href = 'https://clients.streamwood.ru/StreamWood/sw.css';
                streamwood_style.type = 'text/css';

                var streamwood_sw = document.createElement("script");
                streamwood_sw.type = 'text/javascript';
                streamwood_sw.src = 'https://clients.streamwood.ru/StreamWood/sw.js';
                streamwood_sw.charset = 'utf-8';

                var streamwood_sw_client = document.createElement("script");
                streamwood_sw_client.type = 'text/javascript';
                streamwood_sw_client.innerHTML = 'swQ(document).ready(function(){\n' +
                    '            swQ().SW({\n' +
                    '                swKey: \'d780aa68ebad661ef6dc3a10ca71b1f5\',\n' +
                    '                swDomainKey: \'aff90937246c0f13a056816f279cb551\'\n' +
                    '            });\n' +
                    '            swQ(\'body\').SW(\'load\');\n' +
                    '        });';
                // /StreamWood code
                // Yandex.Metrika counter
/*                var ya_metrika = document.createElement("script");
                ya_metrika.type = 'text/javascript';
                ya_metrika.innerHTML = '(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};\n' +
                    '            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})\n' +
                    '        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");\n' +
                    '\n' +
                    '        ym(54496129, "init", {\n' +
                    '            clickmap:true,\n' +
                    '            trackLinks:true,\n' +
                    '            accurateTrackBounce:true,\n' +
                    '            webvisor:true\n' +
                    '        });';
                var ya_no_script = document.createElement("noscript");
                var ya_div = document.createElement("div");
                var ya_img = document.createElement("img");
                ya_img.src = "https://mc.yandex.ru/watch/54496129";
                ya_img.style = "position:absolute; left:-9999px;";
                ya_div.appendChild(ya_img);
                ya_no_script.appendChild(ya_div);*/
                // /Yandex.Metrika counter
                // Jivosite
                var jivosite = document.createElement("script");
                jivosite.src = "//code.jivosite.com/widget/H95FUE1JmR";
                jivosite.async = true;
                var jivosite_custom = document.createElement("script");
                jivosite_custom.innerHTML = 'function jivo_onLoadCallback(){\n' +
                    '            jivo_api.setUserToken(yaCounter54496129.getClientID());\n' +
                    '        }';
                // /Jivosite
                // Global site tag (gtag.js) - Google Analytics
/*                var gtag = document.createElement("script");
                gtag.src = "https://www.googletagmanager.com/gtag/js?id=UA-144189432-5";
                gtag.async = true;
                var gtag_script = document.createElement("script");
                gtag_script.innerHTML = 'window.dataLayer = window.dataLayer || [];\n' +
                    '        function gtag(){dataLayer.push(arguments);}\n' +
                    '        gtag(\'js\', new Date());\n' +
                    '\n' +
                    '        gtag(\'config\', \'UA-144189432-5\');';*/
                // /Global site tag (gtag.js) - Google Analytics
                // Calibri
                var calibri = document.createElement("script");
                calibri.src = "//cdn.callibri.ru/callibri.js";
                calibri.type = "text/javascript";
                calibri.charset = "utf-8";
                var calibri_script = document.createElement("script");
                calibri_script.innerHTML = 'callibri_wait(window, null, function(){ document.body.dataset.jsLoaded == true}, 10, 50, callibriInit);';
                // /Calibri

                // YClients
                var yclients = document.createElement("script");
                yclients.type = "text/javascript";
                yclients.src = "https://w385915.yclients.com/widgetJS";
                yclients.charset = "UTF-8";
                var yc_button = document.createElement("a");
                yc_button.href = "";
                yc_button.className = "ms_booking yc_button";
                yc_button.innerHTML = "Онлайн запись";
                // /YClients

                tag_head.appendChild(streamwood_style);
                tag_body.appendChild(streamwood_sw);
                setTimeout(() => {
                    tag_body.appendChild(streamwood_sw_client);
                }, 500);


                if (window.location.pathname === '/perm/service' || window.location.pathname === '/perm') {
                    tag_body.appendChild(yclients);
                    tag_body.appendChild(yc_button);
                }
              //  tag_body.appendChild(ya_metrika);
              //  tag_body.appendChild(ya_no_script);
                tag_body.appendChild(jivosite);
                tag_body.appendChild(jivosite_custom);
              //  tag_body.appendChild(gtag);
              //  tag_body.appendChild(gtag_script);
                tag_body.appendChild(calibri);
                setTimeout(() => {
                    tag_body.appendChild(calibri_script);
                }, 500);
            }, 1000);
        }
    });

</script>
@endif
</body>
</html>
