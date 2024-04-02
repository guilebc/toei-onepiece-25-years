<div class="hero-section">
    <div class="relative">
        <div class="absolute top-0 z-10 w-full">
            <x-navbar/>
        </div>
        <div class="relative">
            <div><img src="https://placehold.co/1920x860.jpg" alt=""></div>
            <div class="w-full absolute bottom-12 text-center">
                <a data-fancybox href="{{ config('app.trailer_url') }}" class="btn-primary px-8 py-3 transition-colors hover:bg-black hover:text-white">{{ trans('app.watchTrailer') }}</a>
            </div>
        </div>
    </div>
</div>
