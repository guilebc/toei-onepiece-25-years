<?php

namespace App\Services\Azure;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ContentSafety implements ContentSafetyInterface
{
    const API_VERSION = '2023-10-01';

    const ENDPOINT = '/contentsafety/image:analyze';

    const HATE_CATEGORY = 'Hate';
    const SELF_HARM_CATEGORY = 'SelfHarm';
    const SEXUAL_CATEGORY = 'Sexual';
    const VIOLENCE_CATEGORY = 'Violence';

    const CATEGORIES = [
        self::HATE_CATEGORY,
        self::SELF_HARM_CATEGORY,
        self::SEXUAL_CATEGORY,
        self::VIOLENCE_CATEGORY,
    ];

    private function request()
    {
        return Http::withHeaders([
            'Ocp-Apim-Subscription-Key' => config('services.azure.contentsafety.key'),
        ])->baseUrl(config('services.azure.contentsafety.endpoint'));
    }

    /**
     * Analyzes the image to determine whether or not it conforms.
     *
     * @param $image
     * @return bool
     */
    public function imageAnalyze($image): bool
    {
        $response = $this->request()
            ->withQueryParameters(['api-version' => self::API_VERSION])
            ->post(self::ENDPOINT, [
                'image' => [
                    'content' => Str::toBase64($image)
                ],
                'categories' => self::CATEGORIES,
                'outputType' => 'FourSeverityLevels'
            ]);

        if($response->status() === 200) {
            return $response->collect('categoriesAnalysis')
                    ->where('severity', 0)
                    ->count() === count(self::CATEGORIES);
        }

        return false;
    }
}
