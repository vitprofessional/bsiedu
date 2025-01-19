<?php
namespace App\Http\Controllers;
use Hash;
use Auth;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\StaffPanel;
use App\Models\TeacherPanel;
use App\Models\Student;
use App\Models\Page;
use App\Models\Probidhan;
use App\Models\Syllabus;
use App\Models\SemisterPlan;
use App\Models\ClassRoutine;
use App\Models\ExamRoutine;
use App\Models\AcademicCalender;
use App\Models\AdminPanel;
use App\Models\PhotoGallery;
use App\Models\VideoGallery;
use App\Models\SliderGallery;
use App\Models\Contact;
use App\Models\Jobplace;
use App\Models\NeedyStudent;
use App\Models\Applyjob;
use App\Models\User;
use App\Models\Notice;
use App\Models\labdetailsModel;
use App\Models\PreviousPrincipal;
use App\Models\JuniorStaff;
use App\Models\addmission_info_model;
use App\Models\JobPlacement;
use App\Models\jobplacement__model;
use App\Models\resource_management_model;
use App\Models\student_arcive_model;
use App\Models\yearly_bay_planing_model;
use App\Models\yearly_planing_model;
use App\Models\instituteDetailsModel;
use App\Models\resultmodel;
use App\Models\LinkageIndustry;
use App\Models\IndustrialAttachment;
use App\Models\IndustryVisit;
use App\Models\InHouseTeacher;
use App\Models\TrainingSubjectWise;
use App\Models\InHouseStaff;
use App\Models\InfoBox;
use App\Models\BoxContent;
use Intervention\Image\ImageManagerStatic as Image;


class FrontViewController extends Controller
{
   // New frontend routes
   //home
   public function frontsideHome(){
       $slider=SliderGallery::get();
       $notice=Notice::orderBy('id','desc')->limit(5)->get();
       $photo=PhotoGallery::orderBy('id','desc')->limit(6)->get();
       $video=VideoGallery::orderBy('id','desc')->limit(6)->get();
       $addmission=addmission_info_model::orderBy('id','desc')->limit(5)->get();
       $jobplacement=jobplacement__model::orderBy('id','desc')->limit(6)->get();
       $resource=resource_management_model::orderBy('id','desc')->limit(6)->get();
       $studentarcive= student_arcive_model::orderBy('id','desc')->limit(8)->get();
       $yearlyBay=yearly_bay_planing_model::orderBy('id','desc')->limit(6)->get();
       $YearlyPlaning=yearly_planing_model::orderBy('id','desc')->limit(6)->get();
       $boxInfo=InfoBox::orderBy('id','ASC')->get();
       
       return view('frontside.home',[
           'Datakey'=>$slider,
           'Notice'=>$notice,
           'Photo'=>$photo,
           'video'=>$video,
           'admission'=>$addmission,
           'jobplacement'=>$jobplacement,
           'research'=>$resource,
           'studentActive'=>$studentarcive,
           'yearBayPlan'=>$yearlyBay,
           'yearPlaning'=>$YearlyPlaning,
           'boxInfo'=>$boxInfo,
           ]);
   }
   
   //End home
   
    public function boxContentShow($id,$title)
    {
        $titleConvert = str_replace('%20','_',$title);
        $result=BoxContent::where(['boxId'=>$id,'contentTitle'=>$title])->orderBy('id','ASC')->get();
        return view('frontside.infoBox',["Datakey" => $result,'title'=>$titleConvert]);
    }
   //start notice
   
   public function allnotice()
   {
       $Notice=Notice::orderBy('id','desc')->get();
       return view('frontside.allnotice',[
          "Notice"=>$Notice
           ]);
   }
   // End notice
   
   
    // About us 
    
    public function principalSpeech()
    {
        $reslut=AdminPanel::first();
        return view('frontside.principalSpeech',["Datakey" =>$reslut]);
    }
    public function instituteInfo()
    {
        $result=instituteDetailsModel::get()->first();
        return view('frontside.instituteInfo',['Datakey' => $result]);
    }
    public function exprincipal()
    {
        $result= PreviousPrincipal::get();
        return view('frontside.exprincipal',["Datakey"  =>$result]);
    }
    public function teacherList()
    {
        $result=TeacherPanel::orderBy('rank','ASC')->get();
        return view('frontside.teachers',["Datakey" => $result]);
    }
    
