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
use App\Models\Jobplace;
use App\Models\NeedyStudent;
use App\Models\AdminPanel;
use App\Models\resultmodel;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Syllabus;
use App\Models\JuniorStaff;
use App\Models\LinkageIndustry;
use App\Models\IndustrialAttachment;
use App\Models\IndustryVisit;
use Hash;
use Image;

class AdminPanelController extends Controller
{
    public function __construct(){
        $this->middleware('bsiadmin');
    }
    
    // placement cell controller
    public function placementCell(){
        $ns  = NeedyStudent::orderBy('id','desc')->get();
        $placement  = Jobplace::orderBy('id','desc')->get();
        return view('backdoor.placementCell',['placement'=>$placement,'ns'=>$ns]);
    }
    
    public function delNeedyStudent($id){
        $ns = NeedyStudent::find($id);
        if(!empty($ns)):
            $ns->delete();
            return back()->with('success','Jobseekers profile deleted successfully');
        else:
            return back()->with('error','Jobseekers profile deletion failed');
        endif;
    }
    public function delPlaceStudent($id){
        $placement = Jobplace::find($id);
        if(!empty($placement)):
            $placement->delete();
            return back()->with('success','Place Student deleted successfully');
        else:
            return back()->with('error','Place Student deletion failed');
        endif;
    }
    // end placement cell controller
    
    // Industry linkage controller
    public function linkageIndustry(){
        $linkageIndustry = LinkageIndustry::orderBy('id','DESC')->get();
        return view('backdoor.industry',['industry'=>$linkageIndustry]);
    }
    public function createLinkageIndustry(){
        return view('backdoor.newIndustry');
    }
    
