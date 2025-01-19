<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Notice;
use App\Models\Probidhan;
use App\Models\SemisterPlan;
use App\Models\ClassRoutine;
use App\Models\ExamRoutine;
use App\Models\contentmangement;
use App\Models\VideoGallery;
use App\Models\SliderGallery;
use App\Models\PhotoGallery;
use App\Models\AdminPanel;
use App\Models\resultmodel;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Syllabus;
use App\Model\JuniorStaff;
use App\Model\labdetailsModel;

use Session;

class AdminViewController extends Controller
{
    public function __construct(){
        $this->middleware('bsiadmin');
    }
    
    public function index(){
        $notice=Notice::count();
        $probidhan=Probidhan::count();
        $Staff=Staff::count();
        $Student=Student::count();
        $result=resultmodel::count();
        $exam=ExamRoutine::count();
        $Contact=Contact::count();
        $ClassRoutine=ClassRoutine::count();
        return view("backend.index",[
            "notice"    => $notice,
            "probidhan" => $probidhan,
            "stuff"     => $Staff,
            "student"   => $Student,
            "result"    => $result,
            "exam"      => $exam,
            "contact"   => $Contact,
            "class"     => $ClassRoutine
        ]);
    }  
    public function Notice(){
      $result=Notice::orderBy('created_at', 'DESC')->get();
      return view('backend.notice',['Datakey' =>$result]);
    }
    

    public function content(){
        $result= contentmangement::orderBy('id','DESC')->get();
        return view('backend.content',['Datakey'=>$result]);
    }   
    public function AddNotice(){
      return view('backend.noticeAdd');
    }
    
    public function noticeEdite($id){
        $result= Notice::find($id);
        return view('backend.editeNotice',[ "Datakey" => $result,]);
    }
    
    public function delNoticeAvatar($id){
        $result= Notice::find($id);
        $location = public_path($result->avatar);
        if (file_exists($location)):
            unlink($location);
            $result->avatar = 'NULL';
            $result->save();
            return back()->with('success','Avatar deleted');
        else:
            return back()->with('error','No avatar found to delete');
        endif;
    }
    
    public function userEdite($id){
        $result= AdminPanel::find($id);
        return view('backend.updateProfile',[ "Datakey" => $result]);
    }    
    public function userProfile(){
      $result=AdminPanel::find(Session::get('bsiadmin'));  
    //   return view('backend.userProfile',['Datakey' => $result]);
    }
    public function stuff(){
      $result=Staff::orderBy('id','DESC')->get();  
      return view('backend.stuff',['Datakey' => $result]);
       
    }
    public function addStuff(){
      return view('backend.stuffAdd');
       
    }
    public function stuffEdite($id){
        $result= Staff::find($id);
        return view('backend.stuffEdite',[ "Datakey" => $result,]);
    }
    
     
    
    public function student(){
      $result=Student::orderBy('id','DESC')->get();  
      return view('backend.student',['Datakey' => $result]);
    }    
    
    public function studentAdd(){
      return view('backend.studentAdd');
    }
    
    public function studentEdite($id){
        $result= Student::find($id);
        return view('backend.studentEdit',[ "Datakey" => $result,]);
    }   
    
    public function studentRemove($id){
        $result= Student::where('id',$id)->delete();
        return back();
    } 
    public function sylabus(){
    $result= Syllabus::orderBy('id','DESC')->get();
    return view('backend.sylabus',['Datakey'=>$result]);
    }   
    
    public function sylabusAdd(){
    return view('backend.sylabusAdd');
    }      
    
    public function sylabusEdit($id){
        $result= Syllabus::find($id);
        return view('backend.sylabusEdit',[ "Datakey" => $result,]);
    }    
    public function sylabusRemove($id){
        $result= Syllabus::where('id',$id)->delete();
        return back();
    }    
    public function probidhan(){
    $result= Probidhan::orderBy('id','DESC')->get();
    return view('backend.probidhan',['Datakey'=>$result]);
    }     
    public function probidhanAdd(){
    return view('backend.probidhanAdd');
    } 
    
    public function probidhanEdit($id){
        $result= Probidhan::find($id);
        return view('backend.probidhanEdite',[ "Datakey" => $result,]);
    }

    public function probidhanRemove($id){
        $result= Probidhan::where('id',$id)->delete();
        return back();
    }    
    
    public function semester(){
    $result= SemisterPlan::orderBy('id','DESC')->get();
    return view('backend.semester',['Datakey'=>$result]);
    }     
    
