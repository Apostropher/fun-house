<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services;
use App\Rota;

class SingleManningCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'single:manning {rota?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will calculate the number of single manning minutes for each day of the week.';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    private $singleManningService;
    
    public function __construct(Services\SingleManningServiceInterface $singleManningService)
    {
        parent::__construct();

        $this->singleManningService = $singleManningService;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
         $rotaId = $this->argument('rota');

         $rota = Rota::findOrFail($rotaId);

         $calculation = $this->singleManningService->calculate($rota);

        $this->info($calculation->toJson());
    }
}