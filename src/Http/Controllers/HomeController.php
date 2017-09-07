<?php

namespace Ezh\CryptoCurrency\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Class HomeController
 * @package Ezh\CryptoCurrency\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Index page of package
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('crypto-currency::index');
    }

    /**
     * Bithumb page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function bithumb()
    {
        return view('crypto-currency::bithumb');
    }

    /**
     * Bitfinex page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function bitfinex()
    {
        return view('crypto-currency::bitfinex');
    }
}
