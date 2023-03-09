<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
use Inertia\Inertia;
use App\Models\User;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $posts = Post::with('user')
            ->simplePaginate(10);

        $posts->getCollection()->transform(function ($post) {
            $facade = $post->viaLoveReactant();
            $likes = $facade->getReactionCounterOfType('Like')->getCount();
            $post->likes_count = $likes;
            return $post;
        });

        return Inertia::render('Dashboard', [
            'posts' => $posts,
        ]);
    }
}
