<div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 mb-6">
        @foreach($images as $index => $image)
            <div class="aspect-square" data-aos="fade" data-aos-delay="{{ mt_rand(1, 3) * 100 }}">
                <img class="w-full h-full object-cover" src="{{ $image->url }}" alt="">
            </div>
        @endforeach
    </div>
</div>
