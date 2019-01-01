<?php

namespace App\Http\Controllers;
use App\User;
use App\Assignment;
use App\Exam;
use App\Notice;
use App\Todo;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AssignmentRequest;


class TeacherHomeController extends Controller
{
    //
    public function index(Request $request){

    	return view('teacherhome.index');
    }
    public function profile($id){

        $user = User::find($id);
       // echo $user;
       // print_r($user);
      return view('teacherhome.profile')->with('user', $user);
                                   
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
       return view('teacherhome.profile')->with('user', $user);
    }
    public function notice($id){

        $user = User::find($id);
       // $notice = Notice::find($id);
        $notices  = DB::table('notices')->select('*')->where('user','=',$id)->get();
      // echo  $notices;
       // print_r($user);
      return view('teacherhome.notice')->with('user', $user)
                                       ->with('notices',$notices);
                                   
    }
     public function noticestore(Request $request,$id){

         $notices=new Notice();
         $notices->subject=$request->subject;
         $notices->notice=$request->notice;
         $notices->user=$request->id;
        //$user = User::find($request->user);
         $notices->save();
        $notice= Notice::find($id);
        Notice::destroy($id);
        return redirect()->route('teacherhome.notice',$request->id );
       
      // echo "ok"; 
                                   
    }

    public function noticedelete(Request $request, $id){

        
       $notices = Notice::find($id);
        return view('teacherhome.delete')->with('notices', $notices);                                        
                                   
    }
    public function noticedestroy(Request $request, $id){
        $notices = Notice::find($id);
        Notice::destroy($id);
        return redirect()->route('teacherhome.notice',$request->id );
       // echo ($request->id);
    }
    public function fileupload(Request $request, $id){

         $user = User::find($request->id);
         $notices = Notice::find($id);
         $files = DB::table('files')->select('*')->where('user','=',$id)->get();
         return view('teacherhome.fileupload')->with('files', $files)
                                             ->with('user',$user);                                      
                                   
    }
     public function fileuploadstore(Request $request, $id){

        $fl = new File();
        $fl->subject=$request->subject;  
        $fl->user=$request->id;  
        $file =$request->file('image');   
        date_default_timezone_set("Asia/Dhaka");
        $file3=(date("h-m-s").".".$file->getClientOriginalExtension());
        $file2=$file->storeAs(
        'files',"".date("h-m-s").".".$file->getClientOriginalExtension());
        $file->move('files/',$file2); 
        $fl->file=$file3;
        $fl->save();
        return redirect()->route('teacherhome.index',$request->id );

                                 
                                   
    }
    public function filedelete(Request $request, $id){

        
       $files = File::find($id);
        return view('teacherhome.filedelete')->with('files', $files);                                        
                                   
    }
    public function filedestroy(Request $request, $id){   
       $files = File::find($id);
        File::destroy($id);
        return redirect()->route('teacherhome.fileupload',$request->id );
       // echo ($request->id);
    }

}
