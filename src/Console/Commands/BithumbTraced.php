<?php

namespace Ezh\CryptoCurrency\Console\Commands;

use Illuminate\Console\Command;
use Ezh\CryptoCurrency\Services\BithumbService;

/**
 * Class BithumbTraced
 * @package Ezh\CryptoCurrency\Console\Commands
 */
class BithumbTraced extends Command
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
    protected $signature = 'bithumb:traced {type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get traced from Bithumb Exchange';

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
        $this->info($this->bithumb->getTradingHistory($this->argument('type')));
    }
}
