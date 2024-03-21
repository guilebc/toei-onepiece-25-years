<?php

namespace App\Services\Smartproxy\SocialMedia;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class Instagram extends Base implements InstagramInterface
{
    /**
     * https://help.smartproxy.com/docs/instagram#instagram-graphql-hashtags
     */
    const HASHTAGS = 'instagram_graphql_hashtags';

    /**
     * @see https://help.smartproxy.com/docs/instagram#instagram-graphql-hashtag
     */
    const HASHTAG = 'instagram_graphql_hashtag';

    private function request()
    {
        return Http::withToken(config('services.smartproxy.socialmedia.token'), 'Basic');
    }

    /**
     *
     *
     * @param string $query
     * @param int $count
     * @param string|null $geo
     * @param string|null $locale
     * @return Collection
     */
    public function hashtags(string $query, int $count = 25, string $geo = null, string $locale = null)
    {
        $data = [
            'target' => self::HASHTAGS,
            'query' => $query,
            'count' => min($count, 50)
        ];

        if(Countries::hasCountry($geo)) {
            $data['geo'] = $geo;
        }

        if($locale) {
            $data['locale'] = $locale;
        }

        $response = $this->request()
            ->withQueryParameters([self::HASHTAGS => ''])
            ->post(self::ENDPOINT, $data);

        if($response->successful()) {
            return $response->collect('results.0.content.data.hashtag.edge_hashtag_to_media.edges');
        }

        return collect();
    }
}
