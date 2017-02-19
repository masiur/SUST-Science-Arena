<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\News;
use Input;
use Validator;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
           $news = News::all() ;
           
           return view('admin.news.list')
                ->with('title', 'List of All News')
                ->with('newsCounter', 1)
                ->with('news', $news);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('admin.news.create')
            ->with('title', 'Add a News');   
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
           
           'title'   => 'required',
           'details' => 'required',
        ];


       $data = $request->all();
        $validation = Validator::make($data , $rules);

        if($validation->fails()){

          return redirect()->back()->withInput()->withErrors($validation);

        }

           $name = str_replace(" ", "-", $data['title']);          



                $img_url = null;

                if(Input::hasFile('image')) {


                    $file = Input::file('image');

                    $destination = public_path().'/uploads/user_image/';
                    $filename = time().'_'.$name.'_'.$file->getClientOriginalExtension();
                    $file->move($destination, $filename);
                    $img_url = '/uploads/image/'.$filename;
                } else {
                    return redirect()->back()->withInput()->withErrors('Image Required');
                }

               $news = new News();

              $news->title =   $data['title'];
              $news->detail =  $data['details'];
              $news->img_url =     $img_url;

              $news->save();

             return redirect()->route('news.index')->with('success', 'News Added Successfuly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $news = News::all();

        // return $news;
         
         return view('user.news')->with('news' , $news);
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
            News::destroy($id);

            return redirect()->route('news.index')->with('success','News Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('news.index')->with('error','Something went wrong.Try Again.');
        }
    }
}
