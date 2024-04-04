<section x-data="playlist" @add="add" @play-video="play" class="stream-section">
    <div x-data="carousel" class="relative">
        <div x-ref="swiper" class="swiper">
            <div class="swiper-wrapper">
                @foreach($streams as $index => $stream)
                    <div class="swiper-slide">
                        <div class="w-full aspect-video" x-data="video({id: '{{ $stream['youtube_id'] }}'})">
                            <div x-ref="player"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="overflow-hidden lg:overflow-visible lg:absolute lg:left-12 lg:bottom-12 lg:w-2/4 pt-[165px] lg:pt-0">
            <div x-ref="pagination" @resize.window="update" class="stream__pagination">
                <img x-ref="cursor" class="stream__cursor" src="https://placehold.co/120x160.png" alt="">
                @foreach($streams as $index => $stream)
                    <div @click="slideTo({{ $index }})" class="cursor-pointer">
                        <div class="stream__city bg-{{ $stream['color'] }}"></div>
                        <div>{{ $stream['name'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
