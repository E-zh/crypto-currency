<?php

namespace Ezh\CryptoCurrency\Http\Controllers;

use App\Http\Controllers\Controller;
use Ezh\CryptoCurrency\Services\BitfinexService;
use Illuminate\Http\Request;

/**
 * Class BitfinexController
 * @package Ezh\CryptoCurrency\Http\Controllers
 */
class BitfinexController extends Controller
{
    /**
     * @var BitfinexService
     */
    private $bitfinex;

    /**
     * BitfinexController constructor.
     *
     * @param BitfinexService $bitfinex
     */
    public function __construct(BitfinexService $bitfinex)
    {
        $this->bitfinex = $bitfinex;
    }

    /**
     * Get Orderbooks.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrderBooks(Request $request)
    {
        return response()->json($this->bitfinex->getAllQuotations($request->orderbook));
    }

    /**
     * Get ticker's information.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTickerInfo(Request $request)
    {
        return response()->json($this->bitfinex->getTickerInfo($request->ticker));
    }

    /**
     * Get Recent Transaction.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRecentTransaction(Request $request)
    {
        return response()->json($this->bitfinex->getTradingHistory($request->history));
    }
}
