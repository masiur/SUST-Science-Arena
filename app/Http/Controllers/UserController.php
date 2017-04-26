<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Input;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Profile;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users')
                ->with('title', "List of All Registered Users")
                ->with('userCounter', 1)
                ->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register')
                    ->with('title', 'Register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'fullName'              => 'required',
            'email'                 => 'required|unique:users,email',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required'
        ];

        $data = $request->all();
        //return $data;

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = new User;
            // $user->username = $data['fullName']; // will be done later 
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);


            $img_url = 'img/ssacover.jpg';

            if(Input::hasFile('image')) {
                $file = Input::file('image');

                $destination = public_path().'/uploads/user_image/';
                $filename = time().'_portfolio.'.$file->getClientOriginalExtension();
                $file->move($destination, $filename);
                $img_url = '/uploads/user_image/'.$filename;
            } else {
                return redirect()->back()->withInput()->withErrors('Image Required');
            }


            if($user->save()){

                $profile = new Profile();
                $profile->user_id = $user->id;
                $profile->fullName = $data['fullName'];
                $profile->address = $data['address'];
                $profile->phone = $data['phone'];
                $profile->bio = $data['bio'];
                $profile->occupation = $data['occupation'];
                $profile->img_url = $img_url;
                if($profile->save()) {
                    return redirect()->route('login')
                            ->with('success','Registered successfully.You can Log In Now.');
                } else {
                    User::destroy($user->id);

                }
                Auth::logout();
                
            }else{
                return redirect()->route('dashboard')
                            ->with('error',"Something went wrong.Please Try again.");
            }
        }
    }

    /**
     * Display the profile Info.
     *
     * @param  none
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
         return view('auth.profile')
                    ->with('title', 'Profile')->with('user', Auth::user());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        return view('auth.settings')
                    ->with('title', 'Profile')->with('user', Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changeUserActivationStatus($id)
    {
        $user = User::find($id);
        if($user->activation_status == 0) {
            $user->activation_status = 1;
        } else {
            $user->activation_status = 0;
        }
        $user->save();
        return redirect()->route('user.index')->with('success', "User Status Change Succesfully");
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
