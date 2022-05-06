<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Posts;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Posts::orderby('created_at', 'desc')->paginate(4);
        return view('dashboard.post.posts', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(StorePostRequest $request)
    {
        
       /* $validated = $request->validate([
            'title' => 'required | min:5 | max:500',
            'url_clean' => 'required',
            'content' => 'min:1 | max:500'
        ]);
        */
        //dd($request->title)
        Posts::create($request->validated());

        return back()->with('status', 'Post created succesfully');

      
    }
    
     public function create()
    {
        //
        return view('dashboard.post.create', 
            ['post' => new Posts()]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * ALMACENAR EN BASE DE DATOS
     * 
     * /
    
    

    
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Mostrar información sin opción a editar
    public function show($id)
    {
        return "show:".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Mostrar información con opción a editar
    public function edit(Posts $post)
    {
        //
        
        return view('dashboard.post.edit', 
        ['post' => $post]
        );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Actualizar la información
    public function update(StorePostRequest $request, Posts $post)
    {
        
        
        $post->update($request->validated());
        return back()->with('status', 'Post updated succesfully');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Se lo machetea RECIO
    public function destroy(Posts $post)
    {
        $post->delete();
        return back()->with('status', 'Post Deleted');
    }
}
