<?php

namespace App\Providers;

use App\Services\Azure\ContentSafety;
use App\Services\Azure\ContentSafetyInterface;
use Illuminate\Support\ServiceProvider;

class AzureServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ContentSafetyInterface::class, ContentSafety::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
