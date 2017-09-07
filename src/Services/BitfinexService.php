<?php

namespace Ezh\CryptoCurrency\Services;

use Ezh\CryptoCurrency\Contracts\CryptoCurrencyContract;

/**
 * Class BitfinexService
 * @package Ezh\CryptoCurrency\Services
 */
class BitfinexService implements CryptoCurrencyContract
{
    /**
     * Get Orderbook.
     *
     * @param string $type
     * @return string
     */
    public function getAllQuotations($type)
    {
        return $this->getCallData(config('crypto-currency.bitfinex.orderbook'), $type);
    }

    /**
     * Get Ticker Info.
     *
     * @param string $type
     * @return string
     */
    public function getTickerInfo($type)
    {
        return $this->getCallData(config('crypto-currency.bitfinex.ticker'), $type);
    }

    /**
     * Empty method.
     */
    public function getChartTicker()
    {
        //
    }

    /**
     * Get recent transactions.
     *
     * @param string $type
     * @return string
     */
    public function getTradingHistory($type)
    {
        return $this->getCallData(config('crypto-currency.bitfinex.trades'), $type);
    }

    /**
     * Connect to Bitfinex API.
     *
     * @param string $url
     * @param string $type
     * @return string
     */
    private function getCallData($url, $type)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, config('crypto-currency.bitfinex.api-url') . $url . $type);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

}
