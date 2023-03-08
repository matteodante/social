<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Cog\Contracts\Love\Reactable\Models\Reactable as ReactableInterface;
use Cog\Laravel\Love\Reactable\Models\Traits\Reactable;

class Post extends Model implements ReactableInterface
{
    use HasFactory;
    use Reactable;

    protected $fillable = [
        'user_id',
        'content',
        'media_type',
        'media_url',
        'media_thumbnail_url',
        'location_lat',
        'location_lng',
        'location_name',
        'language',
        'sentiment',
        'is_pinned',
        'is_deleted',
        'is_edited',
        'is_sensitive',
        'likes_count',
        'retweets_count',
        'comments_count',
        'views_count',
        'shares_count',
        'tags',
        'mentions',
        'hashtags',
        'published_at',
        'expire_at',
        'is_featured',
        'is_promoted',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
