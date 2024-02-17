<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'posts' => Post::published()
                ->latest('published_at')
                ->paginate(9),
        ];

        return view('home.post.index', $data);
    }
}
