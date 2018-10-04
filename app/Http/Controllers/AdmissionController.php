<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Session;


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
        
        $result['allstudents'] = DB::select('CALL usp_GetAllStudents(?)',array(Session::get('c_id')));
        //var_dump($result['allstudents']);die;
        return view('allstudents',$result);
    }
    
    public function updatestudent(Request $request){
        $id = $request->r_id;
        $result['class'] = DB::select('CALL usp_GetClass()');
        $result['stu_det']=DB::select('CALL usp_GetDetailsOfStudentById(?)',array($id));
        
        return view('updatestudent',$result);
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
            $u_id = Session::get('u_id');
            $c_id = Session::get('c_id');
            $name = $request->name;
            $mother_name = $request->mother_name;
            $father_name = $request->father_name;
            $school_name = $request->school;
            $class = $request->class;
            $gender = $request->gender;
            $primary_contact = $request->primary_contact;
            $father_contact = $request->father_contact;
            $address = $request->address;
            //var_dump($u_id.$name.$mother_name.$father_name.$class.$gender.$primary_contact.$father_contact.$address);die;
            $result['admitstudent'] = DB::statement('CALL usp_RegisterStudent(?,?,?,?,?,?,?,?,?,?,?)',array($u_id,$name,$mother_name,
                    $father_name,$class,$gender,$primary_contact,$father_contact,$address,$school_name,$c_id));
            if($result['admitstudent'] == false){
                echo "May be There was an error. Please Asmit again. Redirecting to admit page";
                sleep(2);
                Redirect::to('/admitstudent')->send();
            }else{
                Redirect::to('/allstudents')->send();
            }
            
        }
        else{
            return redirect('/');
        }
    }
    
    public function deactivatestudent(Request $request){
        
        $c_id = Session::get('c_id');
        $u_id = Session::get('u_id');
        $r_id = $request->r_id;
        $result['updatestudent'] = DB::statement('CALL usp_DeactivateStudent(?,?,?)',array(Session::get('u_id'),Session::get('c_id'),$r_id));
        if($result['updatestudent'] == true){
            Redirect::to('/allstudents')->send();
        }
        else{
            echo 'error';
             Redirect::to('/allstudents')->send();
        }
    }
    
    public function updatetudentbyrollno(Request $request){
        $this->validate($request,[
            'name'=>'required | regex:/^[\pL\s\-]+$/u',
            'mother_name'=>'required |regex:/^[\pL\s\-]+$/u',
            'father_name' => 'required | regex:/^[\pL\s\-]+$/u',
            'class' => 'required',
            'gender' => 'required',
            'father_contact' => 'required | numeric | digits:10',
        ]);
        $u_id = Session::get('u_id');
        $c_id = Session::get('c_id');
        $r_id = $request->r_id;
            $name = $request->name;
            $mother_name = $request->mother_name;
            $father_name = $request->father_name;
            $class = $request->class;
            $gender = $request->gender;
            $primary_contact = $request->primary_contact;
            $father_contact = $request->father_contact;
            $address = $request->address;
            $school = $request->school;
            //var_dump($u_id.$name.$mother_name.$father_name.$class.$gender.$primary_contact.$father_contact.$address);die;
            $result['admitstudent'] = DB::statement('CALL usp_UpdateStudentById(?,?,?,?,?,?,?,?,?,?,?,?)',array($r_id,$u_id,$name,$mother_name,
                    $father_name,$class,$gender,$primary_contact,$father_contact,$address,$c_id,$school));
            if($result['admitstudent'] == false){
                echo "May be There was an error. Please Asmit again. Redirecting to admit page";
                sleep(2);
                Redirect::to('/admitstudent')->send();
            }else{
                Redirect::to('/allstudents')->send();
            }
        dd($request);
        
    }
}
?>