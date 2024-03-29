<section class="stream-section">
    <div x-data="carousel" class="relative">
        <div x-ref="swiper" class="swiper">
            <div class="swiper-wrapper">
                @foreach($streams as $stream)
                    <div class="swiper-slide">
                        <video class="w-full aspect-video" src="{{ $stream['stream_url'] }}" autoplay loop playsinline muted preload="metadata" controlslist="nodownload">
                            <source src="{{ $stream['stream_url'] }}" type="video/mp4">
                        </video>
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
