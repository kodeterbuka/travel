<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:db';

    /**s
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate Refresh and Seeder Data from database';

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
        $this->call('migrate:fresh');
        $this->call('db:seed');
        $this->info('Berhasil migrate db & seed');
    }
}
