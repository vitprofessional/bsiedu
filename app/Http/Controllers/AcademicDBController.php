<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Probidhan;
use App\Models\Syllabus;
use App\Models\SemisterPlan;
use App\Models\ClassRoutine;
use App\Models\ExamRoutine;
use App\Models\AcademicCalender;
use App\Models\InHouseTeacher;
use App\Models\InHouseStaff;
use App\Models\TrainingSubjectWise;
use App\Models\resultmodel;
use Hash;
use Validator;

class AcademicDBController extends Controller
{
    public function __construct(){
        $this->middleware('bsiadmin');
    }
    
    //Syllabus table manage controller
    public function createsyllabus(Request $requ){
        //return 11;
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $chk = Syllabus::where(['semister'=>$requ->semister])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Syllabus already exist');
            //return 0;
        else:
            $syllabus = new Syllabus();
            $syllabus->department       =   $requ->department;
            $syllabus->semister         =   $requ->semister;
            $syllabus->probidhan        =   $requ->probidhan;
            $syllabus->status           =   $requ->prostatus;
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/syllabus/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/syllabus/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$syllabus->avatar = $filenametostore;
    		endif;
            //$syllabus->avatar          =$requ->;
            if($syllabus->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/syllabus/', $filenametostore);
		        endif;
                return back()->with('success','Success! Syllabus created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create Syllabus');
            endif;
        endif;
    }
    //Update syllabus profile details
    public function updatesyllabus(Request $requ){
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $syllabus = Syllabus::find($requ->proid);
        //return count($chk);
        if(!empty($syllabus)):
            $syllabus->department       =   $requ->department;
            $syllabus->semister         =   $requ->semister;
            $syllabus->probidhan        =   $requ->probidhan;
            $syllabus->status           =   $requ->prostatus;
            //$syllabus->avatar          =$requ->;
            if($syllabus->save()):
                return back()->with('success','Success! Syllabus update successfully');
            else:
                return back()->with('error','Sorry! There was an error to update Syllabus');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update Syllabus');
        endif;
    }
    //Update profile picture controller
    public function updatesyllabusobject(Request $requ){
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        //return 11;
        $syllabus = Syllabus::find($requ->proid);
        //return count($syllabus);
        if(!empty($syllabus)):
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/syllabus/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/syllabus/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$syllabus->avatar = $filenametostore;
    		endif;
            //$syllabus->avatar          =$requ->;
            if($syllabus->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/syllabus/', $filenametostore);
		        endif;
                return back()->with('success','Success! Syllabus updated successfully');
            else:
                return back()->with('error','Sorry! There was an error to update syllabus');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update syllabus');
        endif;
    }
   
    //delete profile picture controller
    public function delSyllabusObject($id){
        $profile = Syllabus::find($id);
		//image save to database
		if(!empty($profile->avatar)):
			if(file_exists(storage_path("frontend/uploads/syllabus/").$profile->avatar)):
				unlink(storage_path('frontend/uploads/syllabus/'.$profile->avatar));
			endif;
		endif;
		$profile->avatar = "";
		if($profile->save()):
		    return back()->with('success','Syllabus remove successfully');
		else:
		    return back()->with('error','Syllabus remove failed');
		endif;
    }
    //delete profile picture controller
    public function deletesyllabus($id){
        $profile = Syllabus::find($id);
		if($profile->delete()):
		    return back()->with('success','Syllabus delete successfully');
		else:
		    return back()->with('error','Syllabus deletion failed');
		endif;
    }
    
    //result table manage controller
    public function resultList(){
        $result = resultmodel::orderBy('id','DESC')->get();
        return view('backdoor.result',['result'=>$result]);
    }
    
    public function newResult(){
        return view('backdoor.newResult');
    }
    
    public function createResult(Request $requ){
        //return 11;
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $chk = resultmodel::where(['title'=>$requ->title])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Result already exist');
            //return 0;
        else:
            $result = new resultmodel();
            $result->title       =   $requ->title;
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/result/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/result/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$result->avatar = $filenametostore;
    		endif;
            //$result->avatar          =$requ->;
            if($result->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/result/', $filenametostore);
		        endif;
                return back()->with('success','Success! Result created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create Result');
            endif;
        endif;
    }
    public function editResult($id){
        $result = resultmodel::find($id);
        return view('backdoor.editResult',['result'=>$result]);
    }
    //Update syllabus profile details
    public function updateResult(Request $requ){
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $result = resultmodel::find($requ->resId);
        //return count($chk);
        $result->title       =   $requ->title;
		if(!empty($requ->file('avatar'))):
			if(file_exists(storage_path("frontend/uploads/result/").$requ->avatar)):
				unlink(storage_path('frontend/uploads/result/'.$requ->avatar));
			endif;
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$result->avatar = $filenametostore;
		endif;
        //$result->avatar          =$requ->;
        if($result->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs('public/frontend/uploads/result/', $filenametostore);
	        endif;
            return back()->with('success','Success! Result updated successfully');
        else:
            return back()->with('error','Sorry! There was an error to update Result');
        endif;
    }
    
    //delete profile picture controller
    public function delResultObject($id){
        $profile = resultmodel::find($id);
		//image save to database
		if(!empty($profile->avatar)):
			if(file_exists(storage_path("frontend/uploads/result/").$profile->avatar)):
				unlink(storage_path('frontend/uploads/result/'.$profile->avatar));
			endif;
		endif;
		$profile->avatar = "";
		if($profile->save()):
		    return back()->with('success','Result remove successfully');
		else:
		    return back()->with('error','Result remove failed');
		endif;
    }
    //delete profile picture controller
    public function delResult($id){
        $profile = resultmodel::find($id);
		if($profile->delete()):
		    return back()->with('success','Result delete successfully');
		else:
		    return back()->with('error','Result deletion failed');
		endif;
    }
    
    //training table teacher manage controller
    public function inHouseTeacher(){
        $iht = InHouseTeacher::orderBy('id','DESC')->get();
        return view('backdoor.inHouseTeacherList',['iht'=>$iht]);
    }
    
    public function newInHouseTeacher(){
        return view('backdoor.newInHouseTeacher');
    }
    
    public function createInHouseTeacher(Request $requ){
        //return 11;
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $chk = InHouseTeacher::where(['title'=>$requ->title])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Traning list already exist');
            //return 0;
        else:
            $int = new InHouseTeacher();
            $int->title       =   $requ->title;
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/inhouse/teacher/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/inhouse/teacher/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$int->avatar = $filenametostore;
    		endif;
            //$result->avatar          =$requ->;
            if($int->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/inhouse/teacher/', $filenametostore);
		        endif;
                return back()->with('success','Success! Training list created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create training list');
            endif;
        endif;
    }
    public function editInHouseTeacher($id){
        $int = InHouseTeacher::find($id);
        return view('backdoor.editInHouseTeacher',['int'=>$int]);
    }
    //Update syllabus profile details
    public function updateInHouseTeacher(Request $requ){
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $int = InHouseTeacher::find($requ->trainId);
        //return count($chk);
        $int->title       =   $requ->title;
		if(!empty($requ->file('avatar'))):
			if(file_exists(storage_path("frontend/uploads/inhouse/teacher/").$requ->avatar)):
				unlink(storage_path('frontend/uploads/inhouse/teacher/'.$requ->avatar));
			endif;
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$int->avatar = $filenametostore;
		endif;
        //$result->avatar          =$requ->;
        if($int->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs('public/frontend/uploads/inhouse/teacher/', $filenametostore);
	        endif;
            return back()->with('success','Success! Training list updated successfully');
        else:
            return back()->with('error','Sorry! There was an error to update training list');
        endif;
    }
    
    //delete in house teacher picture controller
    public function delInHouseTeacherObject($id){
        $int = InHouseTeacher::find($id);
		//image save to database
		if(!empty($int->avatar)):
			if(file_exists(storage_path("frontend/uploads/inhouse/teacher/").$int->avatar)):
				unlink(storage_path('frontend/uploads/inhouse/teacher/'.$int->avatar));
			endif;
		endif;
		$int->avatar = "";
		if($int->save()):
		    return back()->with('success','Training list remove successfully');
		else:
		    return back()->with('error','Training list remove failed');
		endif;
    }
    //delete in house teacher controller
    public function delInHouseTeacher($id){
        $int = InHouseTeacher::find($id);
		if($int->delete()):
		    return back()->with('success','Training list delete successfully');
		else:
		    return back()->with('error','Training list deletion failed');
		endif;
    }
    
    //training table manage controller
    public function inHouseStaff(){
        $iht = InHouseStaff::orderBy('id','DESC')->get();
        return view('backdoor.inHouseStaffList',['iht'=>$iht]);
    }
    
    public function newInHouseStaff(){
        return view('backdoor.newInHouseStaff');
    }
    
    public function createInHouseStaff(Request $requ){
        //return 11;
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $chk = InHouseStaff::where(['title'=>$requ->title])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Traning list already exist');
            //return 0;
        else:
            $int = new InHouseStaff();
            $int->title       =   $requ->title;
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/inhouse/staff/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/inhouse/staff/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$int->avatar = $filenametostore;
    		endif;
            //$result->avatar          =$requ->;
            if($int->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/inhouse/staff/', $filenametostore);
		        endif;
                return back()->with('success','Success! Training list created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create training list');
            endif;
        endif;
    }
    public function editInHouseStaff($id){
        $int = InHouseStaff::find($id);
        return view('backdoor.editInHouseStaff',['int'=>$int]);
    }
    //Update syllabus profile details
    public function updateInHouseStaff(Request $requ){
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $int = InHouseStaff::find($requ->trainId);
        //return count($chk);
        $int->title       =   $requ->title;
		if(!empty($requ->file('avatar'))):
			if(file_exists(storage_path("frontend/uploads/inhouse/staff/").$requ->avatar)):
				unlink(storage_path('frontend/uploads/inhouse/staff/'.$requ->avatar));
			endif;
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$int->avatar = $filenametostore;
		endif;
        //$result->avatar          =$requ->;
        if($int->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs('public/frontend/uploads/inhouse/staff/', $filenametostore);
	        endif;
            return back()->with('success','Success! Training list updated successfully');
        else:
            return back()->with('error','Sorry! There was an error to update training list');
        endif;
    }
    
    //delete in house staff picture controller
    public function delInHouseStaffObject($id){
        $int = InHouseStaff::find($id);
		//image save to database
		if(!empty($int->avatar)):
			if(file_exists(storage_path("frontend/uploads/inhouse/staff/").$int->avatar)):
				unlink(storage_path('frontend/uploads/inhouse/staff/'.$int->avatar));
			endif;
		endif;
		$int->avatar = "";
		if($int->save()):
		    return back()->with('success','Training list remove successfully');
		else:
		    return back()->with('error','Training list remove failed');
		endif;
    }
    //delete in house staff controller
    public function delInHouseStaff($id){
        $int = InHouseStaff::find($id);
		if($int->delete()):
		    return back()->with('success','Training list delete successfully');
		else:
		    return back()->with('error','Training list deletion failed');
		endif;
    }
    
    //training table manage controller
    public function trainingListSubjectwise(){
        $iht = TrainingSubjectWise::orderBy('id','DESC')->get();
        return view('backdoor.trainingListSubjectwise',['iht'=>$iht]);
    }
    
    public function newTrainingSubjectwise(){
        return view('backdoor.newTrainingSubjectwise');
    }
    
    public function createTrainingSubjectwise(Request $requ){
        //return 11;
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $chk = TrainingSubjectWise::where(['title'=>$requ->title])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Traning list already exist');
            //return 0;
        else:
            $int = new TrainingSubjectWise();
            $int->title       =   $requ->title;
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/inhouse/subjectwise/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/inhouse/subjectwise/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$int->avatar = $filenametostore;
    		endif;
            //$result->avatar          =$requ->;
            if($int->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/inhouse/subjectwise/', $filenametostore);
		        endif;
                return back()->with('success','Success! Training list created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create training list');
            endif;
        endif;
    }
    public function editTrainingSubjectwise($id){
        $int = TrainingSubjectWise::find($id);
        return view('backdoor.editTrainingSubjectwise',['int'=>$int]);
    }
    //Update syllabus profile details
    public function updateTrainingSubjectwise(Request $requ){
        $validator = Validator::make($requ->all(), [
            'file' => 'max:25600',
        ]);
        $int = TrainingSubjectWise::find($requ->trainId);
        //return count($chk);
        $int->title       =   $requ->title;
		if(!empty($requ->file('avatar'))):
			if(file_exists(storage_path("frontend/uploads/inhouse/subjectwise/").$requ->avatar)):
				unlink(storage_path('frontend/uploads/inhouse/subjectwise/'.$requ->avatar));
			endif;
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$int->avatar = $filenametostore;
		endif;
        //$result->avatar          =$requ->;
        if($int->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs('public/frontend/uploads/inhouse/subjectwise/', $filenametostore);
	        endif;
            return back()->with('success','Success! Training list updated successfully');
        else:
            return back()->with('error','Sorry! There was an error to update training list');
        endif;
    }
    
    //delete in house subjectwise picture controller
    public function delTrainingSubjectwiseObj($id){
        $int = TrainingSubjectWise::find($id);
		//image save to database
		if(!empty($int->avatar)):
			if(file_exists(storage_path("frontend/uploads/inhouse/subjectwise/").$int->avatar)):
				unlink(storage_path('frontend/uploads/inhouse/subjectwise/'.$int->avatar));
			endif;
		endif;
		$int->avatar = "";
		if($int->save()):
		    return back()->with('success','Training list remove successfully');
		else:
		    return back()->with('error','Training list remove failed');
		endif;
    }
    //delete in house staff controller
    public function delTrainingSubjectwise($id){
        $int = TrainingSubjectWise::find($id);
		if($int->delete()):
		    return back()->with('success','Training list delete successfully');
		else:
		    return back()->with('error','Training list deletion failed');
		endif;
    }
    
    //Probidhan table manage controller
    public function createprobidhan(Request $requ){
        //return 11;
        $chk = Probidhan::where(['probidhan'=>$requ->probidhan])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Probidhan already exist');
            //return 0;
        else:
            $probidhan = new Probidhan();
            $probidhan->department       =   $requ->department;
            $probidhan->probidhan        =   $requ->probidhan;
            $probidhan->status           =   $requ->prostatus;
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/probidhan/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/probidhan/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$probidhan->avatar = $filenametostore;
    		endif;
            //$probidhan->avatar          =$requ->;
            if($probidhan->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/probidhan/', $filenametostore);
		        endif;
                return back()->with('success','Success! Probidhan created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create Probidhan');
            endif;
        endif;
    }
    //Update probidhan profile details
    public function updateprobidhan(Request $requ){
        $probidhan = Probidhan::find($requ->proid);
        //return count($chk);
        if(!empty($probidhan)):
            $probidhan->department       =   $requ->department;
            $probidhan->probidhan        =   $requ->probidhan;
            $probidhan->status           =   $requ->prostatus;
            if($probidhan->save()):
                return back()->with('success','Success! Probidhan update successfully');
            else:
                return back()->with('error','Sorry! There was an error to update Probidhan');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update Probidhan');
        endif;
    }
    
    //  public function createemployee(Request $requ){
    //     //return 11;
    //     $chk = Employee::where(['phone_number'=>$requ->mobile])->where(['email'=>$requ->email])->get();
    //     //return count($chk);
    //     if(count($chk)>0):
    //         return back()->with('error','Sorry! Teacher/Employee profile already exist');
    //         //return 0;
    //     else:
    //         $employee = new Employee();
    //         $employee->name            =   $requ->employeename;
    //         $employee->father_name     =   $requ->fname;
    //         $employee->mother_name     =   $requ->mname;
    //         $employee->phone_number    =   $requ->mobile;
    //         $employee->gender          =   $requ->gender;
    //         $employee->merital_status  =   $requ->mstatus;
    //         $employee->designation     =   $requ->designation;
    //         $employee->rank            =   $requ->rank;
    //         $employee->pre_address     =   $requ->pre_address;
    //         $employee->per_address     =   $requ->per_address;
    //         $employee->birth_date      =   $requ->dateob;
    //         $employee->email           =   $requ->email;
    //         $employee->religion        =   $requ->religion;
    //         $employee->join_date       =   $requ->joindate;
    //         $employee->edu_quality     =   $requ->eduquality;
    //         $employee->bl_group        =   $requ->blgroup;
    //         $employee->status          =   $requ->prostatus;
    //         //return 1;
    // 		//image save to database
    // 		if(!empty($requ->file('avatar'))):
    // 			if(file_exists(storage_path("frontend/uploads/employee/").$requ->avatar)):
    // 				unlink(storage_path('frontend/uploads/employee/'.$requ->avatar));
    // 			endif;
    // 			//get filename with extension
    // 			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    // 			//get filename without extension
    // 			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    // 			//get file extension
    // 			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    // 			//filename to store
    // 			$filenametostore = $filename.'_'.time().'.'.$extension;		 
    			
    // 			$employee->avatar = $filenametostore;
    // 		endif;
    //         //$employee->avatar          =$requ->;
    //         if($employee->save()):
		  //      if(!empty($requ->file('avatar'))):
			 //       //Upload File
			 //       $requ->file('avatar')->storeAs('public/frontend/uploads/employee/', $filenametostore);	 
			 //       //Resize image here
			 //       $thumbnailpath = public_path('storage/frontend/uploads/employee/'.$filenametostore);
			 //       $img = Image::make($thumbnailpath)->resize(100, null, function($constraint) {
			 //           $constraint->aspectRatio();
			 //       });
			 //       $img->save($thumbnailpath);
		  //      endif;
    //             return back()->with('success','Success! Teacher/Employee profile created successfully');
    //         else:
    //             return back()->with('error','Sorry! There was an error to create Teacher/Employee profile');
    //         endif;
    //     endif;
    // }
    //Update profile picture controller
    public function updateprobidhanobject(Request $requ){
        //return 11;
        $probidhan = Probidhan::find($requ->proid);
        //return count($probidhan);
        if(!empty($probidhan)):
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/probidhan/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/probidhan/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$probidhan->avatar = $filenametostore;
    		endif;
            //$probidhan->avatar          =$requ->;
            if($probidhan->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/probidhan/', $filenametostore);
		        endif;
                return back()->with('success','Success! Probidhan updated successfully');
            else:
                return back()->with('error','Sorry! There was an error to update probidhan');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update probidhan');
        endif;
    }
    //delete profile picture controller
    public function delProbidhanObject($id){
        $profile = Probidhan::find($id);
		//image save to database
		if(!empty($profile->avatar)):
			if(file_exists(storage_path("frontend/uploads/probidhan/").$profile->avatar)):
				unlink(storage_path('frontend/uploads/probidhan/'.$profile->avatar));
			endif;
		endif;
		$profile->avatar = "";
		if($profile->save()):
		    return back()->with('success','Probidhan remove successfully');
		else:
		    return back()->with('error','Probidhan remove failed');
		endif;
    }
    //delete profile picture controller
    public function deleteprobidhan($id){
        $profile = Probidhan::find($id);
		if($profile->delete()):
		    return back()->with('success','Probidhan delete successfully');
		else:
		    return back()->with('error','Probidhan deletion failed');
		endif;
    }
    
    //SemisterPlan table manage controller
    public function createsemisterplan(Request $requ){
        //return 11;
        $chk = SemisterPlan::where(['subject'=>$requ->subject])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! SemisterPlan already exist');
            //return 0;
        else:
            $semisterplan = new SemisterPlan();
            $semisterplan->department       =   $requ->department;
            $semisterplan->semister         =   $requ->semister;
            $semisterplan->subject          =   $requ->subject;
            $semisterplan->status           =   $requ->prostatus;
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/semisterplan/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/semisterplan/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$semisterplan->avatar = $filenametostore;
    		endif;
            //$semisterplan->avatar          =$requ->;
            if($semisterplan->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/semisterplan/', $filenametostore);
		        endif;
                return back()->with('success','Success! SemisterPlan created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create SemisterPlan');
            endif;
        endif;
    }
    //Update semisterplan profile details
    public function updatesemisterplan(Request $requ){
        $semisterplan = SemisterPlan::find($requ->proid);
        //return count($chk);
        if(!empty($semisterplan)):
            $semisterplan->department       =   $requ->department;
            $semisterplan->semister         =   $requ->semister;
            $semisterplan->subject          =   $requ->subject;
            $semisterplan->status           =   $requ->prostatus;
            //$semisterplan->avatar          =$requ->;
            if($semisterplan->save()):
                return back()->with('success','Success! SemisterPlan update successfully');
            else:
                return back()->with('error','Sorry! There was an error to update SemisterPlan');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update SemisterPlan');
        endif;
    }
    //Update profile picture controller
    public function updatesemisterplanobject(Request $requ){
        //return 11;
        $semisterplan = SemisterPlan::find($requ->proid);
        //return count($semisterplan);
        if(!empty($semisterplan)):
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/semisterplan/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/semisterplan/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$semisterplan->avatar = $filenametostore;
    		endif;
            //$semisterplan->avatar          =$requ->;
            if($semisterplan->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/semisterplan/', $filenametostore);
		        endif;
                return back()->with('success','Success! SemisterPlan updated successfully');
            else:
                return back()->with('error','Sorry! There was an error to update semisterplan');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update semisterplan');
        endif;
    }
    //delete profile picture controller
    public function delSemisterPlanObject($id){
        $profile = SemisterPlan::find($id);
		//image save to database
		if(!empty($profile->avatar)):
			if(file_exists(storage_path("frontend/uploads/semisterplan/").$profile->avatar)):
				unlink(storage_path('frontend/uploads/semisterplan/'.$profile->avatar));
			endif;
		endif;
		$profile->avatar = "";
		if($profile->save()):
		    return back()->with('success','SemisterPlan remove successfully');
		else:
		    return back()->with('error','SemisterPlan remove failed');
		endif;
    }
    //delete profile picture controller
    public function deletesemisterplan($id){
        $profile = SemisterPlan::find($id);
		if($profile->delete()):
		    return back()->with('success','SemisterPlan delete successfully');
		else:
		    return back()->with('error','SemisterPlan deletion failed');
		endif;
    }
}
