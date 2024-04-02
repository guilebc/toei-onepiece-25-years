@props(['digit'])
<div class="w-1/4">
    <div class="w-16 h-16 sm:w-20 sm:h-20 flex justify-center items-center border-2 border-black p-3 mx-auto">
        <span class="font-bold text-3xl sm:text-5xl" x-text="{{ $digit }}">0</span>
    </div>
    <div class="text-center">{{ $slot }}</div>
</div>
