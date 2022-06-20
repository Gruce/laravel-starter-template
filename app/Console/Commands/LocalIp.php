<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;

class LocalIp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ip';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the server on the specified port';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $port = $this->ask('What is your local port? (default: 5000)');
        $ip = gethostbyname(trim(`hostname`));

        $port = $port ?? '5000';

        $this->info('Starting Laravel development server : http://' . $ip . ":$port");
        Artisan::call('serve --host ' . $ip . ":$port");
        return 0;
    }
}
