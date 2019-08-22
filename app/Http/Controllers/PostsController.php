<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use LaraFlash;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::orderBy('id', 'desc')->paginate(10);
        return view('studio.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studio.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'slug'          => 'required|alpha_dash|unique:posts,slug',
            'title'         => 'required',
            'subtitle'      => 'required',
            'content'       => 'required'
        ));

        // store in the database
        $posts = new Posts();

        $posts->title = $request->title;
        $posts->subtitle = $request->subtitle;
        $posts->slug = $request->slug;
        $posts->content = $request->content;

        $posts->save();

        LaraFlash::success("Post saved Successfully!");

        return redirect()->route('posts.show', $posts->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        return view('studio.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('studio.posts.edit')->withPost($post);
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
        // validate the data
        $this->validate($request, array(
            'title'         => 'required',
            'subtitle'      => 'required',
            'content'       => 'required'
        ));

        // store in the database
        $posts = Posts::findOrFail($id);

        $posts->title = $request->title;
        $posts->subtitle = $request->subtitle;
        $posts->content = $request->content;

        $posts->save();

        LaraFlash::success("Post updated Successfully!");

        return redirect()->route('posts.show', $posts->id);
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

    public function apiCheckUnique(Request $request)
    {
        return json_encode(!Posts::where('slug', '=', $request->slug)->exists());
    }
}
