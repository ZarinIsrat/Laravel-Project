<?php


namespace App\Http\Controllers;
use App\User;
use App\Assignment;
use App\Exam;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AssignmentRequest;
use App\Http\Requests\TodoRequest;
use App\Http\Requests\ExamRequest;




class StudentHomeController extends Controller
{
    //
    public function index(Request $request){

    	return view('studenthome.index');
    }
    public function profile($id){

        $user = User::find($id);
       // echo $user;
       // print_r($user);
      return view('studenthome.profile')->with('user', $user);
                                   
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
       return view('studenthome.profile')->with('user', $user);
    }

   public function assignment($id){

        $user = User::find($id);
        $assignments = DB::table('assignments')->select('*')->where('user','=',$id)->get();
       return view('studenthome.assignment')->with('user', $user)
                                           ->with('assignments',$assignments);
                                   
    }
    public function assignmentstore(AssignmentRequest $request,$id){
         $assignments=new Assignment();
         $assignments->name=$request->work;
         $assignments->courses=$request->aCourse;
         $assignments->deadline=$request->date;
         $assignments->user=$request->id;
        //$user = User::find($request->user);
        $assignments->save();
        return redirect()-> route('studenhome.assignment', $id);   

    }

    public function exam($id){

        $user = User::find($id);
        $exams = DB::table('exams')->select('*')->where('user','=',$id)->get();
        return view('studenthome.exam')->with('user', $user)
                                           ->with('exams',$exams);
                                   
    }

    public function examstore(ExamRequest $request){

       
        $exam = new Exam();
        $exam ->course=$request->course;
        $exam  ->instructor=$request->instructor;
        $exam  ->syllabus=$request->syllabus;
        $exam  ->date=$request->date;
        $exam  ->time=$request->time;
        $exam  ->user=$request->id;
        $exam ->save();
      
      
        return redirect()-> route('studenhome.exam',$request->id );
    }
    public function todo($id){

        $user = User::find($id);
        $todos = DB::table('todos')->select('*')->where('user','=',$id)->get();
       return view('studenthome.todo')->with('user', $user)
                                           ->with('todos',$todos);
                                   
    }

    public function todostore(TodoRequest $request){

       
        $todo = new Todo();
        $todo ->name=$request->work;
        $todo ->reminder=$request->date;
        $todo ->details=$request->tDetails;
        $todo ->user=$request->id; 
        $todo ->save();
      
      
        return redirect()-> route('studenhome.todo',$request->id );
    }

    public function study($id){

        $user = User::find($id);
        $assignments = DB::table('assignments')->select('*')->where('user','=',$id)->get();
        $exams = DB::table('exams')->select('*')->where('user','=',$id)->get();
        $todos = DB::table('todos')->select('*')->where('user','=',$id)->get();
        return view('studenthome.study')->with('user', $user)
                                           ->with('exams',$exams)
                                            ->with('assignments',$assignments)
                                            ->with('todos',$todos);
                                             
                                   
    }
    public function examdelete(Request $request, $id){

        
       $exams = Exam::find($id);
        // // return view('home.delete')->with('user', $user);
        return view('studenthome.delete')->with('exams', $exams);
        //                                   ->with('user',$user);
      // echo $id;
        
                                           
                                   
    }
    public function examdestroy(Request $request, $id){
        $exams = Exam::find($id);
        Exam::destroy($id);
        return redirect()->route('studenhome.study',$request->id );
       // echo ($request->id);
    }

    public function assignmentdelete(Request $request, $id){
       //  $assignments = DB::table('assignments')->select('*')->where('ass_id','=',$id)->get();
        $assignments = Assignment::find($id);
      
       return view('studenthome.assdelete')->with('assignments',$assignments);
        //echo $assignment;
        
                                           
                                   
    }
    public function assignmentdestroy(Request $request, $id){
        $assignment = Assignment::find($id);
        Assignment::destroy($id);
        return redirect()->route('studenhome.study',$request->id );
    }


    public function assignmentuplod(Request $request, $id)
     {  
    // 	$file =$request->file('assignment');  
    // 	echo 'File Name: '.$file->getClientOriginalName();
    //      echo '<br>'; 
    //     date_default_timezone_set("Asia/Dhaka");
    //      $file2=$file->storeAs(
    //     'assignments',"".date("h-m-s").".".$file->getClientOriginalExtension());
    //     $file->move('assignments/',$file2); 
    $assignments = Assignment::find($id);
      
       return view('studenthome.assignmentuplod')->with('assignments',$assignments);
       

    }

    public function assignmentuploadstore(Request $request, $id)
     {   
    	 $file =$request->file('assignment');  
    	// echo $request->id;
         date_default_timezone_set("Asia/Dhaka");
         $file3=(date("h-m-s").".".$file->getClientOriginalExtension());
        // echo $file3;
        $file2=$file->storeAs(
        'assignments',"".date("h-m-s").".".$file->getClientOriginalExtension());
         $file->move('assignments/',$file2); 
         $assignments = Assignment::find($id);
         $assignments->assignment=$file3;
        $assignments->save();
        return redirect()->route('studenhome.study',$request->id);
      
       
       

    }
    public function assignmentdownload(Request $request,$id)
     {   
    	$assignment = Assignment::find($id);
        return view('studenthome.download',compact('assignment'));
        //$downloads=DB::table('filetable')->get();
  // return view('download.viewfile',compact('downloads'));
      
       
       

    }

 


}
