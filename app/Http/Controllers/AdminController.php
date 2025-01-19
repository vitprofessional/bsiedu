<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Notice;
use App\Models\Page;
use App\Models\Syllabus;
use App\Models\Probidhan;
use App\Models\SemisterPlan;
use App\Models\ClassRoutine;
use App\Models\ExamRoutine;
use App\Models\AcademicCalender;
use App\Models\Contact;
use App\Models\AdminPanel;
use App\Models\JuniorStaff;
use App\Models\StaffPanel;
use Illuminate\Support\Facades\Auth;
use App\Models\labdetailsModel;
class AdminController extends Controller
{
    
    public function __construct(){
        $this->middleware('bsiadmin');
    }
    
    public function saveEmployee(Request $requ){
        $employee = StaffPanel::find($requ->employeeId);
        if(!empty($employee)):
            $employee->name            =   $requ->fullName;
            $employee->father_name     =   $requ->fatherName;
            $employee->mother_name     =   $requ->motherName;
            $employee->phone_number    =   $requ->mobile;
            $employee->gender          =   $requ->gender;
            $employee->designation     =   $requ->designation;
            $employee->rank            =   $requ->rank;
            $employee->birth_date      =   $requ->dob;
            $employee->email           =   $requ->email;
            $employee->religion        =   $requ->religion;
            $employee->joining_date    =   $requ->joinDate;
            $employee->bl_group        =   $requ->blGroup;
            if($employee->save()):
                return back()->with('success','Success! Profile updated successfully');
            else:
                return back()->with('error','Sorry! There was an error to update profile');
            endif;
        else:
            return back()->with('error','Sorry! No data found for update');
        endif;
    }
    
    public function index(){
        $Notice = Notice::count();
        $teacher=Staff::count();
        $student=Student::count();
        $probdhan=Probidhan::count();
        $ClassRoutine=ClassRoutine::count();
        $examroutine=ExamRoutine::count();
        $contact=Contact::count();
        return view('backdoor.home',[
            'NoticeData'=>$Notice,
            'teacher'=>$teacher,
            'student'=>$student,
            'probidhan'=>$probdhan,
            'classrotine'=>$ClassRoutine,
            'examrotine'=>$examroutine,
            'contact'=>$contact
            ]);
    }
     public function contactview(){
         $data['alldata'] = Contact::all();
         return view('backdoor.backcontact',$data);
    }
      public function lab(){
          $result=labdetailsModel::orderBy('id', 'DESC')->get();
          return view('backdoor.labview',['Datakey' =>$result]);
    } 
    
    public function labAddView()
    {
        return view('backdoor.labAdd');
    }
    
    public function videioinformation()
    {
        return view('backdoor.youtubeVideo');
    }
    
     public function userview(){
        $data['allData'] = AdminPanel::all();
        return view('backdoor.viewuser',$data);
    }
    
      public function addUser(){
      return view('backdoor.adduser');
    }
    
