<footer class="bg-black">
    <div class="max-w-7xl mx-auto py-12">
        <div class="text-white uppercase lg:flex lg:items-center lg:gap-12">
            <div class="mb-6"><a href="#"><img class="mx-auto" src="https://placehold.co/260x155.png" alt="Toei Animation"></a></div>

            <div>
                <div class="flex justify-center lg:justify-start items-center gap-3 mb-6">
                    <div><a href="#"><img src="https://placehold.co/30x30.png" alt="Instagram"></a></div>
                    <div><a href="#"><img src="https://placehold.co/30x30.png" alt="X"></a></div>
                    <div><a  class="hover:text-primary" href="https://www.toei-animation.com/" target="_blank">toei-animation.com</a></div>
                </div>

                <div class="flex flex-wrap justify-center lg:justify-start gap-3 mb-6">
                    @foreach(LaravelLocalization::getSupportedLocales() as $key => $locale)
                        <a class="hover:text-primary" href="{{ LaravelLocalization::getLocalizedUrl($key) }}">{{ $locale['native'] }}</a>
                    @endforeach
                </div>

                <div class="text-sm text-center lg:text-left"><a  class="hover:text-primary" href="#">{{ trans('app.legalNotice') }}</a></div>
                <p class="text-sm text-center lg:text-left">&copy; Eiichiro Oda/Shueisha, Toei Animation</p>
            </div>
        </div>
    </div>
</footer>
