<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(Request $request){
        return view('login.index');
        
    }

    public function verify(Request $request){
        
        $uid = $request->userid;
        $password = $request->input('password');
        $type = $request->input('type');
     
        
         $user = DB::table('users')
                    ->where('id', $uid)
                    ->where('password',$password)
                     ->where('Type','Admin')
                    ->first();
         $user2 = DB::table('users')
                    ->where('id', $uid)
                    ->where('password',$password)
                     ->where('Type','Student')
                    ->first();

        $user3= DB::table('users')
                    ->where('id', $uid)
                    ->where('password',$password)
                     ->where('Type','Teacher')
                    ->first();


    
          if($user != null){

             $request->session()->put('logged', $user);
             $request->session()->put('id', $uid);
             //$data= session(['id' => $uid]);
            
             return redirect()->route('home.index');
             //return view('home.profile')->with('data', $data);
            }
            else if($user2 != null){

             $request->session()->put('logged', $user2);
             $request->session()->put('id', $uid);
             return redirect()->route('studenthome.index');
             //return view('home.profile')->with('data', $data);
            }

            else if($user3 != null){

             $request->session()->put('logged', $user3);
             $request->session()->put('id', $uid);
             return redirect()->route('teacherhome.index');
             //return view('home.profile')->with('data', $data);
            }

            else{
            
            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('login.index');
        }
   }

}
