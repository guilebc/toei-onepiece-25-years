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
            'thumbnail_url' => 'https://i.vimeocdn.com/video/1847793076-a12222e6308c2df908203351c5a3a50a9a743ceb4f0d33045ec9b76f3c18dd10-d_535x301?r=pad',
            'video_url' => 'https://player.vimeo.com/progressive_redirect/playback/943554448/rendition/1080p/file.mp4?loc=external&log_user=0&signature=acf18a29fcb320d8395eac19efd4cd6f4853f64d2d3537e4ec893a774c0fa36e',
            'color' => 'black',
        ], [
            'title' => trans('app.milanCountry'),
            'subtitle' => trans('app.milanName'),
            'thumbnail_url' => 'https://i.vimeocdn.com/video/1847789255-e8fcc4615625daa7078195047acc41eaf340e8a1f5eb76a743a5e7021b79412d-d_535x301?r=pad',
            'video_url' => 'https://player.vimeo.com/progressive_redirect/playback/943554506/rendition/1080p/file.mp4?loc=external&log_user=0&signature=00824efc89f296c3608d7ecddf799aa3cfd96e06ba878b472599492be060f6de',
            'color' => 'milan',
        ], [
            'title' => trans('app.berlinCountry'),
            'subtitle' => trans('app.berlinName'),
            'thumbnail_url' => 'https://i.vimeocdn.com/video/1847792390-9157d3d945ee41abe28cee406c94a5475f4980ad66049233726190373aaa44ed-d_535x301?r=pad',
            'video_url' => 'https://player.vimeo.com/progressive_redirect/playback/943554421/rendition/1080p/file.mp4?loc=external&log_user=0&signature=29b6201685679fc887cb0945499a2c4e78ba6705ed21502ebc4183903e524c0e',
            'color' => 'berlin',
        ], [
            'title' => trans('app.londonCountry'),
            'subtitle' => trans('app.londonName'),
            'thumbnail_url' => 'https://i.vimeocdn.com/video/1847789235-674cc39b4d350f5233be2efc69e5032f468239dc1c075d8cacd68ab199cecba8-d_535x301?r=pad',
            'video_url' => 'https://player.vimeo.com/progressive_redirect/playback/943554467/rendition/1080p/file.mp4?loc=external&log_user=0&signature=94602431e1bea94a25254881c8a3a53642f5444854cc141dd6f30066423627bd',
            'color' => 'london',
        ], [
            'title' => trans('app.madridCountry'),
            'subtitle' => trans('app.madridName'),
            'thumbnail_url' => 'https://i.vimeocdn.com/video/1847789225-5287955c0b30d96f18b9c20d12a3ef8ab32d38f76e621d79c6b8287eb781199d-d_535x301?r=pad',
            'video_url' => 'https://player.vimeo.com/progressive_redirect/playback/943554491/rendition/1080p/file.mp4?loc=external&log_user=0&signature=64710e89b634311dfb09321f2d1629df7a671fa4c83f0c4c15fd13f9101d6136',
            'color' => 'madrid',
        ], [
            'title' => trans('app.parisCountry'),
            'subtitle' => trans('app.parisName'),
            'thumbnail_url' => 'https://i.vimeocdn.com/video/1847789140-97c8a27be1d25ac4c6925ae90c0735b64d403bac8549900ba8fda4e490e60c95-d_535x301?r=pad',
            'video_url' => 'https://player.vimeo.com/progressive_redirect/playback/943554380/rendition/1080p/file.mp4?loc=external&log_user=0&signature=eb318b35d5b8b540a14b48e3510317258e053fe36b525f4ebc343662ec659364',
            'color' => 'paris',
        ]]);

        return view('components.bestof-section', compact('videos'));
    }
}
