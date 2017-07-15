<?php

namespace App\Http\Controllers;
use View;
use Auth;
use Hash;
use Route;
use Redirect;
use Illuminate\Support\Facades\Input;
use App;
use DB;
use Session;
use Mail;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class RegisterController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }
    public function register()
    {
        $this->checkimlogin();
       return view('frontend.register');
    }
    public function registerapi()
    {
        $inputs=Input::all();
       $check_exists=User::where('email',$inputs['email'])->value('id');
       if($check_exists!='')
       {
         return response()->json(['status'=>'error','code'=>200,'message'=>'This email already exist '.$inputs['email']]);
       }
       else{
        User::insert(['email'=>$inputs['email'],'name'=>$inputs['name'],'password'=>bcrypt($inputs['password']),'contact_no'=>$inputs['contact_number'],'created_at'=>date('Y-m-d H:i:s')]);
        return response()->json(['status'=>'success','code'=>200,'message'=>'You have register successfully!']);
       }

    }
    public function loginapi()
    {
        $inputs=Input::all();
            $credentials = array(
                    'email' =>$inputs['email'],
                    'password' => $inputs['password']
                );

                if (Auth::attempt($credentials)) {
                  return response()->json(['status'=>'success','code'=>200,'message'=>'You have logined successfully!']);
                }
                else{
                  return response()->json(['status'=>'error','code'=>200,'message'=>'Your email or password incorrect!']);
                }
    }
    public function logout() {
        Auth::logout();
        return Redirect::to('login');
    }
        public function checkimlogin() {
        if (isset(Auth::User()->id)) {
            Redirect::to('dashboard')->send();
        }
    }
}
