<?php

Route::group(['namespace' => 'Kyleh\Address\Controllers'], function () {

    Route::get('address/index', 'AddressController@index');

    Route::get('address/index', 'AddressController@index');

    Route::get('address/create', [
            'as'    => 'addresses.create',
            'uses'  => 'AddressController@create'
        ]);

    Route::post('address/store', [
        'as'   => 'addresses.store',
        'uses' => 'AddressController@storeCreate'
    ]);
});