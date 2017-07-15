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
use App\Contacts;

class DashboardController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
    public function dashboard()
    {
      $data=array();
      $data['user_name']=Auth::User()->name;
       return view('dashboard.dashboard',$data);
    }
    public function contact_fetchapi($id=null)
    {
      if($id==null)
      {
      return Contacts::all();
      }
      else{
      return Contacts::find($id);
      }

    }
    public function contact_saveapi()
    {
            $inputs=Input::all();
                Contacts::insert(['name'=>$inputs['name'],'email'=>$inputs['email'],'contact_number'=>$inputs['contact_number'],'created_at'=>date('Y-m-d H:i:s')]);
          return response()->json(['status'=>'success','code'=>200,'message'=>'Contact Added successfully!']);
    }
    public function contact_updateapi($id)
    {
      $inputs=Input::all();
      Contacts::where('id',$id)->update(['name'=>$inputs['name'],'email'=>$inputs['email'],'contact_number'=>$inputs['contact_number']]);
        return response()->json(['status'=>'success','code'=>200,'message'=>'Contact updated successfully!']);

    }
    public function contact_deleteapi($id)
    {
        Contacts::where('id',$id)->delete();
    return response()->json(['status'=>'success','code'=>200,'message'=>'Contact deleted successfully!']);
    }
}
