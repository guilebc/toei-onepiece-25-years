@extends('layouts.app')

@section('content')

    <section class="relative z-20">
        <x-navbar/>
    </section>

    <div class="hero-section">
        <div class="relative">
            <div class="absolute top-0 z-10 w-full">
                <x-navbar/>
            </div>
            <div class="relative">
                <div><img src="https://placehold.co/1920x860.jpg" alt=""></div>
                <div class="w-full absolute bottom-12 text-center">
                    <a data-fancybox href="https://www.youtube.com/watch?v=PwVT67T5Xt4" class="btn-primary px-8 py-3 transition-colors hover:bg-black hover:text-white">{{ trans('app.watchTrailer') }}</a>
                </div>
            </div>
        </div>
    </div>

    <x-posts-section/>
    <x-bestof-section/>
    <x-stream-section/>
    <x-countdown-section/>

    <section class="bg-neutral-200">
        <div class="max-w-7xl mx-auto">
            <div class="lg:flex lg:justify-center lg:items-center lg:gap-32">
                <div class="lg:w-4/12">
                    <div><img class="mx-auto" src="https://placehold.co/490x695.jpg" alt=""></div>
                </div>
                <div class="lg:w-5/12">
                    <div class="p-6">
                        <h1 class="font-display text-4xl uppercase mb-6">{{ trans('app.happyBirthdayLuffy') }}</h1>
                        <p class="font-bold mb-6">{{ trans('app.luffyCelebrationText1') }}</p>
                        <p class="mb-6">{{ trans('app.luffyCelebrationText2') }}</p>
                        <div class="text-center lg:text-left">
                            <a href="#" class="btn-primary px-8 py-3 transition-colors hover:bg-black hover:text-white">{{ trans('app.officialWebsite') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="partner-section">
        <div class="max-w-7xl mx-auto py-12">
            <ul class="flex flex-wrap lg:flex-nowrap justify-center gap-3 text-center">
                <li><a href="#"><img src="https://placehold.co/260x155.png" alt="Plastoy"></a></li>
                <li><a href="#"><img src="https://placehold.co/260x155.png" alt="Ultra Pop"></a></li>
                <li><a href="#"><img src="https://placehold.co/260x155.png" alt="Bandai Namco"></a></li>
                <li><a href="#"><img src="https://placehold.co/260x155.png" alt="Funko"></a></li>
                <li><a href="#"><img src="https://placehold.co/260x155.png" alt="Crunchyroll"></a></li>
            </ul>
        </div>
    </section>


    <footer class="bg-black">
        <div class="max-w-7xl mx-auto py-12">
            <div class="text-white uppercase lg:flex lg:items-center lg:gap-12">
                <div class="mb-6"><a href="#"><img class="mx-auto" src="https://placehold.co/260x155.png" alt="Toei Animation"></a></div>

                <div>
                    <div class="flex justify-center lg:justify-start items-center gap-3 mb-6">
                        <div><a href="#"><img src="https://placehold.co/30x30.png" alt="Instagram"></a></div>
                        <div><a href="#"><img src="https://placehold.co/30x30.png" alt="X"></a></div>
                        <div><a  class="hover:text-primary" href="https://www.toei-animation.com/" target="_blank">toei-animation.com</a></div>
                    </div>

                    <div class="flex flex-wrap justify-center lg:justify-start gap-3 mb-6">
                        @foreach(LaravelLocalization::getSupportedLocales() as $key => $locale)
                        <a class="hover:text-primary" href="{{ LaravelLocalization::getLocalizedUrl($key) }}">{{ $locale['native'] }}</a>
                        @endforeach
                    </div>

                    <div class="text-sm text-center lg:text-left"><a  class="hover:text-primary" href="#">{{ trans('app.legalNotice') }}</a></div>
                    <p class="text-sm text-center lg:text-left">&copy; Eiichiro Oda/Shueisha, Toei Animation</p>
                </div>
            </div>
        </div>
    </footer>

    <x-modal>
        <livewire:create-post/>
    </x-modal>

    <div class="fixed bottom-6 right-6 z-40">
        <button @click="open = !open" class="bg-primary rounded-full p-5 transition-all group hover:bg-white hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 transition-colors group-hover:text-primary">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
        </button>
    </div>

@endsection
