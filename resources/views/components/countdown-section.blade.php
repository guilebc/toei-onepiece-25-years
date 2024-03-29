<section class="countdown-section">
    <div class="max-w-7xl mx-auto py-12">
        <div class="text-center mb-6">
            <h1 class="font-display text-5xl uppercase">{{ trans('app.luffyBirthdayComingUp') }}</h1>
            <p class="font-display text-2xl uppercase">{{ trans('app.beReady') }}</p>
        </div>
        <div x-data="countdown" class="font-display uppercase w-10/12 lg:w-4/12 flex justify-center text-center gap-3 mx-auto">
            <x-countdown-digit digit="days">{{ trans('app.days') }}</x-countdown-digit>
            <x-countdown-digit digit="hours">{{ trans('app.hours') }}</x-countdown-digit>
            <x-countdown-digit digit="minutes">{{ trans('app.minutes') }}</x-countdown-digit>
            <x-countdown-digit digit="seconds">{{ trans('app.seconds') }}</x-countdown-digit>
        </div>
    </div>
</section>
