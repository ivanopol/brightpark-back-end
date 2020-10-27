@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <div class="container">
        {{Breadcrumbs::render("news", $city)}}
    </div>
    <div class="container p-top-90">
        <div class="news">
            <h1>Новости Брайт Парка в {{ $city_info->city_dative  }} </h1>
            @foreach($news as $new)
                <div class="news-row">
                    <a id="news__news-one__title-{{$new->id}}" class="news-title event" href="{{ route('news.one', ['city' => $city_info->alias, 'news_title' => $new->slug]) }}">{{$new->title}}</a>
                    <div class="news-content">
                        <div class="news-img">
                            <a id="news__news-one__image-{{$new->id}}" class="event" href="{{ route('news.one', ['city' => $city_info->alias, 'news_title' => $new->slug]) }}">
                                <img src="{{$new->preview}}" alt="{{$new->text_short}}">
                            </a>
                        </div>
                        <div class="news-text-wrap">
                            <div class="news-text">{!! $new->text_short !!}</div>
                            <div class="news-button">
                                <a id="news__news-one__button-{{$new->id}}" class="btn btn-primary event" href="{{ route('news.one', ['city' => $city_info->alias, 'news_title' => $new->slug]) }}" >Читать</a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <footer-component :coordinates='@json($data['coordinates'])'
                      :phone='@json($cities['active']['phone'])'
                      :phone_formatted='@json($cities['active']['phone_format'])'
                      :cities='@json($cities)'
                      :page="'news'">
    </footer-component>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
