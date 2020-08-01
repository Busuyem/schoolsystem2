<?php

namespace App\Http\Controllers;

use App\User;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{

    public function login(Request $request){

       
        return view('login');
    }

    public function postLogin(Request $request){

        $data = $this->validate($request, [

            'access' => 'required|min:6|max:6',
        ]);

       
        $access = $data['access'];

        $record = User::where('access', $access)->first();

        if($record){
            
            Session::put('access', $record);

            return redirect()->route('apply')->with('success', 'Login Successful! You can now apply.');

        }

        return back()->with('error', 'Your ACCESS CODE does not match our record');

    }


    public function apply(){

        $session = $session = Session::get('access');

        return view('apply', compact('session'));
    }

    

    public function registerStudent(Request $request, Student $student){

        $data = $this->validate($request,[

    
        'first_name' => 'required',
    
        'last_name' => 'required',
    
        'address' => 'required',
    
        'marital_status' => 'required',
    
        'education' => 'required',
    
        'subject' => 'required',
    
        'religion' => 'required',
    
        'state' => 'required',
    
        'birthdate' => 'required',
    
        'image' => 'required|image|file|max:1999|mimes:jpg,png,jpeg'
    
         ]);

         if(request()->hasFile('image')){

            $data['image'] = request()->image->getClientOriginalName();

            $data['image'] = request()->image->store('images', 'public');

        }

        $session = $session = Session::get('access');

        $data['access'] = $session->access;
      
        $student = $student->create($data);


         if($student){

            if($session->access == $student->access){

                return redirect()->route('confirm', $student->id);

            }

       }

            return view('error');

        }


        public function confirm(Student $student){
            
            return view('confirm', compact('student'));

        }


        public function status(Student $student){

            return view('status', compact('student'));

        }

        
        public function detail(Student $student){

            return view('detail', compact('student'));
            
        }


        public function recover(){

            return view('recover');
        }



        public function recoverCheck(Request $request){

            $data = $this->validate($request, [

                'access' => 'required|min:6|max:6',
            ]);
    
           
            $access = $data['access'];
    
            $record = User::where('access', $access)->first();
            
            $student = Student::where('access', $access)->first();

            $session = $session = Session::get('access');
    
            if($session){
                
    
                return redirect()->route('recover.get', $record->id)->with('success', 'Welcome back! You can now print your application status and application details respectively.');
    
            }else
    
                return back()->with('error', 'Your ACCESS CODE does not match our record');

        }

        public function getConfirm(Student $student){

            return view('confirm', compact('student'));
        }



}
