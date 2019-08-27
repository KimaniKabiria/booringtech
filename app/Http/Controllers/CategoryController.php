<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;
use App\Posts;
use App\Category;
use Session;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('studio.category.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studio.category.create');
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
            'desc'          => 'required'
        ));

        // store in the database
        $categories = new Category();

        $categories->title = $request->title;
        $categories->slug = $request->slug;
        $categories->desc = $request->desc;

        $categories->save();

        Session::flash('success', 'Well Done! A Category has been created');
        return redirect()->route('category.show', $categories->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('studio.category.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('studio.category.edit')->withCategory($category);
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
            'desc'          => 'required'
        ));

        // store in the database
        $categories = Category::findOrFail($id);

        $categories->title = $request->title;
        $categories->desc = $request->desc;

        $categories->save();

        Session::flash('success', 'Wow! You have updated your category.');
        return redirect()->route('category.show', $categories->id);
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
