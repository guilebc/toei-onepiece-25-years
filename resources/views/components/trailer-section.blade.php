<section class="trailer-section bg-bottom bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/trailer-bg.jpg') }}');">
    <div class="max-w-7xl mx-auto py-12 lg:py-24">
        <div class="text-white text-center px-3 mb-12">
            <h1 class="font-display text-5xl uppercase">{{ trans('app.watchEpicTrailer') }}</h1>
        </div>

        <div class="px-3" x-data="player">
            <div class="relative">
                <video x-ref="video" @play="onPlay" @ended="onEnded" @pause="onPause" poster="https://i.vimeocdn.com/video/1831768963-25c216e470d3d96d83a1f6180122536c5c4fe201b9fc122e130ab8489f28b2e6-d_1920x1080?r=pad" class="block aspect-video w-full max-w-4xl mx-auto border border-white" controls >
                    <source src="https://player.vimeo.com/progressive_redirect/playback/933352723/rendition/1080p/file.mp4?loc=external&log_user=0&signature=2592f67661348a586a7ff42a76c1196523d04a9575dfa47ad9138bd1d16d584b" type="video/mp4" />
                </video>
                <div class="flex justify-center items-center absolute inset-0 z-10 pointer-events-none">
                    <button x-ref="playButton" type="button" class="w-24 h-24 transition-opacity pointer-events-auto" @click="toggle"><img src="{{ asset('assets/play.png') }}" alt=""></button>
                </div>
            </div>
        </div>
    </div>
</section>
