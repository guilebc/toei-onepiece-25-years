<section class="gallery-section">
    <div class="max-w-7xl mx-auto py-12">
        <div class="text-center px-3 mb-16">
            <h1 class="font-display text-5xl uppercase mb-3">{{ trans('app.galleryTitle') }}</h1>
            <p class="font-display text-3xl uppercase">{{ trans('app.galleryText') }}</p>
        </div>
        <div class="px-3 lg:px-0">
            <livewire:filters section="gallery"/>
            <livewire:gallery/>
        </div>
    </div>
</section>
