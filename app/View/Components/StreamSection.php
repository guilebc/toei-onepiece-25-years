<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class StreamSection extends Component
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
        $streams = new Collection([[
            'slug' => 'milan',
            'name' => 'Milan',
            'color' => 'milan',
            'stream_url' => asset('assets/milan.mp4'),
            'youtube_id' => 'RTwNEfirmks',
        ], [
            'slug' => 'berlin',
            'name' => 'Berlin',
            'color' => 'berlin',
            'stream_url' => asset('assets/berlin.mp4'),
            'youtube_id' => 'MWZpVfH58qc',
        ], [
            'slug' => 'london',
            'name' => trans('app.london'),
            'color' => 'london',
            'stream_url' => asset('assets/london.mp4'),
            'youtube_id' => 'RTwNEfirmks',
        ], [
            'slug' => 'madrid',
            'name' => 'Madrid',
            'color' => 'madrid',
            'stream_url' => asset('assets/madrid.mp4'),
            'youtube_id' => 'MWZpVfH58qc',
        ], [
            'slug' => 'paris',
            'name' => 'Paris',
            'color' => 'paris',
            'stream_url' => asset('assets/paris.mp4'),
            'youtube_id' => 'RTwNEfirmks',
        ]]);

        return view('components.stream-section', compact('streams'));
    }
}
