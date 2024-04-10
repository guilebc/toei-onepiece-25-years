<section class="trailer-section bg-bottom bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/trailer-bg.jpg') }}');">
    <div class="max-w-7xl mx-auto py-12 lg:py-24">
        <div class="text-white text-center px-3 mb-12">
            <h1 class="font-display text-5xl uppercase">{{ trans('app.watchEpicTrailer') }}</h1>
        </div>

        <div class="px-3" x-data="player">
            <div class="relative">
                <video x-ref="video" @play="onPlay" @ended="onEnded" @pause="onPause" class="block aspect-video w-full max-w-4xl mx-auto border border-white" controls >
                    <source src="https://player.vimeo.com/progressive_redirect/playback/932926009/rendition/1080p/file.mp4?loc=external&log_user=0&signature=29f850bd6097372bf9a9b331d84f373c4cc02e8a67efa888ec368ea48cbf635a" type="video/mp4" />
                </video>
                <div class="flex justify-center items-center absolute inset-0 z-10 pointer-events-none">
                    <button x-ref="playButton" type="button" class="w-24 h-24 transition-opacity pointer-events-auto" @click="toggle"><img src="{{ asset('assets/play.png') }}" alt=""></button>
                </div>
            </div>
        </div>
    </div>
</section>