     public function userStore(Request $request){
        $this->validate($request,[
            'adminname'=>'required',
            ]);
        $data = new AdminPanel();
        $data->adminname = $request->adminname;
        $data->adminemail = $request->adminemail;
        $data->adminmobile = $request->adminmobile;
        $data->adminspeech = $request->adminspeech;
        $data->adminpassword = $request->adminpassword;
        
      if($request->file('adminimage')){
            $file = $request->file('adminimage');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('backdoor/uploads/user_images'),$filename);
            $data['adminimage']=$filename;
        }
        $data->save();
        return redirect()->route('userview')->with('success','Data insert successfully');
    }
    
     public function userEdit($id){
      $editData = AdminPanel::find($id);
      return view('backdoor.editUser',compact('editData'));
    }
    
       
    
      public function userprofile(){
        //  $user = Auth::user();
        //  $id = Auth::id();
        //   dd($user);
         $admin = AdminPanel::first();
      return view('backdoor.userprofile',['admin'=>$admin]);
    }
    
    
     public function updateUser(Request $request, $id){
            $data = AdminPanel::find($id);
            $data->adminname = $request->adminname;
            $data->adminemail = $request->adminemail;
            $data->adminmobile = $request->adminmobile;
            $data->adminspeech = $request->adminspeech;
            $data->adminpassword = $request->adminpassword;
            
          if($request->file('adminimage')){
            $file = $request->file('adminimage');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('backdoor/uploads/user_images'),$filename);
            $data['adminimage']=$filename;
        }
         $data->save();
        return back('success','Data updated successfully');
    }
    
      public function deleteUser($id){
        $user = AdminPanel::find($id);
        if(file_exists('public/backdoor/uploads/user_images' .$user->adminimage) AND !empty ($user->adminimage)){
            unlink ('public/backdoor/uploads/user_images' .$user->adminimage);
        }
        $user->delete();
         return redirect()->route('userview')->with('success','User delete successfully');

    }
    
      
    //staff view controller
    public function staffs(){
        $staff= Staff::orderBy('rank','asc')->get();
        // $staff = Staff::all();
        return view('backdoor.backstaff',['staff'=>$staff]);
    }
    public function newstaff(){
        return view('backdoor.newstaff');
    }
    public function editstaff($id){
        $profile = Staff::find($id);
        return view('backdoor.editstaff',['profile'=>$profile]);
    }
    
    //student view controller
    public function students(){
        $student = Student::all();
        return view('backdoor.backstudent',['student'=>$student]);
    }
    public function newstudent(){
        return view('backdoor.admitstudent');
    }
    public function editstudent($id){
        $profile = Student::find($id);
        return view('backdoor.editstudent',['profile'=>$profile]);
    }
    
    //notice view controller
    public function notice(){
        $notice = Notice::all();
        return view('backdoor.backnotice',['notice'=>$notice]);
    }
    public function newnotice(){
        return view('backdoor.newnotice');
    }
    public function editnotice($id){
        $notice = Notice::find($id);
        return view('backdoor.editnotice',['notice'=>$notice]);
    }
    
    //syllabus view controller
    public function syllabus(){
        $syllabus = Syllabus::all();
        return view('backdoor.backsyllabus',['syllabus'=>$syllabus]);
    }
    public function newsyllabus(){
        return view('backdoor.newsyllabus');
    }
    public function editsyllabus($id){
        $syllabus = Syllabus::find($id);
        return view('backdoor.editsyllabus',['syllabus'=>$syllabus]);
    }
    
    //probidhan view controller
    public function probidhan(){
        $probidhan = Probidhan::all();
        return view('backdoor.backprobidhan',['probidhan'=>$probidhan]);
    }
    public function newprobidhan(){
        return view('backdoor.newprobidhan');
    }
    public function editprobidhan($id){
        $probidhan = Probidhan::find($id);
        return view('backdoor.editprobidhan',['probidhan'=>$probidhan]);
    }
    
    //semisterplan view controller
    public function semisterplan(){
        $semisterplan = SemisterPlan::all();
        return view('backdoor.backsemisterplan',['semisterplan'=>$semisterplan]);
    }
    public function newsemisterplan(){
        return view('backdoor.newsemisterplan');
    }
    public function editsemisterplan($id){
        $semisterplan = SemisterPlan::find($id);
        return view('backdoor.editsemisterplan',['semisterplan'=>$semisterplan]);
    }
    
    //classroutine view controller
    
    public function classroutine(){
        $classroutine = ClassRoutine::all();
        return view('backdoor.backclassroutine',['Datakey' => $classroutine]);
    }
    public function newclassroutine(){
        return view('backdoor.newclassroutine');
    }
    public function editclassroutine($id){
        $classroutine = ClassRoutine::find($id);
        return view('backdoor.editclassroutine',['classroutine'=>$classroutine]);
    }
        public function deleteclassroutine($id){
        $classroutine = ClassRoutine::find($id);
        if($classroutine->delete()):
            return back()->with('success','class rotine delete successfully');
        else:
        return back()->with('error','class rotine delete faile');
       endif;
    }
    //examroutine view controller
    public function examroutine(){
        $examroutine = ExamRoutine::all();
        return view('backdoor.backexamroutine',['examroutine'=>$examroutine]);
    }
    public function newexamroutine(){
        return view('backdoor.newexamroutine');
    }
    public function editexamroutine($id){
        $examroutine = ExamRoutine::find($id);
        return view('backdoor.editexamroutine',['examroutine'=>$examroutine]);
    }
    
    
    //academiccalendar view controller
    public function academiccalendar(){
        $academiccalendar = AcademicCalender::all();
        return view('backdoor.backacademiccalendar',['academiccalendar'=>$academiccalendar]);
    }
    public function newacademiccalendar(){
        return view('backdoor.newacademiccalendar');
    }
    public function editacademiccalendar($id){
        $academiccalendar = AcademicCalender::find($id);
        return view('backdoor.editacademiccalendar',['academiccalendar'=>$academiccalendar]);
    }
    
    //page view controller
    public function pagelist(){
        $page = Page::all();
        return view('backdoor.pages',['page'=>$page]);
    }
    public function newpage(){
        return view('backdoor.newpage');
    }
    public function editpage($id){
        $page = Page::find($id);
        return view('backdoor.editpage',['page'=>$page]);
    }
    
    //academic view controller
    public function backacademic(){
        return view('backdoor.backacademic');
    }
    
      public function juniorStaffview(){
      $result= JuniorStaff::orderBy('id','DESC')->get();
      return view('backdoor.joniorStaff',['Datakey'=>$result]);
    }
    
      public function juniorStaffStoreview(){
      return view("backdoor.addjuniorstaff");
    }    
    
        public function juniorStaffStore(Request $request){
        $this->validate($request,[
            'image'=>'required',
            ]);
        $data = new JuniorStaff();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->degination = $request->degination;

        
      if($request->file('image')){
            $file = $request->file('image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('backdoor/uploads/user_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->back()->with('success','Data insert successfully');
    }
    
        public function deletejuniorStaff($id){
        $staffRemove = JuniorStaff::find($id);
        if($staffRemove->delete()):
            return back()->with('success','Staff  delete successfully');
        else:
        return back()->with('error','Staff delete faile');
       endif;
    }
    
    public function editeJuniorStaff($id){
        $result = JuniorStaff::find($id);
        return view('backdoor.juniorStaffEdite',['Datakey'=>$result]);
    }
    
    
         public function updatejunirStaff(Request $request){
            $data = JuniorStaff::find($request->id);
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->degination = $request->degination;
            
          if($request->file('image')){
            $file = $request->file('image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('backdoor/uploads/user_images'),$filename);
            $data['image']=$filename;
        }
         $data->save();
        return back()->with('success','Data updated successfully');
    }
    
    //Add Lab Details///
    
        public function labStoreData(Request $request){
        $this->validate($request,[
            'image'=>'required',
            ]);
        $data = new labdetailsModel();
        $data->title = $request->title;
        $data->details = $request->details;
        

        
      if($request->file('image')){
            $file = $request->file('image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('backdoor/uploads/user_images'),$filename);
            $data['image1']=$filename;
        }
        $data->save();
        return redirect()->back()->with('success','Data insert successfully');
    } 
    
        
        public function deletelab($id){
        $labRemove = labdetailsModel::find($id);
        if($labRemove->delete()):
            return back()->with('success','Staff  delete successfully');
        else:
        return back()->with('error','Staff delete faile');
       endif;
    }
    
}
