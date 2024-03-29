<div class="grid grid-cols-3 lg:grid-cols-6 gap-3 mb-12">
    <div>
        <input wire:model.live="city" class="hidden peer" id="city-all" type="radio" name="city" value="all" >
        <label for="city-all" class="block text-xl text-center uppercase rounded-full px-5 py-3 border-2 border-black transition-colors hover:bg-black hover:text-white peer-checked:bg-black peer-checked:text-white">
            {{ trans('app.all') }}
        </label>
    </div>

    @foreach(App\Enums\PostCity::cases() as $city)
        <div>
            <input wire:model.live="city" class="hidden peer" id="city-{{ $city->value }}" type="radio" name="city" value="{{ $city->value }}" >
            <label for="city-{{ $city->value }}" class="block text-xl text-center uppercase rounded-full px-5 py-3 border-2 border-{{ $city->value }} transition-colors hover:bg-{{ $city->value }} hover:text-white peer-checked:bg-{{ $city->value }} peer-checked:text-white">
                {{ $city->getLabel() }}
            </label>
        </div>
    @endforeach
</div>
