<?php

Route::group(['prefix' => '/test'], function () {
    Route::get('/', 'Ezh\CryptoCurrency\Http\Controllers\HomeController@index')->name('test::index');

    //Routing for BITHUMB
    Route::group(['prefix' => '/bithumb'], function () {
        Route::get('/', 'Ezh\CryptoCurrency\Http\Controllers\HomeController@bithumb')->name('test::bithumb');
        Route::post('/orderbook', 'Ezh\CryptoCurrency\Http\Controllers\BithumbController@getOrderBooks')
            ->name('test::bithumb::orderbook');
        Route::post('/ticker', 'Ezh\CryptoCurrency\Http\Controllers\BithumbController@getTickerInfo')
            ->name('test::bithumb::ticker');
        Route::post('/history', 'Ezh\CryptoCurrency\Http\Controllers\BithumbController@getRecentTransaction')
            ->name('test::bithumb::history');
    });

    //Routing for BITFINEX
    Route::group(['prefix' => '/bitfinex'], function () {
        Route::get('/', 'Ezh\CryptoCurrency\Http\Controllers\HomeController@bitfinex')->name('test::bitfinex');
        Route::post('/orderbook', 'Ezh\CryptoCurrency\Http\Controllers\BitfinexController@getOrderBooks')
            ->name('test::bitfinex::orderbook');
        Route::post('/ticker', 'Ezh\CryptoCurrency\Http\Controllers\BitfinexController@getTickerInfo')
            ->name('test::bitfinex::ticker');
        Route::post('/history', 'Ezh\CryptoCurrency\Http\Controllers\BitfinexController@getRecentTransaction')
            ->name('test::bitfinex::history');
    });
});


