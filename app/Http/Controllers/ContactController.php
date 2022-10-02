<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;


class ContactController extends Controller
{


    public function contact_page()
    {
        $someInfo = \App\Models\Info::find(1)->toArray();
        return view('contact')->with('title', 'Contact')->with('someInfo', $someInfo);
    }

    public function messagePageInAdmin()
    {
        $messages = Contact::orderBy('id', 'DESC')->get();
        return view('admin.message')->with('title', 'Messages')->with('messages', $messages);
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
           
           'name'   => 'required',
           'email' => 'required',
           'contact_no' => 'required',
           'message' => 'required',
        ];


       $data = $request->all();
        $validation = Validator::make($data , $rules);

        if($validation->fails()){

          return redirect()->back()->withInput()->withErrors($validation);

        }


        $message = new Contact();


        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->contact_no = $data['contact_no'];
        $message->message = $data['message'];

        $message->save();

        return redirect()->back()->with('success', "Your message has been sent successfully.
         We will contact you soon depending on your message.");

    }
}
