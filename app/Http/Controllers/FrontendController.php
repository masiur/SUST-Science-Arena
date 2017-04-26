<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Event;
use Validator;
use Input;







class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('index')->with('title', 'Home')
                            ->with('events' , $events);
    }

    public function blogIndex()
    {
        $blogs = Blog::orderBy('id', 'desc')->where('published', 'yes')->paginate(15);
        $categories = Category::all();
        return view('blog')
                        ->with('title', 'Public Articles')
                        ->with('blogs', $blogs)
                        ->with('categories', $categories);
    }

    public function blogSingle($title)
    {
        $blog = Blog::where('title', str_slug($title, ' '))->first();
        $pageTitle = str_limit($blog->title, 20).' || Blog';
        $categories = Category::all();
        return view('blog.blogSingle')
                        ->with('title', $pageTitle)
                        ->with('blog', $blog)
                        ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function event()
    {
        $events = Event::paginate(10);
         
         return view('user.event')->with('events' , $events)->with('title' , "Events");
    }


    public function test()
    {
       

       $no = 'sylhetnews24_road accident.txt';
       $content =  File::get(storage_path($no));
         
        return  substr_count($content, 'www');


    }



    public function eventSingle($id)
    {
            $event = Event::findOrFail($id);
            $pageTitle = str_limit($event->name, 20).' || Event';
    
             
    
             return view('user.eventSingle')
                            ->with('title', $pageTitle)
                            ->with('event', $event);

         $event = Event::findOrFail($id);
         $pageTitle = str_limit($event->name, 20).' || Event';

         

         return view('user.eventSingle')
                        ->with('title', $pageTitle)
                        ->with('event', $event);




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
