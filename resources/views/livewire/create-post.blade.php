<div>
    <form wire:submit="save">
        <div class="mb-3">
            <select wire:model="city">
                <option value="paris">Paris</option>
                <option value="london">Londre</option>
            </select>

            @error('city')<span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <input type="file" wire:model="image">
            @error('image') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <x-turnstile/>
        </div>

        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</div>
