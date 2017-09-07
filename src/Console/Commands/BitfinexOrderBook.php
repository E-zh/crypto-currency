<?php

namespace Ezh\CryptoCurrency\Console\Commands;

use Illuminate\Console\Command;
use Ezh\CryptoCurrency\Services\BitfinexService;

/**
 * Class BitfinexOrderBook
 * @package Ezh\CryptoCurrency\Console\Commands
 */
class BitfinexOrderBook extends Command
{
    /**
     * @var BitfinexService
     */
    private $bitfinex;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bitfinex:orderbook {type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get orderbook from Bitfinex Exchange';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(BitfinexService $bitfinex)
    {
        parent::__construct();

        $this->bitfinex = $bitfinex;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info($this->bitfinex->getAllQuotations($this->argument('type')));
    }
}
