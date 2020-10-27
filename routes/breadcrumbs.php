<?php

// Home
Breadcrumbs::for('main', function ($trail, $city) {
    $trail->push('Главная', route('index', [$city]));
});

// Models
Breadcrumbs::for('models', function ($trail, $city, $car_model) {
    $trail->parent('main', $city);
    $trail->push('Модельный ряд ' . $car_model->title,
        route('models', [$city, $car_model->slug]));
});

// Model
Breadcrumbs::for('model', function ($trail, $city, $car_model, $car_type) {

    $title = $car_model->title === $car_type->title_ru ? $car_model->title : $car_model->title . ' ' . $car_type->title_ru;

    $trail->parent('main', $city);
    $trail->push('Модельный ряд ' . $car_model->title,
        route('models', [$city, $car_model->slug]));
    $trail->push($title,
        route('model', [$city, $car_model->slug, $car_type->slug]));
});

// Models details
Breadcrumbs::for('model_details', function ($trail, $city, $car_model, $car_type) {

    $title = $car_model->title === $car_type->title_ru ? $car_model->title : $car_model->title . ' ' . $car_type->title_ru;

    $trail->parent('main', $city);
    $trail->push('Модельный ряд ' . $car_model->title,
        route('models', [$city, $car_model->slug]));
    $trail->push($title,
        route('model', [$city, $car_model->slug, $car_type->slug]));
    $trail->push('Условия покупки',
        route('model_details', [$city, $car_model->slug, $car_type->slug]));
});

// Contacts
Breadcrumbs::for('contacts', function ($trail, $city) {
    $trail->parent('main', $city);
    $trail->push('Контакты',
        route('contacts', [$city]));
});

// Stocks
Breadcrumbs::for('stocks', function ($trail, $city) {
    $trail->parent('main', $city);
    $trail->push('Акции',
        route('stocks', [$city]));
});

// Stocks one
Breadcrumbs::for('stocks.one', function ($trail, $city, $stocks) {
    $trail->parent('main', $city);
    $trail->push('Акции', route('stocks', [$city]));
    $trail->push($stocks->title, route('stocks.one', [$city, $stocks]));
});

// News
Breadcrumbs::for('news', function ($trail, $city) {
    $trail->parent('main', $city);
    $trail->push('Новости',
        route('news', [$city]));
});

// News one
Breadcrumbs::for('news.one', function ($trail, $city, $news) {
    $trail->parent('main', $city);
    $trail->push('Новости', route('news', [$city]));
    $trail->push($news->title, route('news.one', [$city, $news]));
});

// Privacy
Breadcrumbs::for('privacy', function ($trail, $city) {
    $trail->parent('main', $city);
    $trail->push('Политика конфиденциальности', route('privacy', [$city]));
});


