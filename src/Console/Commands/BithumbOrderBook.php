<?php

namespace Ezh\CryptoCurrency\Console\Commands;

use Illuminate\Console\Command;
use Ezh\CryptoCurrency\Services\BithumbService;

class BithumbOrderBook extends Command
{
    /**
     * @var BithumbService
     */
    private $bithumb;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bithumb:orderbook {type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get orderbook from Bithumb Exchange';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(BithumbService $bithumb)
    {
        parent::__construct();

        $this->bithumb = $bithumb;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info($this->bithumb->getAllQuotations($this->argument('type')));
    }
}