    public function employeeList()
    {
        $result=StaffPanel::orderBy('rank','ASC')->get();
        return view('frontside.staff',["Datakey" => $result]);
    }
    // End About Us
   
    // job placement
    
    public function placementCell()
    {
        $reslut=Jobplace::get();
        return view('frontside.placementCell',["Datakey" =>$reslut]);
    }
    
    public function jobNeededStudent ()
    {
        $reslut=NeedyStudent::get();
        return view('frontside.needyStudent',["Datakey" =>$reslut]);
    }
    // end job placement
       
     
    public function result()
    {
        $result=resultmodel::get();
        return view('frontside.result',["Datakey" => $result]);
    }
    
    public function studentgallary()
    {
        $result=Student::orderBy('id','DESC')->paginate(10);
        return view('frontside.student',[ "Datakey" =>  $result ]);
    }
    
    public function Photogallary()
    {
        $result= PhotoGallery::get();
        return view('frontside.photogallary',["Datakey" => $result]);
    }
    
    public function newVideogallary()
    {
        $result = VideoGallery::get();
        return view('frontside.videogallary',["Datakey"=>$result]);
    } 
    
    // accademic
    
    public function NewclassRotine()
    {   
        $result=ClassRoutine::get();
        return view('frontside.classrotine',["Datakey"  =>$result]);
    }
    
    public function NewExamRotine()
    {
        $result=ExamRoutine::get();
   
        return view('frontside.examrotine',["Datakey"   =>$result]);
    }

    public function Newsylabus()
    {
        $result= Syllabus::get();
        return view('frontside.sylabus',["Datakey"  =>$result]);
    }
    
    public function NewSemesterplan()
    {
        $result=SemisterPlan::get();
        return view('frontside.semesterpland',["Datakey"    =>$result]);
    }
    
    public function probdhan()
    {
        $result= Probidhan::get();
        return view('frontside.probidhan',["Datakey" => $result]);
    }      
   //start lab 
   
  public function labdetails($id)
  {
      $labdetails= labdetailsModel::find($id);
      return view('frontside.labdetails',[
          'Datakey' =>$labdetails
          ]);
  }
  
   // End lab
   
    public function newContact()
    {
        return view('frontside.contact');
    } 
   //End  New frontend routes
   
    
    //Teacher and staff database controller
    public function bsistaffs(){
        $staff= Staff::orderBy('rank','asc')->get();
        return view('frontend.staff',['staff'=>$staff]);
    }
     public function speech(){
        $data['allData'] = AdminPanel::all();
        // dd($data);
      return view('frontend.principalSpeech',$data);
    }
    
    public function viewStaff($id){
        $staff  =   Staff::find($id);
        return view('frontend.viewProfile',['staff'=>$staff]);
    }
    //student database controller
    public function bsistudent(){
        $student  =   Student::all();
        return view('frontend.student',['student'=>$student]);
    }
    
    public function viewStudent($id){
        $student  =   Student::find($id);
        return view('frontend.viewProfile',['student'=>$student]);
    }
   
    //probidhan controller
    public function probidhan(){
        $probidhan  =   Probidhan::all();
        return view('frontend.probidhan',['probidhan'=>$probidhan]);
    }
   
    //linkage industry controller
    public function linkageIndustryList(){
        $Datakey  =   LinkageIndustry::all();
        return view('frontside.linkageIndustry',['Datakey'=>$Datakey]);
    }
   
    //industrial attachment controller
    public function industryAttachment(){
        $Datakey  =   IndustrialAttachment::all();
        return view('frontside.industryAttachment',['Datakey'=>$Datakey]);
    }
   
    //industry visit controller
    public function industryVisitList(){
        $Datakey  =   IndustryVisit::all();
        return view('frontside.industryVisitList',['Datakey'=>$Datakey]);
    }
   
    //teacher inhouse controller
    public function inhouseTrainingTeacherList(){
        $Datakey  =   InHouseTeacher::all();
        return view('frontside.inhouseTrainingTeacherList',['Datakey'=>$Datakey]);
    }
   
