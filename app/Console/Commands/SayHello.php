<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SayHello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'say:hello';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing Command';

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
        $this->info("working our command");
    }
}
