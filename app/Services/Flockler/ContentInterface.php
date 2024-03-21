<?php

namespace App\Services\Flockler;

use Illuminate\Support\Collection;

interface ContentInterface
{
    /**
     * Get posts.
     *
     * @param array $params
     * @return Collection
     */
    public function posts(array $params = []): Collection;
}
