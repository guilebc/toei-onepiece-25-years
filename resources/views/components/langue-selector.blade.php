@aware(['theme'])
<div x-data="{show: false}" class="relative inline-block">
    <button @click="show = !show" @click.outside="show = false" type="button" class="@if($theme === 'black') text-black border-black @else text-white border-white @endif flex items-center px-3 uppercase rounded-full border-2">{{ $currentLocale }}</button>
    <ul x-cloak x-transition.opacity x-show="show" class="text-lg text-right w-32 absolute top-8 right-0 bg-white rounded-lg shadow-xl p-3">
        @foreach($supportedLocales as $key => $locale)
            <li><a class="transition-colors hover:text-primary" href="{{ LaravelLocalization::getLocalizedUrl($key) }}">{{ $locale['native'] }}</a></li>
        @endforeach
    </ul>
</div>