    //industrial attachment controller
    public function inhouseTrainingStaffList(){
        $Datakey  =   InHouseStaff::all();
        return view('frontside.inhouseTrainingStaffList',['Datakey'=>$Datakey]);
    }
   
    //industry visit controller
    public function trainingSubjectWise(){
        $Datakey  =   TrainingSubjectWise::all();
        return view('frontside.trainingSubjectWise',['Datakey'=>$Datakey]);
    }
    
    
    //syllabus controller
    public function syllabus(){
        $syllabus  =   Syllabus::all();
        return view('frontend.syllabus',['syllabus'=>$syllabus]);
    }
    
    //semisterplan controller
    public function semisterplan(){
        $semisterplan  =   SemisterPlan::all();
        return view('frontend.semisterplan',['semisterplan'=>$semisterplan]);
    }
    
    //classroutine controller
    public function classroutine(){
        $classroutine  =   ClassRoutine::all();
        return view('frontend.classroutine',['classroutine'=>$classroutine]);
    }
    
    //examroutine controller
    public function examroutine(){
        $examroutine  =   ExamRoutine::all();
        return view('frontend.examroutine',['examroutine'=>$examroutine]);
    }
    
        public function deletExam($id){
        $slideDelete=ExamRoutine::find($id);
        if($slideDelete->delete()){
            return back()->with('success','Exam Rotine delete successfully');
        }else{
             return back()->with('error','Exam Rotine delete Fail');
        }
    }
    //academiccalender controller
    public function academiccalender(){
        $academiccalender  =   AcademicCalender::all();
        return view('frontend.academiccalender',['academiccalender'=>$academiccalender]);
    }
    
    public function education($id){
        $check  =   Page::where(['page_name'=>$id])->get();
        if(count($check)>0):
            foreach($check as $chk):
                $education   =   Page::find($chk->id);
            endforeach;
        else:
            $education = 0;
        endif;
        return view('frontend.page',['education'=>$education]);
    }
    
    //Admin panel controller
    public function adminlogin(){
        return view('frontend.adminlogin');
    }
    public function passwordChangeView(){
        return view('backend.passwordChange');
    }

    public function AdminLoginCheck(Request $request){
        $admin = AdminPanel::where(['adminemail'=> $request->AdminEmail])->first();
        if(!empty($admin)):
                $hashpass = $admin->adminpassword;
            	$authuser = $request->AdminPassword;
            if($authuser):
                $request->session()->regenerate();
                $request->session()->put('bsiadmin',$admin->id);
                $request->session()->get('bsiadmin');
        	    return redirect(route('backhome'));
            else:
                return back()->with('error','Sorry! Password you provide with this email not valid');
            endif;
        else:
            return back()->with('error','Sorry! You have no permission to logon admin panel');
        endif;
    }

    public function AdminSignup(Request $request){
        $admin = AdminPanel::where(['adminemail'=> $request->AdminEmail])->get();
        if(count($admin)>0):
            return back()->with('error','Sorry! Admin already registered');
        else:
            $hashpass = Hash::make($request->AdminPassword);
            $admin = new AdminPanel();
            $admin->adminemail       = $request->AdminEmail;
            $admin->adminpassword    = $hashpass;
            $admin->adminname        = $request->AdminName;
            $admin->adminmobile      = $request->AdminMobile;
            
            if($admin->save()):
                return back()->with('success','Success! You are now authorized to admin permission. Please login to continue');
            else:
                return back()->with('error','Sorry! You are not authorized to admin permission. Please contact administrator');
            endif;
        endif;
    }

    public function adminlogout(Request $request) {
    $request->session()->flush();
    return redirect()->route('adminlogin')->with('error', "YOu have successfully logout");
    }
    
    public function about($id){
        $check  =   Page::where(['page_name'=>$id])->first();
        if(!empty($check)):
                $about   =   Page::find($check->id);
        else:
            $about = 0;
        endif;
        return view('frontend.page',['about'=>$about]);
    }
    
    
    public function photogallery(){
        $photogallery  =   PhotoGallery::all();
        return view('frontend.gallery',['photogallery'=>$photogallery]);
    }
    
    public function sliderlist(){
        $slider =  SliderGallery::get();
        return view('backdoor.sliderlist',['Datakey'=>$slider]);
    }
    
