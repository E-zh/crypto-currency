<?php

namespace Ezh\CryptoCurrency\Services;

use Ezh\CryptoCurrency\Contracts\CryptoCurrencyContract;

/**
 * Class BithumbService
 * @package Ezh\CryptoCurrency\Services
 */
class BithumbService implements CryptoCurrencyContract
{
    /**
     * Get Orderbooks.
     *
     * @param string $type
     * @return string
     */
    public function getAllQuotations($type)
    {
        return $this->getCallData(config('crypto-currency.bithumb.orderbook'), $type);
    }

    /**
     * Get ticker's info.
     *
     * @param string $type
     * @return string
     */
    public function getTickerInfo($type)
    {
        return $this->getCallData(config('crypto-currency.bithumb.ticker'), $type);
    }

    /**
     * Get recent transactions.
     *
     * @param string $type
     * @return string
     */
    public function getTradingHistory($type)
    {
        return $this->getCallData(config('crypto-currency.bithumb.recent_transactions'), $type);
    }

    /**
     * Empty method.
     */
    public function getChartTicker()
    {
        //
    }

    /**
     * Connect to Bithumb API.
     *
     * @param string $url
     * @param string $type
     * @return string
     */
    private function getCallData($url, $type)
    {
        $proxy = 'http://10.100.123.1:8078';    //This proxy need me for testing at work!

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, config('crypto-currency.bithumb.api-url') . $url . $type);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_PROXY, $proxy);    //This proxy need me for testing at work!

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
