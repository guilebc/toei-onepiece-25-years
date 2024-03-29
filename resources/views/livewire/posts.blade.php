<div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 mb-6">
        @foreach($posts as $post)
            <div class="aspect-square" wire:key="{{ $post->id }}">
                <img class="w-full h-full object-cover" src="{{ $post->image_url }}" alt="">
            </div>
        @endforeach
    </div>
    <div class="text-center">
        <button wire:click="loadMore" class="btn-primary px-8 py-3 transition-colors hover:bg-black hover:text-white">{{ trans('app.showMore') }}</button>
    </div>
</div>
