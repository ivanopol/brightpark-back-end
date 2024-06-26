@extends('layouts.app2')

@section('content')
    <tab-bar :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-model :theme="'light'" :city="'{{$city}}'" :button=true
                             :car='@json($data['slider']['slides'])' ></header-sticky-model>
    <header-component :line="true" :theme="'light'" :city="'{{$city}}'" :head_class="'header-model'"
                      :car='@json($data['slider']['slides'])'></header-component>
    <div class="">
        <div class="container model-breadcrumbs">
            {{Breadcrumbs::render("model", $city, $car_model, $car_type)}}
        </div>
        <hooper-component :data='@json($data['slider'])' :city='@json($cities['active'])' ></hooper-component>

        @foreach ($data['blocks'] as $key => $block)
            <info-component :block='@json($block)' :n='@json($key)' :model='@json($data['model_id'])' :type='@json($data['type_id'])' :data='@json($data)'></info-component>
            @if ($key === 1)
                <form-buy-component :cities='@json($cities)'
                                    :form_id="'model__learn-about-details_'"
                                    :button_text="'Отправить'"
                                    :form_title="'<span class=\'c_orange\'>Узнайте</span> о модели подробнее'"
                                    :goal="'about_model'">
                </form-buy-component>
            @endif
        @endforeach

        @if(count($data['colors']))
            <color-choose-component :colors='@json($data['colors'])' :model="'{{$car_model->slug}}'" :type="'{{$car_type->slug}}'"></color-choose-component>
        @endif
        <form-component :cities='@json($cities)'
                        :form_id="'model__try-it-yourself_'"
                        :form_title="'Расширенный тест-драйв в Брайт парке'"
                        :goal="'test_drive'">
        </form-component>
        @if(count($data['reviews']))
            <review-component :reviews='@json($data['reviews'])'
                              :model_name="'{{$data['model_full']}}'"></review-component>
        @endif
        <next-action-component :link="'{{request()->segment(count(request()->segments()))}}'"
                               :cities='@json($cities)'></next-action-component>
        <section class="block block_5">
            <div class="block-text">
                <h2><span class="c_orange">Гарантия</span> 3 года</h2>
                <p>На&nbsp;вашу новенькую LADA {{ $data['model_full'] }} действует расширенная гарантия 3&nbsp;года.</p>
            </div>
            <div class="photo_block container-max">
                <div class="feedback">
                    <picture>
                        <source srcset="{{asset('/build/images/photos/feedback/feedback-desktop.jpg')}}"
                                media="(min-width: 660px)">
                        <img src="{{asset('/build/images/photos/feedback/feedback_04.jpg')}}" alt="На вашу новенькую {{ $data['model_full'] }} действует расширенная гарантия 3 года.">
                    </picture>
                </div>
            </div>
        </section>
        <footer-component :coordinates='@json($data['coordinates'])'
                          :phone='@json($cities['active']['phone'])'
                          :phone_formatted='@json($cities['active']['phone_format'])'
                          :cities='@json($cities)'
                          :page="'model'">
        </footer-component>
    </div>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
