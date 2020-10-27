@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <div class="container">
        {{Breadcrumbs::render("models", $city, $car_model)}}
    </div>
    <div class="">
        <section id="carcasses" class="carcasses_wrap">
            <div class="container" itemscope itemtype="http://schema.org/Product">
                <h1>LADA {{$data['carcasses'][0]->title}} от официального дилера в {{$cities['active']['dative']}}</h1>
                <ul class="carcasses-ul">
                    @foreach ($data['carcasses'][0]->carcasses as $carcass)
                        <li>
                            <div class="carcasses-list">
                                <span class="hidden" itemprop="name">{{$data['carcasses'][0]->title . ' ' . $carcass->title_ru}}</span>
                                <span class="hidden" itemprop="description">{{$carcass->pivot->slogan}}</span>
                                <a id="models__carcass-list__{{$data['carcasses'][0]->slug}}-{{$carcass->slug}}" class="event" href="{{ route('model', ['city' => $city, 'car_model' => $data['carcasses'][0]->slug, 'car_type' => $carcass->slug ]) }}">
                                    <div class="carcasses-list-img bubble">
                                        <img class="bubble" itemprop="image" src="{{$carcass->pivot->image}}" alt="{{$data['carcasses'][0]->title . ' ' . $carcass->title_ru}}">
                                    </div>
                                    <div class="carcasses-list-description bubble" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <div class="carcasses-list-title bubble">
                                            <span class="carcasses-list-title-el bubble" itemprop="name">{{$data['carcasses'][0]->title . ' ' . $carcass->title_ru}}</span>
                                            <span itemprop="description" class="carcasses-list-title-slogan bubble">{{$carcass->pivot->slogan}}</span>
                                        </div>
                                        <div class="carcasses-list-prices" >
                                            <span itemprop="price" class="carcasses-list-prices-new bubble">от <span>{{ number_format($carcass->pivot->special_price, 0, ',', ' ') }}</span> <span itemprop="priceCurrency" content="RUB">р.</span></span>
                                            @if(intval($carcass->pivot->special_price) !== intval($carcass->pivot->price))
                                                <span class="carcasses-list-prices-old bubble">от <span>{{ number_format($carcass->pivot->price, 0, ',', ' ') }}</span> р.</span>
                                            @endif
                                        </div>
                                        <div class="carcasses-list-button">
                                            <span class="btn btn-primary btn-position green bubble">Подробнее</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="text-after">{!! $data['carcasses'][0]->description !!}</div>
            </div>
        </section>
        <footer-component :coordinates='@json($data['coordinates'])'
                          :phone='@json($cities['active']['phone'])'
                          :phone_formatted='@json($cities['active']['phone_format'])'
                          :cities='@json($cities)'
                          :page="'models'">
        </footer-component>
    </div>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
