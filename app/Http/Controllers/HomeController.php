<?php

namespace App\Http\Controllers;
use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index(Request $request){

    	return view('home.index');
    }

     public function create(){

        return view('home.create');
    }

    public function store(UserRequest $request){

       
        $user = new User();
        $user->First_Name=$request->First_Name;
        $user->Last_Name=$request->Last_Name;
        $user->username=$request->username;
        $user->Gender=$request->Gender;
        $user->Blood_Group=$request->Blood_Group;
        $user->DOB=$request->DOB;
        $user->Phone=$request->Phone;
        $user->password=$request->password;
        $user->Confirm_Password=$request->Confirm_Password;
        $user->Address=$request->Address;
        $user->Type=$request->Type;
        $file =$request->file('image');   
        date_default_timezone_set("Asia/Dhaka");
        $file2=$file->storeAs(
        'uploads',"".date("h-m-s").".".$file->getClientOriginalExtension());
        $file->move('uploads/',$file2); 
        $user->image=$file2;
        $user->save();
        return redirect()->route('home.show');
    }


    public function show(){
        $users = DB::table('users')->get();
        return view('home.show')->with('users', $users);
    }
     public function edit($id){

        $user = User::find($id);
        return view('home.edit')->with('user', $user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->First_Name=$request->First_Name;
        $user->Last_Name=$request->Last_Name;
        $user->username=$request->username;
        $user->Gender=$request->Gender;
        $user->Blood_Group=$request->Blood_Group;
        $user->DOB=$request->DOB;
        $user->Phone=$request->Phone;
        $user->password=$request->password;
        $user->Confirm_Password=$request->Confirm_Password;
        $user->Address=$request->Address;
        $user->Type=$request->Type;
        $user->save();
        return redirect()->route('home.show');
    }
    public function delete(Request $request, $id){

         $user = User::find($id);
        return view('home.delete')->with('user', $user);
    }

    public function destroy(Request $request, $id){

        User::destroy($request->id);
        return redirect()->route('home.show');
    }
   public function profile($id){

        $user = User::find($id);
       // echo $user;
       // print_r($user);
        return view('home.profile')->with('user', $user);
                                   
    }

   public function profilechange(Request $request)
    { $user = User::find($request->id);
     // $file =$request->file('image');  
    // echo $user;

    $file =$request->file('image');   
    date_default_timezone_set("Asia/Dhaka");
    $file2=$file->storeAs(
    'uploads',"".date("h-m-s").".".$file->getClientOriginalExtension());
    $file->move('uploads/',$file2); 
    $user->image=$file2;
    $user->save();
       return view('home.profile')->with('user', $user);
    }

      public function mySearch(Request $request)
    {
        if($request->has('search')){
            $users = User::search($request->get('search'))->get();  
        }else{
            $users = User::get();
        }


        return view('home.my-search', compact('users'));
    }
      public function uploadfile(Request $request)
    {
         return view('home.fileupload');
    }


    public function downfunc(){
      $employee =Employee::find(8);
     //$employee = Employee::find(8);
     // $employee = DB::table('employees')
     //                ->where('id', 8)
     //                ->first();
    return view('home.viewfile',compact('employee'));

   
       
    }
}

    
    

    