    public function semesterAdd(){
    return view('backend.semesterAdd');
    }     
    
    public function semesterEdit($id){
        $result= SemisterPlan::find($id);
        return view('backend.semesterEdite',[ "Datakey" => $result,]);
    }

    public function semestersRemove($id){
        $result= SemisterPlan::where('id',$id)->delete();
        return back();
    }    

    public function classrotine(){
        $result= ClassRoutine::orderBy('id','DESC')->get();
        return view('backend.classrotine',['Datakey'=>$result]);
    }      
    
    public function classrotineAdd(){
         return view('backend.classrotineAdd');
    }  
    
    public function classEdit($id){
        $result= ClassRoutine::find($id);
        return view('backend.classrotineEdite',[ "Datakey" => $result,]);
    }    

    public function calssRemove($id){
        $result= ClassRoutine::where('id',$id)->delete();
        return back();
    }     
    
    public function examRotine(){
        $result= ExamRoutine::orderBy('id','DESC')->get();
        return view('backend.examrotine',['Datakey'=>$result]);
    }    
    
    public function examrotineAdd(){
         return view('backend.examAdd');
    }     
    
    public function examEdit($id){
        $result= ExamRoutine::find($id);
        return view('backend.examEdit',[ "Datakey" => $result,]);
    }
    
     public function examRemove($id){
        $result= ExamRoutine::where('id',$id)->delete();
        return back();
    }
    public function resultList(){
        $result= resultmodel::orderBy('id','DESC')->get();
        return view('backend.result',['Datakey'=>$result]);
    }
    public function resultAdd(){
         return view('backend.resultAdd');
    }
    
    public function rsultEdit($id){
        $result= resultmodel::find($id);
        return view('backend.resultEdite',[ "Datakey" => $result,]);
    }    
    
    public function resultRemove($id){
        $result= resultmodel::where('id',$id)->delete();
        return back();
    }     
    public function contentAdd(){
         return view('backend.contentAdd');
    }    

    public function contentEdit($id){
        $result= contentmangement::find($id);
        return view('backend.contentEdite',[ "Datakey" => $result]);
    }    
    
    public function contentRemove($id){
        $result= contentmangement::where('id',$id)->delete();
        return back();
    }
    
    public function messageList(){
      $result= Contact::orderBy('id','DESC')->get();
      return view('backend.message',['Datakey'=>$result]);
    }
    
    public function messagetRemove($id){
        $result= Contact::where('id',$id)->delete();
        return back();
    }    
 
    public function photList(){
        $result= PhotoGallery::orderBy('id','DESC')->get();
        return view('backend.photo',['Datakey'=>$result]);
    }    
  
    public function photoAdd(){
         return view('backend.photoAdd');
    }
    
    public function photoEdit($id){
        $result= PhotoGallery::find($id);
        return view('backend.photoEdit',[ "Datakey" => $result]);
    }     
    
    public function photoRemove($id){
        $result= PhotoGallery::where('id',$id)->delete();
        return back();
    }    
    
    public function videolist(){
      $result= VideoGallery::orderBy('id','DESC')->get();
      return view('backend.video',['Datakey'=>$result]);
    }    

    public function videoAdd(){
         return view('backend.videoAdd');
    }    
    
    public function videoEdit($id){
        $result= VideoGallery::find($id);
        return view('backend.videoEdit',[ "Datakey" => $result]);
    }    
    
    public function videoRemove($id){
        $result= VideoGallery::where('id',$id)->delete();
        return back();
    }
    
    public function sliderlist(){
      $result= SliderGallery::orderBy('id','DESC')->get();
      return view('backend.slider',['Datakey'=>$result]);
    }    
    
    public function sliderAdd(){
      return view('backend.sliderAdd');
    }    
    
    public function sliderEdit($id){
        $result= SliderGallery::find($id);
        return view('backend.sliderEdit',[ "Datakey" => $result]);
    } 
    
    public function sliderRemove($id){
        $result= SliderGallery::where('id',$id)->delete();
        return back();
    }    
    
  public function passswordChange(){
      $result=AdminPanel::find(Session::get('bsiadmin'));  
        return view('backend.passwordChange',['Datakey'=>$result]);
  } 
  
  
      public function juniorStaffview(){
      $result= JuniorStaff::orderBy('id','DESC')->get();
      return view('backdoor.joniorStaff',['Datakey'=>$result]);
    }   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
