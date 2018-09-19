<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class simpleArtisanCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'simple:hello {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will display simple hello message with your name.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
         $name = $this->argument('name');
          $this->info("Hello! Mr. $name, I Hope Your are Doing Good.");
    }
}