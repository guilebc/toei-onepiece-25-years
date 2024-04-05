@extends('layouts.app')

@section('content')

    {{--@if(steps('countdown') || steps('end'))
        <div class="relative">
            <x-navbar class="absolute w-full inset-x-0 z-10"/>
            <x-hero-section/>
        </div>
        @if(steps('end'))
            <x-gallery-section/>
            <x-bestof-section/>
            <x-posts-section/>
        @endif
    @elseif(steps('event'))
        <div class="relative">
            <x-navbar class="relative lg:absolute lg:w-full lg:inset-x-0 z-10"/>
            <x-stream-section/>
        </div>
    @endif

    @if(steps('countdown'))
        <x-countdown-section/>
    @elseif(steps('event'))
        <x-posts-section/>
    @endif--}}

    <div class="relative">
        <x-navbar class="absolute w-full inset-x-0 z-10"/>
        <x-hero-section/>
    </div>

    <div class="relative">
        <x-navbar class="relative lg:absolute lg:w-full lg:inset-x-0 z-10"/>
        <x-stream-section/>
    </div>

    <x-gallery-section/>
    <x-bestof-section/>
    <x-countdown-section/>
    <x-posts-section/>
    <x-explain-section/>
    <x-partner-section/>
    <x-footer/>

    @if(steps('event'))
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