    public function saveLinkageIndustry(Request $requ){
        $linkIndustry = new LinkageIndustry();
        $linkIndustry->name             = $requ->companyName;
        $linkIndustry->contactPerson    = $requ->contactPerson;
        $linkIndustry->email            = $requ->email;
        $linkIndustry->mobile           = $requ->mobile;
        $linkIndustry->location         = $requ->location;
        $linkIndustry->formDate         = $requ->mouDate;
		if(!empty($requ->file('avatar'))):
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$linkIndustry->companyLogo = $filenametostore;
		endif;
		if(!empty($requ->file('mouSign'))):
			//get filename with extension
			$mouExtension = $requ->file('mouSign')->getClientOriginalName();
			
			//get filename without extension
			$mouName = pathinfo($mouExtension, PATHINFO_FILENAME);
			
			//get file extension
			$mouExt = $requ->file('mouSign')->getClientOriginalExtension();
			
			//filename to store
			$mouPhoto = md5($mouName.'_'.time()).'.'.$mouExt;		 
			
			$linkIndustry->mouSign = $mouPhoto;
		endif;
        if($linkIndustry->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs("public/frontend/uploads/industry/", $filenametostore);	 
	        endif;
	        if(!empty($requ->file('mouSign'))):
		        //Upload File
		        $requ->file('mouSign')->storeAs("public/frontend/uploads/industry/", $mouPhoto);	 
		        //Resize image here
	        endif;
            return back()->with('success','Success! Box created successfully');
        else:
            return back()->with('error','Sorry! There was an error to create box');
        endif;
    }
    public function editLinkageIndustry($id){
        $industry = LinkageIndustry::find($id);
        return view('backdoor.editIndustry',['industry'=>$industry]);
    }
    
    public function updateIndustryLinkage(Request $requ){
        $linkIndustry = LinkageIndustry::find($requ->industryId);
        $linkIndustry->name             = $requ->companyName;
        $linkIndustry->contactPerson    = $requ->contactPerson;
        $linkIndustry->email            = $requ->email;
        $linkIndustry->mobile           = $requ->mobile;
        $linkIndustry->location         = $requ->location;
        $linkIndustry->formDate         = $requ->mouDate;
		if(!empty($requ->file('avatar'))):
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$linkIndustry->companyLogo = $filenametostore;
		endif;
		if(!empty($requ->file('mouSign'))):
			//get filename with extension
			$mouExtension = $requ->file('mouSign')->getClientOriginalName();
			
			//get filename without extension
			$mouName = pathinfo($mouExtension, PATHINFO_FILENAME);
			
			//get file extension
			$mouExt = $requ->file('mouSign')->getClientOriginalExtension();
			
			//filename to store
			$mouPhoto = md5($mouName.'_'.time()).'.'.$mouExt;		 
			
			$linkIndustry->mouSign = $mouPhoto;
		endif;
        if($linkIndustry->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs("public/frontend/uploads/industry/", $filenametostore);	 
	        endif;
	        if(!empty($requ->file('mouSign'))):
		        //Upload File
		        $requ->file('mouSign')->storeAs("public/frontend/uploads/industry/", $mouPhoto);	 
		        //Resize image here
	        endif;
            return back()->with('success','Success! Industry update successfully');
        else:
            return back()->with('error','Sorry! There was an error to update industry');
        endif;
    }
    //delete profile picture controller
    public function delLinkageIndustry ($id){
        $profile = LinkageIndustry::find($id);
		if($profile->delete()):
    		if(!empty($profile->companyLogo)):
    			if(file_exists(storage_path("frontend/uploads/industry/").$profile->companyLogo)):
    				unlink(storage_path('frontend/uploads/industry/'.$profile->companyLogo));
    			endif;
    		endif;
    		if(!empty($profile->mouSign)):
    			if(file_exists(storage_path("frontend/uploads/industry/").$profile->mouSign)):
    				unlink(storage_path('frontend/uploads/industry/'.$profile->mouSign));
    			endif;
    		endif;
		    return back()->with('success','Industry delete successfully');
		else:
		    return back()->with('error','Industry deletion failed');
		endif;
    }
    
    public function delIndustryCompany($id){
        $profile = LinkageIndustry::find($id);
		if($profile):
    		if(!empty($profile->companyLogo)):
    			if(file_exists(storage_path("frontend/uploads/industry/").$profile->companyLogo)):
    				unlink(storage_path('frontend/uploads/industry/'.$profile->companyLogo));
    			endif;
    		endif;
		    $profile->companyLogo = "";
		    $profile->save();
		    return back()->with('success','Industry update successfully');
		else:
		    return back()->with('error','Industry filed to update');
		endif;
    }
    
    public function delIndustryMou ($id){
        $profile = LinkageIndustry::find($id);
		if($profile):
    		if(!empty($profile->mouSign)):
    			if(file_exists(storage_path("frontend/uploads/industry/").$profile->mouSign)):
    				unlink(storage_path('frontend/uploads/industry/'.$profile->mouSign));
    			endif;
    		endif;
		    $profile->mouSign = "";
		    $profile->save();
		    return back()->with('success','Industry update successfully');
		else:
		    return back()->with('error','Industry failed to update');
		endif;
    }
    // Industry linkage controller end
    // Industrial attachment controller
    public function industrialAttachment(){
        $attachment = IndustrialAttachment::orderBy('id','DESC')->get();
        return view('backdoor.attachment',['industry'=>$attachment]);
    }
    public function createAttachment(){
        return view('backdoor.newAttachment');
    }
    
    public function saveAttachment(Request $requ){
        $attachment = new IndustrialAttachment();
        $attachment->name       = $requ->companyName;
        $attachment->mobile     = $requ->mobile;
        $attachment->email      = $requ->email;
        $attachment->formDate   = $requ->mouDate;
        $attachment->toDate     = $requ->toDate;
        $attachment->location   = $requ->location;
		if(!empty($requ->file('avatar'))):
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$attachment->photo = $filenametostore;
		endif;
        if($attachment->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs("public/frontend/uploads/attachment/", $filenametostore);	 
	        endif;
            return back()->with('success','Success! Box created successfully');
        else:
            return back()->with('error','Sorry! There was an error to create box');
        endif;
    }
    public function editAttachment($id){
        $industry = IndustrialAttachment::find($id);
        return view('backdoor.editAttachment',['industry'=>$industry]);
    }
    
    public function updateAttachment(Request $requ){
        $attachment = IndustrialAttachment::find($requ->industryId);
        $attachment->name       = $requ->companyName;
        $attachment->mobile     = $requ->mobile;
        $attachment->email      = $requ->email;
        $attachment->formDate   = $requ->mouDate;
        $attachment->toDate     = $requ->toDate;
        $attachment->location   = $requ->location;
		if(!empty($requ->file('avatar'))):
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$attachment->photo = $filenametostore;
		endif;
        if($attachment->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs("public/frontend/uploads/attachment/", $filenametostore);	 
	        endif;
            return back()->with('success','Success! Industry update successfully');
        else:
            return back()->with('error','Sorry! There was an error to update industry');
        endif;
    }
    //delete profile picture controller
    public function delAttachment ($id){
        $profile = IndustrialAttachment::find($id);
		if($profile->delete()):
    		if(!empty($profile->photo)):
    			if(file_exists(storage_path("frontend/uploads/attachment/").$profile->photo)):
    				unlink(storage_path('frontend/uploads/attachment/'.$profile->photo));
    			endif;
    		endif;
		    return back()->with('success','Industry delete successfully');
		else:
		    return back()->with('error','Industry deletion failed');
		endif;
    }
    
    public function delAttachmentFile($id){
        $profile = IndustrialAttachment::find($id);
		if($profile):
    		if(!empty($profile->photo)):
    			if(file_exists(storage_path("frontend/uploads/attachment/").$profile->photo)):
    				unlink(storage_path('frontend/uploads/attachment/'.$profile->photo));
    			endif;
    		endif;
		    $profile->photo = "";
		    $profile->save();
		    return back()->with('success','Industry update successfully');
		else:
		    return back()->with('error','Industry filed to update');
		endif;
    }
    // Industrial attachment controller end
    // Industry linkage controller
    public function indVisit(){
        $attachment = IndustryVisit::orderBy('id','DESC')->get();
        return view('backdoor.indVisit',['industry'=>$attachment]);
    }
    public function createIndVisit(){
        return view('backdoor.newIndVisit');
    }
    
    public function saveIndVisit(Request $requ){
        $attachment = new IndustryVisit();
        $attachment->name       = $requ->companyName;
        $attachment->mobile     = $requ->mobile;
        $attachment->email      = $requ->email;
        $attachment->visitDate  = $requ->visitDate;
        $attachment->location   = $requ->location;
		if(!empty($requ->file('avatar'))):
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;
			
			$attachment->remark = $filenametostore;
		endif;
        if($attachment->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs("public/frontend/uploads/industryVisit/", $filenametostore);	 
	        endif;
            return back()->with('success','Success! Box created successfully');
        else:
            return back()->with('error','Sorry! There was an error to create box');
        endif;
    }
    public function editIndVisit($id){
        $industry = IndustryVisit::find($id);
        return view('backdoor.editIndVisit',['industry'=>$industry]);
    }
    
    public function updateIndVisit(Request $requ){
        $attachment = IndustryVisit::find($requ->industryId);
        $attachment->name       = $requ->companyName;
        $attachment->mobile     = $requ->mobile;
        $attachment->email      = $requ->email;
        $attachment->visitDate  = $requ->visitDate;
        $attachment->location   = $requ->location;
		if(!empty($requ->file('avatar'))):
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$attachment->remark = $filenametostore;
		endif;
        if($attachment->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs("public/frontend/uploads/industryVisit/", $filenametostore);	 
	        endif;
            return back()->with('success','Success! Industry update successfully');
        else:
            return back()->with('error','Sorry! There was an error to update industry');
        endif;
    }
    //delete profile picture controller
    public function delIndVisit ($id){
        $profile = IndustryVisit::find($id);
		if($profile->delete()):
    		if(!empty($profile->remark)):
    			if(file_exists(storage_path("frontend/uploads/industryVisit/").$profile->remark)):
    				unlink(storage_path('frontend/uploads/industryVisit/'.$profile->remark));
    			endif;
    		endif;
		    return back()->with('success','Industry delete successfully');
		else:
		    return back()->with('error','Industry deletion failed');
		endif;
    }
    
    public function delVisitFile($id){
        $profile = IndustryVisit::find($id);
		if($profile):
    		if(!empty($profile->remark)):
    			if(file_exists(storage_path("frontend/uploads/industryVisit/").$profile->remark)):
    				unlink(storage_path('frontend/uploads/industryVisit/'.$profile->remark));
    			endif;
    		endif;
		    $profile->remark = "";
		    $profile->save();
		    return back()->with('success','Industry update successfully');
		else:
		    return back()->with('error','Industry filed to update');
		endif;
    }
    //industry visit end
    
    public function confirmNotice(Request $request){
        $data = new Notice();
        $data->	title   = $request->name;
        $data->	status   = $request->status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return redirect()->route('adminNotice');
        
    }
    
    public function updateNotice(Request $request){
        $data =  Notice::find($request->id);
        $data->	title   = $request->name;
        $data->	status   = $request->status;
        $data->save();
        return back()->with('success','Data updated successfully');
    }
    
    public function updateNoticeAvatar(Request $request){
        $data =  Notice::find($request->id);
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = '/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','Data updated successfully');
    }
    
    public function updateUser(Request $request){
        $data                       = AdminPanel::find($request->id);
        $data->adminname            = $request->adminname;
        $data->adminemail           = $request->email;
        $data->adminmobile          = $request->mobile;
        $data->adminspeech          = $request->space;
        $data->position             = $request->position;
        $data->	status              = $request->status;
        if($request->file('adminimage')){
            $file = $request->file('adminimage');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/user_images/'.$filename;             
            $file->move(public_path('backdoor/uploads/user_images'),$filename);
            $data->adminimage =$fileLocation;
        }
        $data->save();  
        return redirect()->route('userProfile');
    }
    public function confirmStuff(Request $request){
        $data                   = new Staff();
        $data->	name            = $request->stuffname;
        $data->	father_name     = $request->Fathername;
        $data->	mother_name     = $request->mothername;
        $data->	phone_number    = $request->phone;  
        $data->	gender          = $request->gender;
        $data->	designation     = $request->degination;
        $data->	rank            = $request->rankstatus;
        $data->	pre_address     = $request->present;         
        $data->	per_address     = $request->parmanent;
        $data-> birth_date      = $request->brithdate;
        $data->	email           = $request->emaill;
        $data->	religion        = $request->religion;
        $data->	join_date       = $request->jointdate;  
        $data->	bl_group        = $request->blood;
        $data->	status          = $request->profilestatus;
        $data->	merital_status  = $request->maritalstatus;
         if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/employee_images/'.$filename;             
            $file->move(public_path('backdoor/uploads/employee_images'),$filename);
            $data['avatar']=$fileLocation;
        }
        $data->save();
        return redirect()->route('adminstuff'); 
    }    
        
    public function updaateStuff(Request $request){
        $data                   = Staff::find($request->id);
        $data->	name            = $request->stuffname;
        $data->	father_name     = $request->Fathername;
        $data->	mother_name     = $request->mothername;
        $data->	phone_number    = $request->phone;  
        $data->	gender          = $request->gender;
        $data->	designation     = $request->degination;
        $data->	rank            = $request->rankstatus;
        $data->	pre_address     = $request->present;         
        $data->	per_address     = $request->parmanent;
        $data-> birth_date      = $request->brithdate;
        $data->	email           = $request->emaill;
        $data->	religion        = $request->religion;
        $data->	join_date       = $request->jointdate;  
        $data->	bl_group        = $request->blood;
        $data->	status          = $request->profilestatus;
        $data->	merital_status  = $request->maritalstatus;

        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/employee_images/'.$filename;             
            $file->move(public_path('backdoor/uploads/employee_images'),$filename);
            $data['avatar']=$fileLocation;
        }
        $data->save();
        return back()->with('success','Update Your successfully'); 
    }

    public function confirmStudent(Request $request){
        $data                   = new Student();
        $data->	name            = $request->studentname;
        $data->	father_name     = $request->Fathername;
        $data->	mother_name     = $request->mothername;
        $data->	phone_number    = $request->phone;  
        $data->	gender          = $request->gender;
        $data->	semister        = $request->semester;
        $data->	session         = $request->session;
        $data->	roll_number     = $request->roll;         
        $data->	regi_no         = $request->regi;
        $data-> pre_address     = $request->present;
        $data->	per_address     = $request->parmanent;
        $data->	birth_date      = $request->brithdate;
        $data->	email           = $request->emaill;  
        $data->	bl_group        = $request->blood;
        $data->	religion        = $request->religion;
        $data->	status          = $request->profilestatus;

        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/student/'.$filename;
            $file->move(public_path('backdoor/uploads/student'),$filename);
            $data['avatar']=$fileLocation;
        }
        $data->save();
        return redirect()->route('studentDetails'); 
    }    
    
    public function updateStudent(Request $request){
        $data                   = Student::find($request->id);
        $data->	name            = $request->studentname;
        $data->	father_name     = $request->Fathername;
        $data->	mother_name     = $request->mothername;
        $data->	phone_number    = $request->phone;  
        $data->	gender          = $request->gender;
        $data->	semister        = $request->semester;
        $data->	session         = $request->session;
        $data->	roll_number     = $request->roll;         
        $data->	regi_no         = $request->regi;
        $data-> pre_address     = $request->present;
        $data->	per_address     = $request->parmanent;
        $data->	birth_date      = $request->brithdate;
        $data->	email           = $request->emaill;  
        $data->	bl_group        = $request->blood;
        $data->	religion        = $request->religion;
        $data->	status          = $request->profilestatus;

        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/student/'.$filename;
            $file->move(public_path('backdoor/uploads/student'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','update information successfully'); 
    }
    
    public function confirmSylabus(Request $request){
        $data = new Syllabus();
        $data->	department   = $request->department;
        $data->	semister   = $request->	semister;
        $data->	probidhan   = $request->probidhan;
        $data->	status   = $request->status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/sylabus/'.$filename;
            $file->move(public_path('backdoor/uploads/sylabus'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return redirect()->route('sylabuslist'); 
    }
        public function updateSylbus(Request $request){
        $data                   = Syllabus::find($request->id);
        $data->	department      = $request-> department;
        $data->	semister        = $request-> semister;
        $data->	probidhan       = $request-> probidhan;
        $data->	status          = $request-> status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/sylabus/'.$filename;
            $file->move(public_path('backdoor/uploads/sylabus'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','updat successfully');
        
    }    
    public function addProbidhan(Request $request){
        $data = new Probidhan();
        $data->	probidhan       = $request-> probidhan;
        $data->	department      = $request-> department;
        $data->	status          = $request-> status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/probidhan/'.$filename;
            $file->move(public_path('backdoor/uploads/probidhan'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return redirect()->route('probidhan');
        
    }    
    public function updateProbidhan(Request $request){
        $data = Probidhan::find($request->id);
        $data->	probidhan       = $request-> probidhan;
        $data->	department      = $request-> department;
        $data->	status          = $request-> status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/probidhan/'.$filename;
            $file->move(public_path('backdoor/uploads/probidhan'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','update success');
        
    }    
    
    public function confirmSemester(Request $request){
        $data = new SemisterPlan();
        $data-> subject          =$request->subject;
        $data->	department      = $request-> department;
        $data->	semister        = $request-> semister;
        $data->	status          = $request-> status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return redirect()->route('semesterlist');
        
    }    
    
    public function updateSemester(Request $request){
        $data = SemisterPlan::find($request->id);
        $data-> subject         = $request->subject;
        $data->	department      = $request-> department;
        $data->	semister        = $request-> semister;
        $data->	status          = $request-> status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','update successly');
        
    }
    public function confirmClassrotine(Request $request){
        $data = new ClassRoutine();
        $data-> shift           =$request->shift;
        $data->	department      = $request-> department;
        $data->	semister        = $request-> semister;
        $data->	status          = $request-> prostatus;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return redirect()->route('backclassroutine');
        
    }
    
    public function updateClassrotine(Request $request){
        $data =  ClassRoutine::find($request->proid);
        $data-> shift            =$request->shift;
        $data->	department      = $request-> department;
        $data->	semister        = $request-> semister;
        $data-> status	        = $request->  prostatus;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','update successfully');
    } 
    
    public function confirmExamRotine(Request $request){
        $data = new ExamRoutine();
        $data->exam             =$request->exam;
        $data->	department      = $request-> department;
        $data->	semister        = $request-> semister;
        $data->	status          = $request-> status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return redirect()->route('backexamroutine');
        
    }

    public function updateExamRotine(Request $request){
        $data = ExamRoutine::find($request->id);
        $data-> exam            = $request->exam;
        $data->	department      = $request-> department;
        $data->	semister        = $request-> semister;
        $data->	status          = $request-> prostatus;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','Update Successfully');
        
    }
    
    public function confirmResult(Request $request){
        $data = new resultmodel();
        $data-> shift           =$request->shift;
        $data->	departmetn      = $request-> departmetn;
        $data->	semester        = $request-> semester;
        $data->	status          = $request-> status;
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/result/'.$filename;
            $file->move(public_path('backdoor/uploads/result'),$filename);
            $data->image =$fileLocation;
        }
        $data->save();
        return redirect()->route('resultlist');
        
    }
    
    public function updateResult(Request $request){
        $data =  resultmodel::find($request->id);
        $data-> shift           =$request->shift;
        $data->	departmetn      = $request-> departmetn;
        $data->	semester        = $request-> semester;
        $data->	status          = $request-> status;
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/result/'.$filename;
            $file->move(public_path('backdoor/uploads/result'),$filename);
            $data->image =$fileLocation;
        }
        $data->save();
        return back()->with('success','Update Successfully');
        
    }
    
    public function confirmContent(Request $request){
        $data = new contentmangement();
        $data-> menu           =$request->menu;
        $data->	page_name      = $request-> page_name;
        $data->	page_title        = $request-> page_title;
        $data->	page_headline          = $request-> page_headline;
        $data-> text_content           =$request->text_content;
        $data->	status      = $request-> status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return redirect()->route('contentlist');
        
    }    
    
    public function updateContent(Request $request){
        $data =  contentmangement::find($request->id);
        $data-> menu           =$request->menu;
        $data->	page_name      = $request-> page_name;
        $data->	page_title        = $request-> page_title;
        $data->	page_headline          = $request-> page_headline;
        $data-> text_content           =$request->text_content;
        $data->	status      = $request-> status;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','Update successfully');
        
    }

    public function photAddConfirm(Request $request){
        $data = new PhotoGallery();
        $data->	title   = $request->title;
        $data->	details   = $request->details;          
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return redirect()->route('photList');
    }    
    
    public function photUpdate(Request $request){
        $data =  PhotoGallery::find($request->id);
        $data->	title   = $request->title;
        $data->	details   = $request->details;        
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','Update Successfully');
    }    
    
    public function videoAddConfirm(Request $request){
        $data = new VideoGallery();
        $data->	title       = $request->title;
        $data->	details     = $request->details;   
        $data-> location    = $request->location;
        // if($request->file('location')){
        //     $file = $request->file('location');
        //     $filename = date('Y.m.d').$file->getClientOriginalName();
        //     $fileLocation = 'public/backdoor/uploads/video/'.$filename;
        //     $file->move(public_path('backdoor/uploads/video'),$filename);
        //     $data->location=$fileLocation;
        // }
        $data->save();
        return redirect()->route('videolist');
    }    
    
    public function videoAddUpdate(Request $request){
        $data =  VideoGallery::find($request->id);
        $data->	title       = $request->title;
        $data->	details     = $request->details; 
        $data-> location    = $request->location;        
        // if($request->file('location')){
        //     $file = $request->file('location');
        //     $filename = date('Y.m.d').$file->getClientOriginalName();
        //     $fileLocation = 'public/backdoor/uploads/video/'.$filename;
        //     $file->move(public_path('backdoor/uploads/video'),$filename);
        //     $data->location =$fileLocation;
        // }
        $data->save();
        return back()->with('success','Update successfuly');
    }

    public function sliderConfirm(Request $request){
        $data =  new SliderGallery();
        $data->	title       = $request->title;
        $data->	details     = $request->details;          
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/Slider/'.$filename;
            $file->move(public_path('backdoor/uploads/Slider'),$filename);
            $data->location =$fileLocation;
        }
        $data->save();
        return redirect()->route('sliderlist');
    }
    
    public function sliderUpdate(Request $request){
        $data =  SliderGallery::find($request->id);
        $data->	title       = $request->title;
        $data->	details     = $request->details;          
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/Slider/'.$filename;
            $file->move(public_path('backdoor/uploads/Slider'),$filename);
            $data->location =$fileLocation;
        }
        $data->save();
        return back()->with('success','Update successfuly');
    }
    public function changePassword(Request $request){
        if($request->newPassword != $request->confirmPassword):
            return back()->with('error','Sorry! Confirm password does not match');
        else:
            $data =  AdminPanel::find($request->id);
            $hashPass= $data->adminpassword;
            $auth= Hash::check($request->prevewPassowrd,$hashPass);
            if($auth):
                $authPass = Hash::make($request->newPassword);
                $data->	adminpassword       = $authPass;
                $data->	plaine_password     = $request->newPassword; 
                $data->save();
                return back()->with('success','Update successfuly');
            else:
                return back()->with('error','Old password wrong provide');
            endif;
        endif;
        
        
        
        
        
            
        
    }
































    
    
    
    
    
}
