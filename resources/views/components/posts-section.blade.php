<section class="posts-section">
    <div class="max-w-7xl mx-auto py-12">
        <div class="text-center px-3 mb-16">
            <h1 class="font-display text-5xl uppercase mb-3">{{ trans('app.luffyBirthdayComingUp') }}</h1>
            <p class="font-display text-3xl uppercase">{!! nl2br(preg_replace('/#(\w+)/', '<span class="text-primary">$0</span>', trans('app.shareYouPictureText'))) !!}</p>
        </div>
        <div class="px-3 lg:px-0">
            <livewire:filters/>
            <livewire:posts/>
        </div>
    </div>
</section>
