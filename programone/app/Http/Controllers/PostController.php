<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\CreatePostRequest;
use App\Post;
use App\Http\Requests;
use App\Http\Requests\CreatePostRequest as RequestsCreatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::latest()->get();
        // $posts = Post::orderBy('id', 'asc')->get();
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsCreatePostRequest $request)
    {
        // return $request->get('title');

        // Post::create($request->all());
        // return redirect('/posts');

        // $file = $request->file('file');
        // echo"<br>";
        // echo $file->getClientOriginalName();
        // echo"<br>";
        // echo $file->getSize();


        $input = $request->all();
        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $input['path'] = $name;


        };
        Post::create($input);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
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
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts');
    }

    public function contact(){
        $people = ['Paul', 'Carlos', 'Autumn', 'Maria', 'Jose'];
        return view('contact', compact('people'));
    }

    public function show_post($id){
        // return view('post')->with('id', $id);
        return view('post', compact('id'));
    }
}
