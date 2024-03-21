<?php

namespace App\Services\Smartproxy\SocialMedia;

use Illuminate\Support\Collection;

interface InstagramInterface
{
    /**
     * @param string $query
     * @param int $count
     * @param string|null $geo
     * @param string|null $locale
     * @return Collection
     */
    public function hashtags(string $query, int $count = 25, string $geo = null, string $locale = null);
}
