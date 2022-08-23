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
use App\Models\CommitteeMember as Committee;

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
        $eventPhotos =  Event::orderby('id' , 'desc')->take(2)->lists('img_url');
        // $img_url = $img['img_url'];
        // return $slider1 = $eventPhotos[0];
         $currentPresidentGs = Committee::orderBy('year', 'DESC')
                                        ->orderBy('rank', 'ASC')
                                        ->get()
                                        ->take(2);
        
        return view('index')->with('title', 'Home')
                            ->with('events' , $events)
                            ->with('currentPresidentGs' , $currentPresidentGs)
                            ->with('eventPhotos' , $eventPhotos);
    }

    public function committee(Request $request)
    {
        $yearRequest = $request->year ?? null;
        $years = Committee::orderBy('year','DESC')->select('year')->distinct()->get();

        if (!(isset($yearRequest))) {
            $yearRequest = Committee::orderBy('year','DESC')->select('year')->where('status', 'ACTIVE')->first();

            if (!(isset($yearRequest))) {
                $yearRequest['year'] = '';
            }

            // $presidentSecretary = Committee::whereIn('designation', ['PRESIDENT', 'GENERAL SECRETARY'])
            //     ->where('year', $yearRequest['year'])
            //     ->get();
            
            $members = Committee::where('year', $yearRequest['year'])
                ->orderBy('rank', 'ASC')
                ->get();

            
            return view('committee')
                // ->with('presidentSecretary', $presidentSecretary)
                ->with('members', $members)
                ->with('years', $years)
                ->with('yearRequest', $yearRequest['year'])
                ->with('title', "Executive Committee");
        } else {
//            $committee = Committee::where('year', $yearRequest)->get();
            // $presidentSecretary = Committee::whereIn('designation', ['PRESIDENT', 'GENERAL SECRETARY'])
            //     ->where('year', $yearRequest)
            //     ->get();
            
            $members = Committee::where('year', $yearRequest)
                ->orderBy('rank', 'ASC')
                ->get();

            return view('committee')
                // ->with('presidentSecretary', $presidentSecretary)
                ->with('members', $members)
                ->with('years', $years)
                ->with('yearRequest', $yearRequest)
                ->with('title', "Executive Committee");
        }
    }

    public function about()
    {   
        return view('about')->with('title', 'About Us'); 
    }
    public function advisors()
    {   
        return view('advisors')->with('title', 'Respected Advisors');
    }
    public function generalMembers()
    {   
        return view('generalmembers')->with('title', 'General Members'); 
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

    public function event()
    {
        $events = Event::paginate(10);
         
         return view('event')->with('events' , $events)->with('title' , "Events");
    }

    public function eventSingle($id)
    {
        $event = Event::findOrFail($id);
        $pageTitle = str_limit($event->name, 20).' || Event';

            

            return view('eventSingle')
                        ->with('title', $pageTitle)
                        ->with('event', $event);
    }

    public function credit()
    {
       return view('credit')->with('title' , "Gratitude and Thanks");
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

}
