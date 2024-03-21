<?php

namespace App\Models;

use App\Enums\PostCity;
use App\Enums\PostType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'city',
        'type',
        'flockler_id',
        'image_url',
        'attachment',
        'published_at'
    ];

    use SoftDeletes;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'type' => PostType::class,
        'city' => PostCity::class,
        'published_at' => 'datetime'
    ];

    public function scopeLast(Builder $query): void
    {
        $query->orderBy('published_at', 'desc');
    }
}
