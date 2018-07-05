<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Session;

class Login extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, AuthenticatesUsers;

    public function index(Request $request)
    {
    	
        return view('login');
        //dd($result);
    }

   

   
    public function post_login(Request $request)
    {
        
            $this->validate($request,[
                'email' => 'required',
                'password' => 'required'
                
            ]);

        $credentials=array('email' => $request->email, 'password' => $request->password);
        $result = DB::table('users')->where('email',$request->email)->where('password', md5($request->password))->first();
        //dd($result);
        if($result){
            //$request->session()->set('key', 'value');
            //$user = Auth::user();

           return redirect('/category');
        }else{
           return redirect('/')->with('error','Your username or password worng..!');
        }
        //return view('edit_category')->with('category',$result);
            

        
       
    }
    
}
