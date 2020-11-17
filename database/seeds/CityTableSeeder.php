<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    public function run()
    {
        $end_script = "";
        $responsible_id = App::environment('production') ? 1201 : 1447 ;

        $cities = [
            [
                'title_ru' => 'Пермь',
                'title_en' => 'perm',
                'alias' => 'perm',
                'city_dative' => 'Перми',
                'region_dative' => 'Пермском крае',
                'opening_hours' => 'Mo-Su,Пн-Вс,Ежедневно;9:00-21:00',
                'coordinates' => '57.997388, 56.306636',
                'jivosite_token'=>'IFmL6hf3c9',
                'open_script'=> '<!-- Yandex.Metrika counter --> <script type="text/javascript" >    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");     ym(54493030, "init", {         clickmap:true,         trackLinks:true,         accurateTrackBounce:true,         webvisor:true    }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/54493030" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->  <!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144189432-1"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag("js", new Date());    gtag("config", "UA-144189432-1"); </script>  <!-- Facebook Pixel Code --> <script>   !function(f,b,e,v,n,t,s)   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?   n.callMethod.apply(n,arguments):n.queue.push(arguments)};   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";   n.queue=[];t=b.createElement(e);t.async=!0;   t.src=v;s=b.getElementsByTagName(e)[0];   s.parentNode.insertBefore(t,s)}(window, document,"script",   "https://connect.facebook.net/en_US/fbevents.js");   fbq("init", "473738316869217");   fbq("track", "PageView"); </script> <noscript><img height="1" width="1" style="display:none"   src="https://www.facebook.com/tr?id=473738316869217&ev=PageView&noscript=1" /></noscript> <!-- End Facebook Pixel Code --><!-- Rating Mail.ru counter --> <script type="text/javascript"> var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3157807", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"}); (function (d, w, id) {   if (d.getElementById(id)) return;   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;   ts.src = "https://top-fwz1.mail.ru/js/code.js";   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "topmailru-code"); </script><noscript><div> <img src="https://top-fwz1.mail.ru/counter?id=3157807;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" /> </div></noscript> <!-- //Rating Mail.ru counter --><script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?167",t.onload=function(){VK.Retargeting.Init("VK-RTRG-442833-fRme5"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-442833-fRme5" style="position:fixed; left:-999px;" alt=""/></noscript>',
                'bitrix_responsible_id' => $responsible_id,
                'begin_script' => $end_script,
                'callback_emails' => 'info@brightpark.ru,erc@brightpark.ru',
                'callback_service_emails' => 'service@brightpark.ru,servis@brightpark.ru',
                'emails' => 'info@brightpark.ru, erc@brightpark.ru'
            ],
            [
                'title_ru' => 'Москва',
                'title_en' => 'moscow',
                'alias' => 'moscow',
                'city_dative' => 'Москве',
                'region_dative' => 'Московской области',
                'opening_hours' => 'Mo-Su,Пн-Вс,Ежедневно;9:00-21:00',
                'coordinates' => '55.488305, 37.565856',
                'open_script'=> '<!-- Yandex.Metrika counter --> <script type="text/javascript" >    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");     ym(55893871, "init", {         clickmap:true,         trackLinks:true,         accurateTrackBounce:true,         webvisor:true    }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/55893871" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter --><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144189432-6"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag("js", new Date());    gtag("config", "UA-144189432-6"); </script><!-- Facebook Pixel Code --> <script>   !function(f,b,e,v,n,t,s)   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?   n.callMethod.apply(n,arguments):n.queue.push(arguments)};   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";   n.queue=[];t=b.createElement(e);t.async=!0;   t.src=v;s=b.getElementsByTagName(e)[0];   s.parentNode.insertBefore(t,s)}(window, document,"script",   "https://connect.facebook.net/en_US/fbevents.js");   fbq("init", "1083869451946144");   fbq("track", "PageView"); </script> <noscript><img height="1" width="1" style="display:none"   src="https://www.facebook.com/tr?id=1083869451946144&ev=PageView&noscript=1" /></noscript> <!-- End Facebook Pixel Code --><!-- Rating Mail.ru counter --> <script type="text/javascript"> var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3157819", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"}); (function (d, w, id) {   if (d.getElementById(id)) return;   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;   ts.src = "https://top-fwz1.mail.ru/js/code.js";   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "topmailru-code"); </script><noscript><div> <img src="https://top-fwz1.mail.ru/counter?id=3157819;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" /> </div></noscript> <!-- //Rating Mail.ru counter --><script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?167",t.onload=function(){VK.Retargeting.Init("VK-RTRG-444330-ax3CC"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-444330-ax3CC" style="position:fixed; left:-999px;" alt=""/></noscript>',
                'jivosite_token'=>'IFmL6hf3c9',
                'bitrix_responsible_id' => $responsible_id,
                'begin_script' => $end_script,
                'callback_emails' => 'moscow@brightpark.ru, erc@brightpark.ru',
                'callback_service_emails' => 'service.moscow@brightpark.ru,servis@brightpark.ru',
                'emails' => 'moscow@brightpark.ru, erc@brightpark.ru'
            ],
            [
                'title_ru' => 'Магнитогорск',
                'title_en' => 'magnitogorsk',
                'alias' => 'magnitogorsk',
                'city_dative' => 'Магнитогорске',
                'region_dative' => 'Челябинской области',
                'opening_hours' => 'Mo-Su,Пн-Вс,Ежедневно;9:00-21:00',
                'coordinates' => '53.342167, 58.996030',
                'jivosite_token'=>'IFmL6hf3c9',
                'open_script'=> '<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54493189, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54493189" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144189432-4"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag("js", new Date());    gtag("config", "UA-144189432-4"); </script>

<!-- Facebook Pixel Code --> <script>   !function(f,b,e,v,n,t,s)   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?   n.callMethod.apply(n,arguments):n.queue.push(arguments)};   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";   n.queue=[];t=b.createElement(e);t.async=!0;   t.src=v;s=b.getElementsByTagName(e)[0];   s.parentNode.insertBefore(t,s)}(window, document,"script",   "https://connect.facebook.net/en_US/fbevents.js");   fbq("init", "577322963116897");   fbq("track", "PageView"); </script> <noscript><img height="1" width="1" style="display:none"   src="https://www.facebook.com/tr?id=577322963116897&ev=PageView&noscript=1" /></noscript> <!-- End Facebook Pixel Code -->

<!-- Rating Mail.ru counter --> <script type="text/javascript"> var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3157814", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"}); (function (d, w, id) {   if (d.getElementById(id)) return;   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;   ts.src = "https://top-fwz1.mail.ru/js/code.js";   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "topmailru-code"); </script><noscript><div> <img src="https://top-fwz1.mail.ru/counter?id=3157814;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" /> </div></noscript>
<!-- //Rating Mail.ru counter -->

<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?167",t.onload=function(){VK.Retargeting.Init("VK-RTRG-443551-5NDsV"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-443551-5NDsV" style="position:fixed; left:-999px;" alt=""/></noscript>',
                'bitrix_responsible_id' => $responsible_id,
                'begin_script' => $end_script,
                'callback_emails' => 'magnitka@brightpark.ru,erc@brightpark.ru',
                'callback_service_emails' => 'service.magnitka@brightpark.ru,servis@brightpark.ru',
                'emails' => 'magnitka@brightpark.ru, erc@brightpark.ru'
            ],
            [
                'title_ru' => 'Ростов-на-Дону',
                'title_en' => 'rostov-on-don',
                'alias' => 'rostov-na-donu',
                'city_dative' => 'Ростове-на-Дону',
                'region_dative' => 'Ростовской области',
                'opening_hours' => 'Mo-Su,Пн-Вс,Ежедневно;9:00-21:00',
                'coordinates' => '47.220273, 39.686051',
                'jivosite_token'=>'IFmL6hf3c9',
                'open_script'=> '<!-- Yandex.Metrika counter --> <script type="text/javascript" >    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");     ym(54296742, "init", {         clickmap:true,         trackLinks:true,         accurateTrackBounce:true,         webvisor:true    }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/54296742" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter --><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128086458-4"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag("js", new Date());    gtag("config", "UA-128086458-4"); </script><!-- Facebook Pixel Code --> <script>   !function(f,b,e,v,n,t,s)   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?   n.callMethod.apply(n,arguments):n.queue.push(arguments)};   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";   n.queue=[];t=b.createElement(e);t.async=!0;   t.src=v;s=b.getElementsByTagName(e)[0];   s.parentNode.insertBefore(t,s)}(window, document,"script",   "https://connect.facebook.net/en_US/fbevents.js");   fbq("init", "735567236846899");   fbq("track", "PageView"); </script> <noscript><img height="1" width="1" style="display:none"   src="https://www.facebook.com/tr?id=735567236846899&ev=PageView&noscript=1" /></noscript> <!-- End Facebook Pixel Code --><!-- Rating Mail.ru counter --> <script type="text/javascript"> var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3157824", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"}); (function (d, w, id) {   if (d.getElementById(id)) return;   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;   ts.src = "https://top-fwz1.mail.ru/js/code.js";   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "topmailru-code"); </script><noscript><div> <img src="https://top-fwz1.mail.ru/counter?id=3157824;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" /> </div></noscript> <!-- //Rating Mail.ru counter --><script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?167",t.onload=function(){VK.Retargeting.Init("VK-RTRG-442839-9OoLu"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-442839-9OoLu" style="position:fixed; left:-999px;" alt=""/></noscript>',
                'bitrix_responsible_id' => $responsible_id,
                'begin_script' => $end_script,
                'callback_emails' => 'rostov@brightpark.ru,erc@brightpark.ru',
                'callback_service_emails' => 'service.rnd@brightpark.ru,servis@brightpark.ru',
                'emails' => 'rostov@brightpark.ru, erc@brightpark.ru'
            ],
            [
                'title_ru' => 'Екатеринбург',
                'title_en' => 'ekaterinburg',
                'alias' => 'yekaterinburg',
                'city_dative' => 'Екатеринбурге',
                'region_dative' => 'Свердловской области',
                'opening_hours' => 'Mo-Su,Пн-Вс,Ежедневно;9:00-21:00',
                'coordinates' => '56.885092, 60.534520',
                'jivosite_token'=>'IFmL6hf3c9',
                'open_script'=> '<!-- Yandex.Metrika counter --> <script type="text/javascript" >    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");     ym(54493159, "init", {         clickmap:true,         trackLinks:true,         accurateTrackBounce:true,         webvisor:true    }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/54493159" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter --><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144189432-3"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag("js", new Date());    gtag("config", "UA-144189432-3"); </script><!-- Facebook Pixel Code --> <script>   !function(f,b,e,v,n,t,s)   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?   n.callMethod.apply(n,arguments):n.queue.push(arguments)};   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";   n.queue=[];t=b.createElement(e);t.async=!0;   t.src=v;s=b.getElementsByTagName(e)[0];   s.parentNode.insertBefore(t,s)}(window, document,"script",   "https://connect.facebook.net/en_US/fbevents.js");   fbq("init", "615160279245137");   fbq("track", "PageView"); </script> <noscript><img height="1" width="1" style="display:none"   src="https://www.facebook.com/tr?id=615160279245137&ev=PageView&noscript=1" /></noscript> <!-- End Facebook Pixel Code --><!-- Rating Mail.ru counter --> <script type="text/javascript"> var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3157810", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"}); (function (d, w, id) {   if (d.getElementById(id)) return;   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;   ts.src = "https://top-fwz1.mail.ru/js/code.js";   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "topmailru-code"); </script><noscript><div> <img src="https://top-fwz1.mail.ru/counter?id=3157810;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" /> </div></noscript> <!-- //Rating Mail.ru counter --><script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?167",t.onload=function(){VK.Retargeting.Init("VK-RTRG-443539-aXjbj"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-443539-aXjbj" style="position:fixed; left:-999px;" alt=""/></noscript>',
                'bitrix_responsible_id' => $responsible_id,
                'begin_script' => $end_script,
                'callback_emails' => 'ekb@brightpark.ru,erc@brightpark.ru',
                'callback_service_emails' => 'service.ekb@brightpark.ru,servis@brightpark.ru',
                'emails' => 'ekb@brightpark.ru, erc@brightpark.ru'
            ],
            [
                'title_ru' => 'Волгоград',
                'title_en' => 'volgograd',
                'alias' => 'volgograd',
                'city_dative' => 'Волгограде',
                'region_dative' => 'Волгоградская область',
                'opening_hours' => 'Mo-Su,Пн-Вс,Ежедневно;9:00-20:00',
                'coordinates' => '48.644535, 44.429039',
                'jivosite_token'=>'IFmL6hf3c9',
                'open_script'=> '<!-- Yandex.Metrika counter --> <script type="text/javascript" >    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");     ym(54493132, "init", {         clickmap:true,         trackLinks:true,         accurateTrackBounce:true,         webvisor:true    }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/54493132" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter --><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144189432-2"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag("js", new Date());    gtag("config", "UA-144189432-2"); </script><!-- Facebook Pixel Code --> <script>   !function(f,b,e,v,n,t,s)   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?   n.callMethod.apply(n,arguments):n.queue.push(arguments)};   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";   n.queue=[];t=b.createElement(e);t.async=!0;   t.src=v;s=b.getElementsByTagName(e)[0];   s.parentNode.insertBefore(t,s)}(window, document,"script",   "https://connect.facebook.net/en_US/fbevents.js");   fbq("init", "1086723805006034");   fbq("track", "PageView"); </script> <noscript><img height="1" width="1" style="display:none"   src="https://www.facebook.com/tr?id=1086723805006034&ev=PageView&noscript=1" /></noscript> <!-- End Facebook Pixel Code --><!-- Rating Mail.ru counter --> <script type="text/javascript"> var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3157801", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"}); (function (d, w, id) {   if (d.getElementById(id)) return;   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;   ts.src = "https://top-fwz1.mail.ru/js/code.js";   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "topmailru-code"); </script><noscript><div> <img src="https://top-fwz1.mail.ru/counter?id=3157801;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" /> </div></noscript> <!-- //Rating Mail.ru counter --><script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?167",t.onload=function(){VK.Retargeting.Init("VK-RTRG-442889-62DMh"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-442889-62DMh" style="position:fixed; left:-999px;" alt=""/></noscript>',
                'bitrix_responsible_id' => $responsible_id,
                'begin_script' => $end_script,
                'callback_emails' => 'volga@brightpark.ru,erc@brightpark.ru',
                'callback_service_emails' => 'service.volga.@brightpark.ru,servis@brightpark.ru',
                'emails' => 'volga@brightpark.ru, erc@brightpark.ru'
            ],
        ];

        DB::table('cities')->insert($cities);
    }
}
