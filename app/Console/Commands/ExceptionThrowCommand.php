<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Throwable;

class ExceptionThrowCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:exception-throw-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $dnm = 0;
            $x = 4 / $dnm;
        } catch (Throwable $exception) {
            Log::warning('help');
            exit(1);
        }
    }
}
