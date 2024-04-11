@extends('layouts.app')

@section('content')
    <x-navbar theme="black"/>

    @if(steps('gallery') || steps('bestof'))
        <x-hero-section/>
    @endif

    @if(steps('before_countdown'))
        <x-hero-section/>
        <x-countdown-section/>
    @endif

    @if(steps('after_countdown') && !steps('gallery'))
        <div class="relative">
            <div class="absolute top-3 lg:top-12 inset-x-0 z-10 pointer-events-none">
                <div class="max-w-7xl mx-auto">
                    <div class="pl-3 lg:pl-0"><img class="max-w-[75px] lg:max-w-[150px]" src="{{ asset('assets/logo.png') }}" alt="TV Animation One Piece 25th"></div>
                </div>
            </div>
            <x-stream-section/>
        </div>
        <x-posts-section/>
    @endif

    @if(steps('bestof'))
        <x-bestof-section/>
    @endif

    @if(steps('gallery'))
        <x-gallery-section/>
    @endif

    <x-explain-section/>
    <x-partner-section/>
    <x-footer/>

    @if(steps('after_countdown') && !steps('gallery'))
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
    @endif
@endsection
