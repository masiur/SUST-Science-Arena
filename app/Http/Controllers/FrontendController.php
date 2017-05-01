<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Info;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Committee_member;
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

    public function blogPublicPage()
    {
        $category = Input::get('category');
        $blogs = Blog::orderBy('id', 'desc')->where('published', 'yes')->paginate(15);
        if($category) {
            $category_id = Category::where('name', $category)->pluck('id');
            $blogs = Blog::orderBy('id', 'desc')->where('published', 'yes')->where('category_id', $category_id)->paginate(15);   
        }
        
        $categories = Category::all();
        return view('blog')
                        ->with('title', 'Public Articles')
                        ->with('blogs', $blogs)
                        ->with('categories', $categories);
    }

    public function blogSingle($title)
    {
        $blog = Blog::where('title', str_slug($title, ' '))->first();
        $pageTitle = str_limit($blog->title, 20)." || Blog";
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


   

    public function eventSingle($id)
    {
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



    public function info_edit()
    {

        $info = Info::first();

        
        return view('admin.infoEdit')
                        ->with('title', 'Update SSA Info')
                        ->with('info', $info);

    }



   public function info_update(Request $request, $id)
    {
         $rules = [
              'contact'   => 'required',
              'email' => 'required',
              'fb_link' => 'required',
              'twitter_link' => 'required',
              // 'img_url' => 'required',
            ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }


        $info = Info::findOrFail(1);
        $info->contact = $data['contact'];
        $info->fb_link =    Input::get('fb_link');
        $info->email =    Input::get('email');
        $info->twitter_link = $data['twitter_link'];
        
            
   
        if($info->save()) {
            return redirect()->route('dashboard')->with('success','Info Successfully Updated');
        } else {
            return redirect()->route('dashboard')->with('error','Something went wrong');
        }

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
