<?php

namespace App\Console\Commands;

use App\Services\Azure\ContentSafetyInterface;
use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test command.';

    /**
     * Execute the console command.
     */
    public function handle(ContentSafetyInterface $contentSafety)
    {
        dd($contentSafety->imageAnalyze(file_get_contents(storage_path('test.jpg'))));
    }
}
