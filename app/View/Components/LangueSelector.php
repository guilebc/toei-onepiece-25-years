<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LangueSelector extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $supportedLocales = collect(LaravelLocalization::getSupportedLocales());
        $currentLocale = LaravelLocalization::getCurrentLocale();

        return view('components.langue-selector', [
            'currentLocale' => $currentLocale,
            'supportedLocales' => $supportedLocales->filter(fn($locales, $key) => $currentLocale !== $key)
        ]);
    }
}
