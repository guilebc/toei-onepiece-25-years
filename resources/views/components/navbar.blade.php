@props(['theme'])
<div class="relative z-50">
    <div {{ $attributes->merge(['class' => 'flex justify-between items-center max-w-7xl mx-auto px-3 py-3']) }}>
        <div><img class="max-w-[150px] lg:max-w-[190px]" src="{{ asset('assets/logo-onepiece.png') }}" alt="One Piece"></div>
        <div>
            <x-langue-selector/>
        </div>
    </div>
</div>
