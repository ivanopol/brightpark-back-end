<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['cache.headers:private;max_age=3600'])->group(function () {
    Route::get('/model_details', 'API\ModelController@model_details')->name('model_details');
    Route::get('/models_list', 'API\ModelController@index')->name('models_list');
    Route::get('/carcasses', 'API\ModelController@carcasses')->name('carcasses');
    Route::get('/model', 'API\ModelController@model')->name('model');
    Route::get('/get_cars_list', 'API\ModelController@getCarsList');
    Route::get('/get_cars_brands', 'API\ModelController@getCarsBrands');
    Route::get('/retargeting', 'API\ModelController@getRetargetingInfo');
    Route::get('/get_cities', 'GeoController@get_cities');
    Route::get('/news', 'API\ModelController@getNewsList');
    Route::get('/stocks', 'API\ModelController@getStocksList');
    Route::get('/stocks_item', 'API\ModelController@getStocksItem');
    Route::get('/news_item', 'API\ModelController@getNewsItem');
    Route::post('/get_meta_tags', 'API\ModelController@getMetaTags');

    Route::get('/get_city_by_ip', 'GeoController@get_user_city_by_ip');
    Route::get('/get_brand_models', 'ModelController@get_brand_models');
    Route::post('/get_estimation', 'ModelController@getEstimation');
    Route::get('/get_complectations/{brand_id}/{model_id}', 'ModelController@getComplectations');
    Route::get('/get_credit_programs', 'ModelController@getCreditPrograms');
    Route::post('/write_event', 'EventController@write_event');

    Route::post('/send_contact_form', 'ContactFormController@sendContactForm')->name('sendContactForm');
});


