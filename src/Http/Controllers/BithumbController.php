<?php

namespace Ezh\CryptoCurrency\Http\Controllers;

use App\Http\Controllers\Controller;
use Ezh\CryptoCurrency\Services\BithumbService;
use Illuminate\Http\Request;

class BithumbController extends Controller
{
    /**
     * @var BithumbService
     */
    private $bithumb;

    /**
     * BithumbController constructor.
     *
     * @param BithumbService $bithumb
     */
    public function __construct(BithumbService $bithumb)
    {
        $this->bithumb = $bithumb;
    }

    /**
     * Get OrderBooks.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrderBooks(Request $request)
    {
        return response()->json($this->bithumb->getAllQuotations($request->orderbook));
    }

    /**
     * Get Ticker Information.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTickerInfo(Request $request)
    {
        return response()->json($this->bithumb->getTickerInfo($request->ticker));
    }

    /**
     * Get Recent transaction.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRecentTransaction(Request $request)
    {
        return response()->json($this->bithumb->getTradingHistory($request->history));
    }
}
