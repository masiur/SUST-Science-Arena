<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           $events = Event::all() ;
           
           return view('admin.event.list')
                ->with('title', 'List of All Events')
                ->with('eventCounter', 1)
                ->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('admin.event.create')
                ->with('title', 'Add a Event');

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

                    

              $event = new Event();

              $event->name =    Input::get('name');
              $event->date =    Input::get('date');
              $event->description = Input::get('details');
              $event->place =    Input::get('place');

             $event->save();

             return redirect()->route('event.index')->with('success', 'Event Added Successfuly.');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         
         $event = Event::all();
         
         return view('user.event')->with('event' , $event)->with('title' , "Event");


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.event.edit')
                        ->with('title', 'Edit Event')
                        ->with('event', $event);
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
         try{
            Event::destroy($id);

            return redirect()->route('event.index')->with('success','Event Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('event.index')->with('error','Something went wrong.Try Again.');
        }
    }
}
