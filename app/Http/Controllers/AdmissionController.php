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
use Illuminate\Support\Facades\Redirect;


class AdmissionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct(){
      //  
        if(Session::get('login') != 1){
            Redirect::to('/')->send();
        }
    }
    
    public function addstudent(){
        if(Session::get('login') == 1){
            $result['class'] = DB::select('CALL usp_GetClass()');
            return view('addstudent',$result);
        }
        else{
            return redirect('/');
        }
    }
    
    public function allstudents(){
        return view('allstudents');
    }
    
    public function updatestudent(){
        var_dump(Session::get('login'));
        return view('updatestudent');
    }
    
    public function admitstudent(Request $request){
        if(Session::get('login') == 1){
            $this->validate($request,[
            'name'=>'required | regex:/^[\pL\s\-]+$/u',
            'mother_name'=>'required |regex:/^[\pL\s\-]+$/u',
            'father_name' => 'required | regex:/^[\pL\s\-]+$/u',
            'class' => 'required',
            'gender' => 'required',
            'father_contact' => 'required | numeric | digits:10',
        ]);
            var_dump(Session::get('u_id'));die;
            $result['admitstudent'] = DB::statement('CALL usp_RegisterStudent(?,?,?,?,?,?,?,?,?)');
            
        }
        else{
            return redirect('/');
        }
    }
}
?>