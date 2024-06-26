<section class="bg-neutral-200">
    <div class="max-w-7xl mx-auto py-12">
        <div class="text-center mb-6">
            <h1 class="font-display text-5xl uppercase">{{ trans('app.thankYouAll') }}</h1>
            <p class="font-display text-2xl uppercase">{{ trans('app.galleryText') }}</p>
        </div>

        <div class="px-3 lg:px-0">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-3 gap-y-12">
                @foreach($videos as $video)
                    <div>
                        <div class="relative after:block after:w-1/4 after:h-2 after:bg-{{ $video['color'] }}">
                            <a data-fancybox href="{{ $video['video_url'] }}"><img src="{{ $video['thumbnail_url'] }}" alt="{{ $video['title'] }}"></a>
                            <div class="flex justify-center items-center absolute inset-0 z-10 pointer-events-none">
                                <button type="button" class="w-16 h-16 transition-opacity"><img src="{{ asset('assets/play.png') }}" alt=""></button>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold text-lg">{{ $video['title'] }}</span><br />
                            <span class="font-light">{{ $video['subtitle'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
