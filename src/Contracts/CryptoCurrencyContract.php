<?php

namespace Ezh\CryptoCurrency\Contracts;

/**
 * Interface CryptoCurrencyContract
 * @package Ezh\CryptoCurrency\Contracts
 */
interface CryptoCurrencyContract
{
    /**
     * @param string $url
     * @return array
     */
    public function getAllQuotations($type);

    /**
     * @return array
     */
    public function getTickerInfo($type);

    /**
     * @return array
     */
    public function getChartTicker();

    /**
     * @return array
     */
    public function getTradingHistory($type);
}
