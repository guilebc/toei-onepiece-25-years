<div x-data="{show: false}" class="relative">
    <button @click="show = !show" @click.outside="show = false" type="button" class="flex items-center uppercase">{{ $currentLocale }}</button>
    <ul x-cloak x-transition.opacity x-show="show" class="text-lg w-32 absolute right-0 bg-gray border border-green text-right p-3">
        @foreach($supportedLocales as $key => $locale)
            <li><a class="transition-colors hover:text-green" href="{{ LaravelLocalization::getLocalizedUrl($key) }}">{{ $locale['native'] }}</a></li>
        @endforeach
    </ul>
</div>
