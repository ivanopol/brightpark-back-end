@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)'
             :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true" :theme="'light'" :city="'{{$city}}'"></header-component>
    <div class="container">
        {{Breadcrumbs::render("stocks.one", $city, $stocks)}}
    </div>
    <div class="container p-top-90">
        <div class="stocks-wrapper">
            <h1>{{ $stocks->title }}</h1>
            <div class="stocks-one">
                <div class="stocks-one-img">
                    <img src="{{$stocks->preview}}" alt="{{$stocks->text_short}}">
                </div>
                <div class="stocks-one-body">
                    {!! $stocks->text !!}
                </div>
            </div>
        </div>
    </div>
    <footer-component :coordinates='@json($data['coordinates'])'
                      :phone='@json($cities['active']['phone'])'
                      :phone_formatted='@json($cities['active']['phone_format'])'
                      :cities='@json($cities)'
                      :page="'stocks-one'">
    </footer-component>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
