<?php

namespace App\Services\Flockler;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class Content implements ContentInterface
{
    const API_KEY_HEADER = 'X-FL-API-Key';

    /**
     * Request.
     *
     * @return \Illuminate\Http\Client\PendingRequest
     */
    public function request()
    {
        return Http::withHeaders([
            self::API_KEY_HEADER => config('services.flockler.api_key')
        ])->baseUrl(config('services.flockler.endpoint'));
    }

    /**
     * Get posts.
     *
     * @param array $params
     * @return \Illuminate\Support\Collection
     */
    public function posts(array $params = []): Collection
    {
        $params['count'] = $params['count'] ?? 100;

        // https://developers.flockler.com/api#posts
        return $this->request()
            ->withQueryParameters($params)
            ->get('posts')
            ->collect('posts');
    }
}
