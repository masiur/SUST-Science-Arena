<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Committee_member;
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
        ->with('title' , 'Add member');
    }

    public function committee_member_list()
    {
        

        $members = Committee_member::all();

        
         return view('user.committee_member_list')
                ->with('title', 'List of Committee member')
                ->with('memberCounter', 1)
                ->with('members', $members);
        
    }


    public function list()
    {
        
         $members = DB::table('Committee_member')
                ->orderBy('rank', 'asc')
                ->get();



                return view('admin.member.list')
                ->with('title', 'List of Committee member')
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



        $member = new Committee_member();

        $member->name = $data['name'];
        $member->designation = $data['designation'];
        $member->contact = $data['contact'];
        $member->info = $data['info'];
        $member->rank = (int)$data['rank'];

        $member->save();

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
        $member= Committee_member::find($id);
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



        $member = new Committee_member();

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
            Committee_member::destroy($id);

            return redirect()->route('member.list')->with('success','Member Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('member.list')->with('error','Something went wrong.Try Again.');
        }
    }
}
