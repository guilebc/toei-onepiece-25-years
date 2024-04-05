<?php

namespace App\Livewire;

use Livewire\Component;

class Filters extends Component
{
    public $section = '';

    public $posts = 'all';
    public $gallery = 'all';

    protected function queryString(): array
    {
        return [
            'posts',
            'gallery'
        ];
    }

    public function render()
    {
        switch ($this->section) {
            case 'posts': $this->dispatch('update-posts', $this->{$this->section})->to(Posts::class); break;
            case 'gallery': $this->dispatch('update-gallery', $this->{$this->section})->to(Gallery::class); break;
        }

        return view('livewire.filters');
    }
}
