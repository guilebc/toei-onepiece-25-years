<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class BestofSection extends Component
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
        $videos = new Collection([[
            'title' => trans('app.allPlaces'),
            'subtitle' => trans('app.allBestOf'),
            'thumbnail_url' => 'https://placehold.co/535x375.png',
            'video_url' => asset('assets/all.mp4'),
            'color' => 'black',
        ], [
            'title' => trans('app.milanCountry'),
            'subtitle' => trans('app.milanName'),
            'thumbnail_url' => 'https://placehold.co/535x375.png',
            'video_url' => asset('assets/milan.mp4'),
            'color' => 'milan',
        ], [
            'title' => trans('app.berlinCountry'),
            'subtitle' => trans('app.berlinName'),
            'thumbnail_url' => 'https://placehold.co/535x375.png',
            'video_url' => asset('assets/berlin.mp4'),
            'color' => 'berlin',
        ], [
            'title' => trans('app.londonCountry'),
            'subtitle' => trans('app.londonName'),
            'thumbnail_url' => 'https://placehold.co/535x375.png',
            'video_url' => asset('assets/london.mp4'),
            'color' => 'london',
        ], [
            'title' => trans('app.madridCountry'),
            'subtitle' => trans('app.madridName'),
            'thumbnail_url' => 'https://placehold.co/535x375.png',
            'video_url' => asset('assets/madrid.mp4'),
            'color' => 'madrid',
        ], [
            'title' => trans('app.parisCountry'),
            'subtitle' => trans('app.parisName'),
            'thumbnail_url' => 'https://placehold.co/535x375.png',
            'video_url' => asset('assets/paris.mp4'),
            'color' => 'paris',
        ]]);

        return view('components.bestof-section', compact('videos'));
    }
}
