<?php

namespace App\Livewire;

use App\Enums\PostCity;
use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public string $city = 'all';

    public int $perPage = 12;

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::distinct()
                ->active()
                ->city($this->city)
                ->latest('published_at')
                ->paginate($this->perPage)
        ]);
    }

    public function loadMore(): void
    {
        $this->perPage += 12;
    }

    #[On('update-posts')]
    public function updatePosts(string $city)
    {
        $this->city = $city;
        $this->perPage = 12;
    }
}
