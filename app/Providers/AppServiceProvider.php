<?php

namespace App\Providers;

use App\Services\Azure\ContentSafety;
use App\Services\Azure\ContentSafetyInterface;
use App\Services\Flockler\Content;
use App\Services\Flockler\ContentInterface;
use App\Services\Smartproxy\SocialMedia\Instagram;
use App\Services\Smartproxy\SocialMedia\InstagramInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ContentSafetyInterface::class, ContentSafety::class);
        $this->app->bind(InstagramInterface::class, Instagram::class);
        $this->app->bind(ContentInterface::class, Content::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
