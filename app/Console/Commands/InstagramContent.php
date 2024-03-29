<?php

namespace App\Console\Commands;

use App\Enums\PostCity;
use App\Enums\PostType;
use App\Jobs\ProcessPost;
use App\Models\Post;
use App\Services\Azure\ContentSafetyInterface;
use App\Services\Flockler\ContentInterface;
use App\Services\Smartproxy\SocialMedia\Countries;
use App\Services\Smartproxy\SocialMedia\InstagramInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class InstagramContent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:instagram-content';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save instagram posts from Flockler API.';

    /**
     * Execute the console command.
     */
    public function handle(ContentSafetyInterface $contentSafety, ContentInterface $content)
    {
        $last = Post::latest('published_at')->first();

        $content->posts()
            ->where('flocklerId', '>', optional($last)->flockler_id ?? 0)
            ->each(function($post) {

                $tags = collect($post['tags']);
                $images = collect($post['images']);

                Post::create([
                    'type' => PostType::INSTAGRAM,
                    'city' => $tags->first(fn($tag) => PostCity::tryFrom($tag)) ?? null,
                    'flockler_id' => $post['flocklerId'],
                    'image_url' => $images->first()['url'],
                    'active' => true,
                    'published_at' => $post['publishedAt'],
                ]);

                $this->info($post['flocklerId']);
            });
    }
}
