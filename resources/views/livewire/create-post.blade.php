<div>
    <h1 class="font-display text-4xl lg:text-5xl text-center uppercase mb-12">{{ trans('app.uploadPhoto') }}</h1>

    @if($successed)
        <div class="text-primary text-center text-lg">{{ trans('app.successedPhoto') }}</div>
        <div class="text-center mt-6">
            <button wire:click="anotherPhoto" type="button" class="btn-primary px-8 py-3 transition-colors hover:bg-black hover:text-white">
                {{ trans('app.anotherPhoto') }}
            </button>
        </div>
    @else
        <form x-data="captcha" wire:submit="save">
            <div class="mb-6">
                @if ($image)
                    <div class="mb-3">
                        <img class="mx-auto" src="{{ $image->temporaryUrl() }}" alt="Preview"/>
                    </div>
                @endif

                <div class="text-center">
                    <input wire:model="image" id="create-image" class="hidden peer" type="file" accept="image/jpeg,image/png" capture="user">
                    <label for="create-image" class="inline-block text-2xl text-center rounded-full px-5 py-1 border-2 border-primary cursor-pointer transition-colors hover:bg-primary hover:text-white">{{ trans('app.selectPhoto') }}</label>
                </div>
                @error('image')<div class="text-red-700 text-center mt-3">{{ $message }}</div>@enderror
            </div>

            <div class="mb-6">
                <div class="font-bold text-center mb-3">{{ trans('app.chooseCity') }}</div>
                <div class="flex flex-wrap justify-center gap-3">
                    @foreach(App\Enums\PostCity::cases() as $city)
                        <div>
                            <input wire:model.live="city" class="hidden peer" id="create-{{ $city->value }}" type="radio" name="city" value="{{ $city->value }}" >
                            <label for="create-{{ $city->value }}" class="block text-center rounded-full px-5 py-1 border-2 border-{{ $city->value }} cursor-pointer transition-colors hover:bg-{{ $city->value }} hover:text-white peer-checked:bg-{{ $city->value }} peer-checked:text-white">
                                {{ $city->getLabel() }}
                            </label>
                        </div>
                    @endforeach
                </div>
                @error('city')<div class="text-red-700 text-center mt-3">{{ $message }}</div> @enderror
            </div>

            <div class="text-center">
                <x-turnstile wire:model="turnstile"/>
                @error('turnstile')<div class="text-red-700 text-center mt-3">{{ $message }}</div> @enderror
            </div>

            <div class="text-center mt-6">
                <button type="submit" class="btn-primary text-3xl px-10 py-5 transition-colors hover:bg-black hover:text-white">
                    {{ trans('app.upload') }}
                </button>
            </div>
        </form>
    @endif
</div>
