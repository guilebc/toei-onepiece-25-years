<div x-data="{show: false}" class="relative inline-block">
    <button @click="show = !show" @click.outside="show = false" type="button" class="text-white flex items-center px-3 uppercase rounded-full border border-white">{{ $currentLocale }}</button>
    <ul x-cloak x-transition.opacity x-show="show" class="text-lg text-right w-32 absolute right-0 bg-white rounded p-3">
        @foreach($supportedLocales as $key => $locale)
            <li><a class="transition-colors hover:text-primary" href="{{ LaravelLocalization::getLocalizedUrl($key) }}">{{ $locale['native'] }}</a></li>
        @endforeach
    </ul>
</div>
