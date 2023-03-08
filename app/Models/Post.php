<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

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
        'comments_count'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
