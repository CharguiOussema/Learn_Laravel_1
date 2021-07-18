<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Post::all());
        return view('posts.index',[
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  //\Illuminate\Http\Request  $request
     * @return //\Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {

        $data = $request->only(['title', 'content']);
        $data['slug'] = Str::slug($data['title'],'-');
        $data['active'] = false;
        $post = Post::create($data);


        $request->session()->flash('status', 'post was created!! ');
        return redirect()->route('posts.index');
        /*
         * validation de formulaire
         * si le formulaire non valide par défaut redirect dans la méme page
         * required|min:4|max:100 => le champ est obligatoire <4  et > 100 caractaire
         * bail => si exite une seul erreur pas besoin de vérifier le rest errors
         */
      /* $validateData = $request->validate([
            'title' => 'bail|required|min:4|max:100',
            'content' => 'required'

        ]);*/
        /*
         * autre méthode pour persister les données
         */
       /* $post = new Post();
        $post->title =$request->input('title');
        $post->content = $request->input('content');

        $post->slug = Str::slug($post->title, '-');
        $post->active = false;
        $post->save();*/


        //return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return //\Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show',[

            'post' => Post::find($id)
        ]);
       // dd(Post::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return //\Illuminate\Http\Response
     */
    public function edit($id)
    {
        // findOrFail => bech kif mayl9ach id may5rejch exception  est afficher une paga NOT found
        $post = Post::findOrFail($id);
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
