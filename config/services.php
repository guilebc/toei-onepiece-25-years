<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'azure' => [
        'contentsafety' => [
            'key' => env('AZURE_CONTENT_SAFETY_KEY'),
            // https://westus.dev.cognitive.microsoft.com/docs/services/content-safety-service-2023-10-01/operations/ImageOperations_AnalyzeImage/console
            'endpoint' => env('AZURE_CONTENT_SAFETY_ENDPOINT'),
        ]
    ],

    'smartproxy' => [
        'socialmedia' => [
            'token' => env('SMARTPROXY_SOCIAL_MEDIA_TOKEN')
        ]
    ],

    'flockler' => [
        'endpoint' => env('FLOCKLER_ENDPOINT'),
        'api_key' => env('FLOCKLER_API_KEY'),
    ]
];
