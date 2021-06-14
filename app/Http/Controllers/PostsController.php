<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!\Auth::user()->hasRole('admin') && !\Auth::user()->hasRole('editor')){
            $posts = Post::where('userId', \Auth::user()->id)->orderBy('id', 'desc')
            ->get();
        }else{
            $posts = Post::orderBy('id', 'desc')->get();
        }


        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Post::class);
        //llamar a la vista de crear post admin.post.create
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validación de formulario
        $data = request()->validate([
            'title' => 'required|max:255',
            'categoria' => 'required',
            'image' => 'required|image',
            'post_content' => 'required',
        ]);

        //recoger la imagen del formulario
        $fileNameWhithTheExtension = request('image')->getClientOriginalName();

        //recoger el nombre del archivo
        $fileName = pathinfo($fileNameWhithTheExtension, PATHINFO_FILENAME);

        //recoger la extensión del archivo
        $extension = request('image')->getClientOriginalExtension();

        //crear nombre nuevo para el archivo
        $newFileName = $fileName . '_' . time() . '.' . $extension;

        //guardar la imagen en carpeta publica
        $path = request('image')->storeAs('public/images/posts_images', $newFileName);

        // dd($fileName);

        $user = auth()->user();
        $post = new Post();

        $post->titulo = request('title');
        $post->categoria = request('categoria');
        $post->image_url = $newFileName;
        $post->contenido = request('post_content');
        $post->userId = $user->id;

        $post->save();

        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Post $post)
    {
        if (\Request::ajax()){

            $post = Post::find($request['task']['id']);
            $post->publicado = $request['task']['checked'];
            $post->save();

            return $request;
        }

        return view('admin.posts.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('edit', $post);

        $post = Post::find($post->id);

        return view('admin/posts/edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

         //validación de formulario
         $data = request()->validate([
            'title' => 'required|max:255',
            'categoria' => 'required',
            'image' => 'required|image',
            'post_content' => 'required',
        ]);

        //recoger la imagen del formulario
        $fileNameWhithTheExtension = request('image')->getClientOriginalName();

        //recoger el nombre del archivo
        $fileName = pathinfo($fileNameWhithTheExtension, PATHINFO_FILENAME);

        //recoger la extensión del archivo
        $extension = request('image')->getClientOriginalExtension();

        //crear nombre nuevo para el archivo
        $newFileName = $fileName . '_' . time() . '.' . $extension;

        //guardar la imagen en carpeta publica
        $path = request('image')->storeAs('public/images/posts_images', $newFileName);

        // dd($fileName);

        $post = Post::findOrFail($post->id);

        $post->titulo = request('title');
        $post->categoria = request('categoria');
        $post->image_url = $newFileName;
        $post->contenido = request('post_content');

        $post->save();

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Request $request)
    {
        //find the post
        $post = Post::find($request->post_id);
        
        $this->authorize('delete', $post);

        $oldImage = public_path() . '/storage/images/posts_images/'. $post->image_url;

        if(file_exists($oldImage)){
            //delete the image
            unlink($oldImage);
        }

        //delete the post
        $post->delete();

        //redirect to posts
        return redirect('/posts');
    }
}
