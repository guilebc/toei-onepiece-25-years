@props(['theme'])
<div class="max-w-7xl mx-auto">
    <div class="flex justify-center sm:justify-between items-center ">
        <div class="w-3/12 sm:w-2/12"><img class="w-[165px]" src="https://placehold.co/165x180.png" alt=""></div>
        <div class="w-5/12 sm:w-8/12">
            <a href="{{ route('index') }}"><img class="mx-auto" src="https://placehold.co/355x125.jpg" alt=""></a>
        </div>
        <div class="w-3/12 sm:w-2/12">
            <div class="text-right pr-0 sm:pr-3">
                <x-langue-selector/>
            </div>
        </div>
    </div>
</div>
