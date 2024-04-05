<?php

namespace App\Livewire;

use App\Enums\PostCity;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Component;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class Gallery extends Component
{
    public $gallery = 'all';

    public function render()
    {
        $finder = new Finder();
        $images = collect($finder->in(storage_path('app/images/cities'))->files());

        if(PostCity::tryFrom($this->gallery)) {
            $images = $images->filter(fn($image) => Str::contains($image->getRelativePathname(), $this->gallery));
        }

        $images->transform(function(SplFileInfo $image) {
            $image->url = asset(sprintf('images/cities/%s', $image->getRelativePathname()));
            return $image;
        });

        return view('livewire.gallery', compact('images'));
    }

    #[On('update-gallery')]
    public function updateGallery($gallery): void
    {
        $this->gallery = $gallery;
    }
}
