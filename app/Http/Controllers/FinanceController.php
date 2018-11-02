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

class FinanceController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct(){
      //  
        if(Session::get('login') != 1){
            Redirect::to('/')->send();
        }
    }
    
    
    public function collectfee(){
        $result['class'] = DB::select('CALL usp_GetClass()');
        return view('collectfee',$result);
    }
    
    public function collectfeebyscholar(){
        return view('collectfeebyscholar');
    }
    
    public function searchstudentbyclass(Request $request){
         $c_id = Session::get('c_id');
         $class_id = $request->class_id;
         
         $result['studentbyclass'] = DB::select('CALL usp_selectstudentbyclass(?,?)',array($class_id,$c_id));
         return view('studentbyclass',$result);
    }
}

?>