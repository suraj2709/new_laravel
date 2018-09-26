<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Session;


class LoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function login(Request $request){
        //dd($request);
        Session::forget('login');
        $username = $request->username;
        $password = $request->password;
        
        $result['login'] = DB::select('Call usp_GetLoginDetails(?,?)',array($username,$password ));
        if(COUNT($result['login']) == 1){
            Session::put('login','1');
            return redirect('homepage');
            
        }
        else{
            
            return view('welcome',['error'=>'Invalid Username or Password']);
        }
    }
    
    public function home(){
        if(Session::get('login') == 1){
            return view('homepage');
        }else{
            return redirect('/');
        }
    }
    
    public function dashboard(){
        if(Session::get('login') == 1){
            return view('dashboard');
        }else{
            return redirect('/');
        }
    }
}
