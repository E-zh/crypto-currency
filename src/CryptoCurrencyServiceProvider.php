<?php

namespace Ezh\CryptoCurrency;

use Illuminate\Support\ServiceProvider;
use Ezh\CryptoCurrency\Console\Commands\BitfinexOrderBook;
use Ezh\CryptoCurrency\Console\Commands\BitfinexTickerInfo;
use Ezh\CryptoCurrency\Console\Commands\BitfinexTraced;
use Ezh\CryptoCurrency\Console\Commands\BithumbOrderBook;
use Ezh\CryptoCurrency\Console\Commands\BithumbTickerInfo;
use Ezh\CryptoCurrency\Console\Commands\BithumbTraced;

/**
 * Class CryptoCurrencyServiceProvider
 * @package Ezh\CryptoCurrency
 */
class CryptoCurrencyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/routes/web.php';

        $this->loadViewsFrom(__DIR__.'/resources/views', 'crypto-currency');

        $this->publishes([
            __DIR__.'/resources/assets' => public_path('libs'),
        ], 'crypto-currency');

        if ($this->app->runningInConsole()) {
            $this->commands([
                BithumbOrderBook::class,
                BithumbTickerInfo::class,
                BithumbTraced::class,
                BitfinexOrderBook::class,
                BitfinexTickerInfo::class,
                BitfinexTraced::class
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Ezh\CryptoCurrency\Http\Controllers\HomeController');

        $this->app->make('Ezh\CryptoCurrency\Http\Controllers\BithumbController');

        $this->app->make('Ezh\CryptoCurrency\Http\Controllers\BitfinexController');

        $this->mergeConfigFrom(__DIR__.'/config/crypto-currency.php', 'crypto-currency');
    }
}
