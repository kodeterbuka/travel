<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomCleanConfig extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear & Clean Config';

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
     * @return int
     */
    public function handle()
    {
        $this->call('config:cache');
        $this->call('config:clear');
        $this->call('event:clear');      
        $this->call('cache:clear');
        
    }
}
