<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::where('publicado', 1)->orderBy('id', 'desc')->simplePaginate(3);

        return view('blog', ['posts' => $posts]);
    }

    //funcion para mostrar el post
    public function show($id)
    {
        $post = Post::find($id);

        return view('/show', ['post' => $post]);
    }
}