    public function newslider(){
        return view('backdoor.newslider');
    }
    
    public function editslide($id){
        $slideedit= SliderGallery::find($id);
        return view('backdoor.editslide',['Datakey'=>$slideedit]);
    }
    
    public function deletslid($id){
        $slideDelete=SliderGallery::find($id);
        if($slideDelete->delete()){
            return back()->with('success','slide delete successfully');
        }else{
             return back()->with('error','slide delete Fail');
        }
    }
    public function videogallery(){
        $videogallery  =   VideoGallery::all();
        return view('frontend.gallery',['videogallery'=>$videogallery]);
    }
    
    public function contactform(){
        return view('frontend.add-contact');
    }
    public function addStaff(){
        return view('frontend.add-staff');
    }
    
     public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:contacts,email',
            'phone' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9|max:11',
            'subject'=>'required',
            'message'=>'required',
            ]);
        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('contactformView')->with('success','Data insert successfully');
    }
    
   
    
     public function jobplaceform(){
         $data['alldata'] = Applyjob::all();
        return view('frontend.add_apply_job',$data);
    }
    
     public function Storejob(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:applyjobs,email',
             'mobile' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9|max:11',
            ]);
        $data = new Applyjob();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->roll_number = $request->roll_number;
        $data->session = $request->session;
        $data->position = $request->position;
        $data->company = $request->company;
        $data->details = $request->details;
        $data->save();
        return redirect()->route('jobplaceform')->with('success','Data insert successfully');
    }
    
    // public function createstaff(Request $requ){
    //     //return 11;
    //     $chk = Staff::where(['phone_number'=>$requ->mobile])->where(['email'=>$requ->email])->get();
    //     //return count($chk);
    //     if(count($chk)>0):
    //         return back()->with('error','Sorry! Teacher/Staff profile already exist');
    //         //return 0;
    //     else:
    //         $staff = new Staff();
    //         $staff->name            =   $requ->staffname;
    //         $staff->father_name     =   $requ->fname;
    //         $staff->mother_name     =   $requ->mname;
    //         $staff->phone_number    =   $requ->mobile;
    //         $staff->gender          =   $requ->gender;
    //         $staff->merital_status  =   $requ->mstatus;
    //         $staff->designation     =   $requ->designation;
    //         $staff->rank            =   $requ->rank;
    //         $staff->pre_address     =   $requ->pre_address;
    //         $staff->per_address     =   $requ->per_address;
    //         $staff->birth_date      =   $requ->dateob;
    //         $staff->email           =   $requ->email;
    //         $staff->religion        =   $requ->religion;
    //         $staff->join_date       =   $requ->joindate;
    //         $staff->edu_quality     =   $requ->eduquality;
    //         $staff->bl_group        =   $requ->blgroup;
    //         $staff->status          =   $requ->prostatus;
    //         //return 1;
    // 		//image save to database
    // 		if(!empty($requ->file('avatar'))):
    // 			if(file_exists(storage_path("frontend/uploads/staff/").$requ->avatar)):
    // 				unlink(storage_path('frontend/uploads/staff/'.$requ->avatar));
    // 			endif;
    // 			//get filename with extension
    // 			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    // 			//get filename without extension
    // 			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    // 			//get file extension
    // 			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    // 			//filename to store
    // 			$filenametostore = $filename.'_'.time().'.'.$extension;		 
    			
    // 			$staff->avatar = $filenametostore;
    // 		endif;
    //         //$staff->avatar          =$requ->;
    //         if($staff->save()):
		  //      if(!empty($requ->file('avatar'))):
			 //       //Upload File
			 //       $requ->file('avatar')->storeAs('public/frontend/uploads/staff/', $filenametostore);	 
			 //       //Resize image here
			 //       $thumbnailpath = public_path('storage/frontend/uploads/staff/'.$filenametostore);
			 //       $img = Image::make($thumbnailpath)->resize(100, null, function($constraint) {
			 //           $constraint->aspectRatio();
			 //       });
			 //       $img->save($thumbnailpath);
		  //      endif;
    //             return back()->with('success','Success! Teacher/Staff profile created successfully');
    //         else:
    //             return back()->with('error','Sorry! There was an error to create Teacher/Staff profile');
    //         endif;
    //     endif;
    // }

}










