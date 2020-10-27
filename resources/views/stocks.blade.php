@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>

    <div class="container">
        {{Breadcrumbs::render("stocks", $city)}}
    </div>

    <div class="container p-top-90">
        <div class="stocks">
            <h1>Акции Брайт Парка в {{ $city_info->city_dative  }} </h1>
            @foreach($stocks as $stock)
                <div class="stocks-row">
                    <a id="stocks__stocks-one__title-{{$stock->id}}" class="stocks-title event" href="{{ route('stocks.one', ['city' => $city_info->alias, 'stocks_title' => $stock->slug]) }}" >{{$stock->title}}</a>
                    <div class="stocks-content">
                        <div class="stocks-img">
                            <a id="stocks__stocks-one__image-{{$stock->id}}" class="event" href="{{ route('stocks.one', ['city' => $city_info->alias, 'stocks_title' => $stock->slug]) }}">
                                <img  src="{{$stock->preview}}" alt="{{$stock->text_short}}">
                            </a>
                        </div>
                        <div class="stocks-text-wrap">
                            <div class="stocks-text">{!! $stock->text_short !!}</div>
                            <div class="stocks-button">
                                <a id="stocks__stocks-one__button-{{$stock->id}}" class="btn btn-primary event" href="{{ route('stocks.one', ['city' => $city_info->alias, 'stocks_title' => $stock->slug]) }}" >Читать</a>
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
                      :page="'stocks'">
    </footer-component>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>

@endsection
