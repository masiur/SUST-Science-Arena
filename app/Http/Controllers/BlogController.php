<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
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
        $blogs = Blog::orderBy('id', 'desc')->where('user_id', auth()->user()->id)->get();
        $categories = Category::all();
        return view('blog.myblog')
                        ->with('title', 'Article written by Me')
                        ->with('blogs', $blogs)
                        ->with('categories', $categories);
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
    public function store(BlogRequest $request)
    {
       
        $data = $request->all();
        $blog = new Blog();
        $blog->title = $data['title'];
        $blog->category_id = $data['category_id'];
        $blog->details = $data['details'];
        $blog->user_id = auth()->user()->id;
        // $blog->published = 'no'; // for admin approval status is by default no
        $blog->cover_img = null;
        $blog->tags =  $data['tags'];
        if($blog->save()) {
            return redirect()->route('blog.myblog')->with('success','Article Created Successfully');
        } else {
            return redirect()->route('blog.myblog')->with('error','Something went wrong.Please, try again');
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
