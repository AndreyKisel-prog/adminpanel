<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){


        $categories_count = Category::all()->count();
        $posts_count = Post::all()->count();
        return view('admin.home.index',
        [
            'posts_count' => $posts_count,
            'categories_count' => $categories_count ,
        ]);
    }
}
