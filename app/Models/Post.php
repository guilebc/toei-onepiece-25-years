<?php

namespace App\Models;

use App\Enums\PostCity;
use App\Enums\PostType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

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
        'active',
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
        'active' => 'boolean',
        'published_at' => 'datetime'
    ];

    /**
     * @param Builder $query
     * @return void
     */
    public function scopeActive(Builder $query): void
    {
        $query->where('active', true);
    }

    public function scopeCity(Builder $query, string $city): void
    {
        if(PostCity::tryFrom($city)) {
            $query->where('city', $city);
        }
    }

    protected function attachmentUrl(): Attribute
    {
        $storage = Storage::disk('public');

        return Attribute::make(get: fn() => $this->type === PostType::APP ? asset($this->image_url) : $this->image_url);
    }
}
