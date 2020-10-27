@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <div class="container">
        {{Breadcrumbs::render("contacts", $city)}}
    </div>
    <div class="container p-top-90">
        <h1>Контакты</h1>
        <div class="contacts-wrap">
            <div class="contacts" itemscope itemtype="http://schema.org/LocalBusiness">
                <ul>
                    <li>
                        <span class="contacts-field-name">Адрес:</span>
                        <span class="contacts-field-value">{{ $cities['active']['address'] }}</span>
                    </li>
                    <li>
                        <span class="contacts-field-name">Время работы:</span>
                        <span class="contacts-field-value" ><time itemprop="openingHours" datetime="{{ $cities['active']['opening_hours']['days']['en'] }} , {{$cities['active']['opening_hours']['hours']}}">с {{ $cities['active']['opening_hours']['hours_split']['from'] }} до {{$cities['active']['opening_hours']['hours_split']['to']}}</time></span>
                    </li>
                    <li>
                        <span class="contacts-field-name">Телефон:</span>
                        <span class="contacts-field-value"><a id="contacts__left-side__phone" class="callibri_tel event" href="tel:{{$cities['active']['phone']}}" >{{ $cities['active']['phone_format'] }}</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name">E-Mail:</span>
                        <span class="contacts-field-value"><a id="contacts__left-side__email" class="event" href="mailto:{{ $cities['active']['email'] }}">{{ $cities['active']['email'] }}</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name">Соц. сети:</span>
                        <span class="contacts-field-value"><a id="contacts__left-side__vk" class="event" href="{{ $cities['active']['vk_url'] }}" target="_blank"><img class="social_logos" src="/build/images/icons/vk-logo.png" alt="Логотип ВК">Вконтакте</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name"></span>
                        <span class="contacts-field-value"><a id="contacts__left-side__facebook" class="event" href="{{ $cities['active']['fb_url'] }}" target="_blank"><img class="social_logos" src="/build/images/icons/facebook-logo.png" alt="Логотип Facebook">Facebook</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name"></span>
                        <span class="contacts-field-value"><a id="contacts__left-side__instagram" class="event" href="{{ $cities['active']['instagram_url'] }}" target="_blank"><img class="social_logos" src="/build/images/icons/instagram-logo.png" alt="Логотип Instagram">Instagram</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name"></span>
                        <span class="contacts-field-value"><a id="contacts__left-side__youtube" class="event" href="{{ $cities['active']['youtube_url'] }}" target="_blank"><img class="social_logos" src="/build/images/icons/yt-logo.png" alt="Логотип YouTube">Youtube</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name"></span>
                        <span class="contacts-field-value"><a id="contacts__left-side__ok" class="event" href="{{ $cities['active']['ok_url'] }}" target="_blank"><img class="social_logos" src="/build/images/icons/ok-logo.png" alt="Логотип Одноклассники">Одноклассники</a></span>
                    </li>
                </ul>
            </div>

            <div class="contacts-map">
                <yandex-map-component :coordinates='@json($data['coordinates'])' :button="false" :lazy_load="false"></yandex-map-component>
            </div>
        </div>
    </div>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
