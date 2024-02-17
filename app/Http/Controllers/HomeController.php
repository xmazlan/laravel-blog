<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = [
            'featuredPosts' => Post::published()
                ->featured()
                ->take(3)->get(),
            'latestPosts' => Post::latest('published_at')
                ->take(9)->get(),
        ];

        return view('home.welcome', $data);
    }
}
