@props(['digit'])
<div class="w-1/4">
    <div class="flex justify-center items-center border-2 border-black p-3 aspect-square">
        <span class="font-bold text-5xl" x-text="{{ $digit }}">0</span>
    </div>
    <div>{{ $slot }}</div>
</div>
