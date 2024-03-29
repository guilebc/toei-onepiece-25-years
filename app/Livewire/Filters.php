<?php

namespace App\Livewire;

use App\Enums\PostCity;
use Livewire\Component;

class Filters extends Component
{
    public $city = 'all';

    protected function queryString(): array
    {
        return [
            'city',
        ];
    }

    public function render()
    {
        $this->dispatch('update-posts', city: $this->city)
            ->to(Posts::class);

        return view('livewire.filters');
    }
}
