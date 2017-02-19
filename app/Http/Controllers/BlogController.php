<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Validation;
use Input;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myblog()
    {
        $blogs = Blog::all();
        return view('blog.myblog')
                        ->with('title', 'Article written by Me')
                        ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');
        return view('blog.create')
                ->with('title', 'Write an Article')
                ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required'
            ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $category = new Category();
        $category->name = $data['name'];
        if($category->save()) {
            return redirect()->route('category.index')->with('success','Category Successfully Added');
        } else {
            return redirect()->route('category.index')->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit')
                        ->with('title', 'Edit Categories')
                        ->with('category', $category);
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
        $rules = [
            'name' => 'required'
            ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $category = Category::findOrFail($id);
        $category->name = $data['name'];
        if($category->save()) {
            return redirect()->route('category.index')->with('success','Category Successfully Updated');
        } else {
            return redirect()->route('category.index')->with('error','Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Category::destroy($id);

            return redirect()->route('category.index')->with('success','Category Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('category.index')->with('error','Something went wrong.Try Again.');
        }
    }
}
