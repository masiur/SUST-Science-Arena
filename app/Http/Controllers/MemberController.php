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


    public function add()
    {
        return view('admin.member.add')
        ->with('title' , 'Add an Executive Member');
    }


    public function list()
    {
        $members = CommitteeMember::orderBy('year', 'DESC')->orderBy('rank', 'asc')->get();
        return view('admin.member.list')
                ->with('title', 'List of Committee Member')
                ->with('memberCounter', 1)
                ->with('members', $members);

    }

    public function store(Request $request)
    {

        $rules = [
              'name'   => 'required',
              // 'contact' => 'required',
              'designation' => 'required',
              'year'  => 'required',
              'info' => 'required',
              'rank'  => 'required|numeric',
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

            $fileinfo= @getimagesize($file);
            $width = $fileinfo[0];
            $height = $fileinfo[1];

            if ($width > 300 || $height > 300) {
                return redirect()->back()->withInput()->with('error','Size must be equal or less than 300*300. Your size is: '.$width.'*'.$height);
            }

            $destination = public_path().'/uploads/members/';
            $filename = time().'_member.'.$file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $img_url = '/uploads/members/'.$filename;
        } 
        //else {
        //     return redirect()->back()->withInput()->withErrors('Image Required');
        // }
        $member = new CommitteeMember();
        $member->year = $data['year'];
        $member->name = $data['name'];
        $member->designation = $data['designation'];
        $member->contact = $data['contact'];
        $member->info = $data['info'];
        $member->rank = (int)$data['rank'];
        $member->nth_of_committee = $data['nth_of_committee'] == 0 ? null : (int)$data['nth_of_committee'];
        $member->photo = $img_url;

         if($member->save()) {
            return redirect()->route('member.list')->with('success' , 'Member Added Successfully');
        } else {
            return redirect()->route('member.add')->with('error','Something went wrong');
        }

    }


    public function edit($id)
    {
        $member= CommitteeMember::find($id);
        $status = ['ACTIVE' => 'ACTIVE', 'INACTIVE'=> 'INACTIVE'];
        return view('admin.member.edit')
                        ->with('title', 'Edit Executive Data')
                        ->with('status', $status)
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
            //   'contact' => 'required',
              'designation' => 'required',
              'info' => 'required',
              'rank'  => 'required|numeric',
              'year'  => 'required',
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

            $fileinfo= @getimagesize($file);
            $width = $fileinfo[0];
            $height = $fileinfo[1];

            if ($width > 300 || $height > 300) {
                return redirect()->back()->withInput()->with('error','Size must be equal or less than 300*300. Your size is: '.$width.'*'.$height);
            }

            $destination = public_path().'/uploads/members/';
            $filename = time().'_member.'.$file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $img_url = '/uploads/members/'.$filename;
        }

        $member = CommitteeMember::find($id);

        $member->year = $data['year'];
        $member->name = $data['name'];
        $member->designation = $data['designation'];
        $member->contact = $data['contact'];
        $member->info = $data['info'];
        $member->rank = (int)$data['rank'];
        $member->nth_of_committee = $data['nth_of_committee'] == 0 ? null : (int)$data['nth_of_committee'];
        $member->status = $data['status'];
        $member->photo = $img_url;

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

        }catch(\Exception $ex){
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