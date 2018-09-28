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


class AdmissionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function addstudent(){
        if(Session::get('login') == 1){
            return view('addstudent');
        }
        else{
            return redirect('/');
        }
    }
    
    public function allstudents(){
        return view('allstudents');
    }
    
    public function updatestudent(){
        return view('updatestudent');
    }
    
    public function admitstudent(Request $request){
        if(Session::get('login') == 1){
            dd($request);        }
        else{
            return redirect('/');
        }
    }
}
?>