<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;

class Reset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset Database & Seeding';

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
        $start = microtime(true);

        $migrateResetTime = microtime(true);
        Artisan::call('migrate:reset');
        $migrateResetSeconds = number_format((microtime(true) - $migrateResetTime) * 1000);
        $this->info('Migrate Reseted in : ' . $migrateResetSeconds . ' ms.');

        $migrateTime = microtime(true);
        Artisan::call('migrate');
        $migrateSeconds = number_format((microtime(true) - $migrateTime) * 1000);
        $this->info('Migrated in ' . $migrateSeconds . ' ms.');

        $seedTime = microtime(true);
        Artisan::call('db:seed');
        $seedeSeconds = number_format((microtime(true) - $seedTime) * 1000);
        $this->info('Database seeded in ' . $seedeSeconds . ' ms.');

        $optimizeTime = microtime(true);
        Artisan::call('optimize');
        $optimizeSeconds = number_format((microtime(true) - $optimizeTime) * 1000);
        $this->info('Optimizeed in ' . $optimizeSeconds . ' ms.');

        $total = number_format((microtime(true) - $start), 2);
        $this->info('Total Time : ' . $total . ' Seconds.');

        return 0;
    }
}
