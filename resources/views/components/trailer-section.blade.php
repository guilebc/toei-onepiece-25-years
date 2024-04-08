<section class="trailer-section bg-[url('https://placehold.co/1920x1080.jpg')] bg-center">
    <div class="max-w-7xl mx-auto py-12">
        <div class="text-center px-3 mb-6">
            <h1 class="font-display text-5xl uppercase">{{ trans('app.watchEpicTrailer') }}</h1>
            <p class="font-display text-2xl uppercase">{{ trans('app.firstGift') }}</p>
        </div>

        <div class="px-3" x-data="player">
            <div class="relative">
                <video x-ref="video" @play="onPlay" @ended="onEnded" @pause="onPause" class="block aspect-video w-full max-w-3xl mx-auto border border-white" controls >
                    <source src="https://player.vimeo.com/progressive_redirect/playback/924569081/rendition/720p/file.mp4?loc=external&log_user=0&signature=f9a9d385f07d159aae4ddc9330073a6dfd99dfad9578519e169151de51c09f17" type="video/mp4" />
                </video>
                <div class="flex justify-center items-center absolute inset-0 z-10">
                    <button x-ref="playButton" type="button" class="w-24 h-24 transition-opacity" @click="toggle"><img src="{{ asset('assets/play.png') }}" alt=""></button>
                </div>
            </div>
        </div>
    </div>
</section>
