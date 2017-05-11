<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\CommitteeMember;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add()
    {
        return view('admin.member.add')
        ->with('title' , 'Add an Executive Member');
    }

    public function committee_member_list()
    {
        // this is frontend view

        $members = CommitteeMember::all();

        
         return view('committee_member_list')
                ->with('title', 'Executive Members')
                ->with('memberCounter', 1)
                ->with('members', $members);
        
    }


    public function list()
    {
        
        $members = CommitteeMember::orderBy('rank', 'asc')->get();
        return view('admin.member.list')
                ->with('title', 'List of Committee Member')
                ->with('memberCounter', 1)
                ->with('members', $members);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
              // 'contact' => 'required',
              'designation' => 'required',
              'info' => 'required',
              'rank'  => 'required',
              // 'img_url' => 'required',
            ];

       $data = $request->all();

       $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $img_url = 'img/propic.png';

        if($request->hasFile('image')) {
            $file = $request->file('image');

            $destination = public_path().'/uploads/members/';
            $filename = time().'member.'.$file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $img_url = '/uploads/members/'.$filename;
        } 
        //else {
        //     return redirect()->back()->withInput()->withErrors('Image Required');
        // }
        $member = new CommitteeMember();
        $member->name = $data['name'];
        $member->designation = $data['designation'];
        $member->contact = $data['contact'];
        $member->info = $data['info'];
        $member->rank = (int)$data['rank'];
        $member->photo = $img_url;

         if($member->save()) {
            return redirect()->route('member.list')->with('success' , 'Member Added Successfully');
        } else {
            return redirect()->route('member.add')->with('error','Something went wrong');
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
        $member= CommitteeMember::find($id);
        return view('admin.member.edit')
                        ->with('title', 'Edit Member data')
                        ->with('member', $member);
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
              'name'   => 'required',
              'contact' => 'required',
              'designation' => 'required',
              'info' => 'required',
              'rank'  => 'required',
              // 'img_url' => 'required',
            ];



       $data = $request->all();

       $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }



        $member = CommitteeMember::find($id);

        $member->name = $data['name'];
        $member->designation = $data['designation'];
        $member->contact = $data['contact'];
        $member->info = $data['info'];
        $member->rank = (int)$data['rank'];

        $member->save();

         if($member->save()) {
            return redirect()->route('member.list')->with('success' , 'Member Data Updated Successfully');
        } else {
            return redirect()->route('member.add')->with('error','Something went wrong');
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
            CommitteeMember::destroy($id);

            return redirect()->route('member.list')->with('success','Member Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('member.list')->with('error','Something went wrong.Try Again.');
        }
    }
}



 // check user is enabled to login start 
 //                if (User::where('email', $allInput['email'])->orWhere('username', $allInput['email'])->pluck('activation_status') == 0) {
 //                    return redirect()->route('login') // send him/her back to login page
 //                            ->withInput()
 //                            ->withErrors('Your Account is disabled. Please Contact Support');
 //                }
 //                // check user is enabled to login end