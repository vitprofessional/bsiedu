<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Student;
use App\Models\Notice;
use App\Models\TeacherPanel;
use App\Models\InfoBox;
use App\Models\BoxContent;
use App\Models\StaffPanel;
use App\Models\ImportantLink;
use Hash;
use Intervention\Image\ImageManagerStatic as Image;

class AdminDBController extends Controller
{
    public function __construct(){
        $this->middleware('bsiadmin');
    }
    
    public function teacherPanel(){
        $employee  = TeacherPanel::all();
        return view('backdoor.teacherList',['staff'=>$employee]);
    }
    
    public function infoBox(){
        $boxInfo = InfoBox::orderBy('id','DESC')->get();
        return view('backdoor.infoBox',['boxInfo'=>$boxInfo]);
    }
    
    public function newInfoBox(){
        return view('backdoor.newInfoBox');
    }
    
    public function saveInfoBox(Request $requ){
        $infoBox = new InfoBox();
        $infoBox->boxName = $requ->boxName;
		if(!empty($requ->file('avatar'))):
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$infoBox->avatar = $filenametostore;
		endif;
        if($infoBox->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs("public/frontend/uploads/box/", $filenametostore);	 
		        //Resize image here
		        $thumbnailpath = public_path("storage/frontend/uploads/box/".$filenametostore);
		        $img = Image::make($thumbnailpath)->resize(100, null, function($constraint) {
		            $constraint->aspectRatio();
		        });
		        $img->save($thumbnailpath);
	        endif;
            return back()->with('success','Success! Box created successfully');
        else:
            return back()->with('error','Sorry! There was an error to create box');
        endif;
    }
    
    public function editInfoBox($id){
        $boxInfo = InfoBox::find($id);
        return view('backdoor.editInfoBox',['boxInfo'=>$boxInfo]);
    }
    
    public function updateInfoBox(Request $requ){
        $infoBox = InfoBox::find($requ->infoId);
        $infoBox->boxName = $requ->boxName;
        if($infoBox->save()):
            return back()->with('success','Success! Box info update successfully');
        else:
            return back()->with('error','Sorry! There was an error to update box');
        endif;
    }
    
    public function delInfoBoxMedia($id){
        $infoBox = InfoBox::find($id);
		if(file_exists(storage_path("frontend/uploads/box/").$infoBox->avatar)):
			unlink(storage_path("frontend/uploads/box/".$infoBox->avatar));
		endif;
        $infoBox->avatar = "";
        if($infoBox->save()):
            return back()->with('success','Success! Box info update successfully');
        else:
            return back()->with('error','Sorry! There was an error to update box');
        endif;
    }
    
    public function updateInfoBoxMedia(Request $requ){
        $infoBox = InfoBox::find($requ->infoId);
		if(!empty($requ->file('avatar'))):
			if(file_exists(storage_path("frontend/uploads/box/").$infoBox->avatar)):
				unlink(storage_path("frontend/uploads/box/".$infoBox->avatar));
			endif;
			//get filename with extension
			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
			
			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
			
			//get file extension
			$extension = $requ->file('avatar')->getClientOriginalExtension();
			
			//filename to store
			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
			
			$infoBox->avatar = $filenametostore;
		endif;
        if($infoBox->save()):
	        if(!empty($requ->file('avatar'))):
		        //Upload File
		        $requ->file('avatar')->storeAs("public/frontend/uploads/box/", $filenametostore);	 
		        //Resize image here
		        $thumbnailpath = public_path("storage/frontend/uploads/box/".$filenametostore);
		        $img = Image::make($thumbnailpath)->resize(100, null, function($constraint) {
		            $constraint->aspectRatio();
		        });
		        $img->save($thumbnailpath);
	        endif;
            return back()->with('success','Success! Box media updated successfully');
        else:
            return back()->with('error','Sorry! There was an error to update box');
        endif;
    }
    
    public function delInfoBox($id){
        $infoBox = InfoBox::find($id);
        if($infoBox->delete()):
            return back()->with('success','Success! Box info deleted successfully');
        else:
            return back()->with('error','Sorry! There was an error to deleted box');
        endif;
    }
    
    
    
    public function importantLink(){
        $link = ImportantLink::orderBy('id','DESC')->get();
        return view('backdoor.importantLink',['importantLink'=>$link]);
    }
    
    public function newLink(){
        return view('backdoor.newLink');
    }
    
    public function saveLink(Request $requ){
        $link = new ImportantLink();
        $link->content  = $requ->content;
        $link->link     = $requ->link;
        if($link->save()):
            return back()->with('success','Success! Link created successfully');
        else:
            return back()->with('error','Sorry! There was an error to create link');
        endif;
    }
    
    public function editLink($id){
        $link = ImportantLink::find($id);
        return view('backdoor.editLink',['link'=>$link]);
    }
    
    public function updateLink(Request $requ){
        $link = ImportantLink::find($requ->linkId);
        $link->content  = $requ->content;
        $link->link     = $requ->link;
        if($link->save()):
            return back()->with('success','Success! Link update successfully');
        else:
            return back()->with('error','Sorry! There was an error to update link');
        endif;
    }
    
    public function delLink($id){
        $link = ImportantLink::find($id);
        if($link->delete()):
            return back()->with('success','Success! Link deleted successfully');
        else:
            return back()->with('error','Sorry! There was an error to deleted link');
        endif;
    }
    
    //information box content
    public function infoBoxContent($id){
        $boxInfo = BoxContent::where(['boxId'=>$id])->orderBy('id','DESC')->groupBy('contentTitle')->get();
        return view('backdoor.infoBoxContent',['boxInfo'=>$boxInfo]);
    }
    
    public function newInfoBoxContent(){
        $boxInfo = InfoBox::orderBy('id','DESC')->get();
        return view('backdoor.newInfoBoxContent',['boxInfo'=>$boxInfo]);
    }
    
    public function saveInfoBoxContent(Request $requ){
        if($requ->typeContent=="Link"):
            $infoBox = new BoxContent();
            $infoBox->boxId         = $requ->boxName;
            $infoBox->contentTitle  = $requ->headline;
            $infoBox->typeContent   = $requ->typeContent;
            $infoBox->link          = $requ->link;
            if($infoBox->save()):
                return back()->with('success','Success! Box content created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create content on box');
            endif;
        else:
            $files = array();
            $i = 0;
            foreach($files = $requ->avatar as $key):
        		if(!empty($files[$i])):
        			//get filename with extension
        			$filenamewithextension = $files[$i]->getClientOriginalName();
        			
        			//get filename without extension
        			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        			
        			//get file extension
        			$extension = $files[$i]->getClientOriginalExtension();
        			
        			//filename to store
        			$filenametostore = md5($filename.'_'.time()).'.'.$extension;
        			
    		        $files[$i]->storeAs("public/frontend/uploads/box/content", $filenametostore);
                    $infoBox = new BoxContent();
        			$infoBox->avatar        = $filenametostore;
                    $infoBox->boxId         = $requ->boxName;
                    $infoBox->contentTitle  = $requ->headline;
                    $infoBox->typeContent   = $requ->typeContent;
                    $infoBox->save();
                else:
                    return back()->with('error','Sorry! There was an error to create content in box');
                endif;
                $i++; 
    		endforeach;
            return back()->with('success','Success! Box content created successfully');
    	endif;
    }
    
    public function editInfoBoxContent($id){
        $boxContent = BoxContent::find($id);
        $boxInfo = InfoBox::orderBy('id','DESC')->get();
        return view('backdoor.editInfoBoxContent',['boxInfo'=>$boxInfo,'boxContent'=>$boxContent]);
    }
    
    
    public function updateInfoBoxContent(Request $requ){
        
        if($requ->typeContent=="Link"):
            $infoBox = BoxContent::find($requ->contentId);
            $infoBox->boxId         = $requ->boxName;
            $infoBox->contentTitle  = $requ->headline;
            $infoBox->typeContent   = $requ->typeContent;
            $infoBox->link          = $requ->link;
            if($infoBox->save()):
                return back()->with('success','Success! Box content created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create content on box');
            endif;
        else:
            if(!empty($requ->avatar)):
                $files = array();
                $i = 0;
                foreach($files = $requ->avatar as $key):
            		if(!empty($files[$i])):
            			//get filename with extension
            			$filenamewithextension = $files[$i]->getClientOriginalName();
            			
            			//get filename without extension
            			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            			
            			//get file extension
            			$extension = $files[$i]->getClientOriginalExtension();
            			
            			//filename to store
            			$filenametostore = md5($filename.'_'.time()).'.'.$extension;
            			
        		        $files[$i]->storeAs("public/frontend/uploads/box/content", $filenametostore);
                        $infoBox = new BoxContent();
            			$infoBox->avatar        = $filenametostore;
                        $infoBox->boxId         = $requ->boxName;
                        $infoBox->contentTitle  = $requ->headline;
                        $infoBox->typeContent   = $requ->typeContent;
                        $infoBox->save();
                    else:
                        return back()->with('error','Sorry! There was an error to create content in box');
                    endif;
                    $i++; 
        		endforeach;
        	else:
                $infoBox = BoxContent::find($requ->contentId);
                $infoBox->boxId         = $requ->boxName;
                $infoBox->contentTitle  = $requ->headline;
                $infoBox->typeContent   = $requ->typeContent;
                $infoBox->save();
            endif;
            return back()->with('success','Success! Box content created successfully');
    	endif;
    }
    
    public function delInfoBoxContent($id){
        $infoBox = BoxContent::find($id);
        if($infoBox->delete()):
            return back()->with('success','Success! Box info deleted successfully');
        else:
            return back()->with('error','Sorry! There was an error to deleted box');
        endif;
    }
    
    
    public function updateInfoBoxContentMedia(Request $requ){
        $getData = BoxContent::where(['boxId'=>$requ->boxId,'contentTitle'=>$requ->title])->first();
        if($requ->typeContent=="Link"):
            $infoBox = new BoxContent();
            $infoBox->boxId         = $requ->boxName;
            $infoBox->contentTitle  = $requ->headline;
            $infoBox->typeContent   = $requ->typeContent;
            $infoBox->link          = $requ->link;
            if($infoBox->save()):
                return back()->with('success','Success! Box content created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create content on box');
            endif;
        else:
            $files = array();
            $i = 0;
            foreach($files = $requ->avatar as $key):
        		if(!empty($files[$i])):
        			//get filename with extension
        			$filenamewithextension = $files[$i]->getClientOriginalName();
        			
        			//get filename without extension
        			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        			
        			//get file extension
        			$extension = $files[$i]->getClientOriginalExtension();
        			
        			//filename to store
        			$filenametostore = md5($filename.'_'.time()).'.'.$extension;
        			
    		        $files[$i]->storeAs("public/frontend/uploads/box/content", $filenametostore);
                    $infoBox = new BoxContent();
        			$infoBox->avatar        = $filenametostore;
                    $infoBox->boxId         = $requ->boxName;
                    $infoBox->contentTitle  = $requ->headline;
                    $infoBox->typeContent   = $requ->typeContent;
                    $infoBox->save();
                else:
                    return back()->with('error','Sorry! There was an error to create content in box');
                endif;
                $i++; 
    		endforeach;
            return back()->with('success','Success! Box content created successfully');
    	endif;
    }
    
    
    
    
    public function newProfile($profile){
        return view('backdoor.newProfile',['profileType'=>$profile]);
    }
    
    //Employee table manage controller
    public function createProfile(Request $requ){
        //return 11;
            if($requ->profileType=="Teacher"):
                $chk = TeacherPanel::where(['phone_number'=>$requ->mobile,'email'=>$requ->email])->get();
            else:
                $chk = StaffPanel::where(['phone_number'=>$requ->mobile,'email'=>$requ->email])->get();
            endif;
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Profile already exist');
            //return 0;
        else:
            if($requ->profileType=="Teacher"):
                $employee = new TeacherPanel();
                $path       = "teacher";
            else:
                $employee = new StaffPanel();
                $path       = "staff";
            endif;
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
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/$path/").$requ->avatar)):
    				unlink(storage_path("frontend/uploads/$path/".$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$employee->avatar = $filenametostore;
    		endif;
            //$employee->avatar          =$requ->;
            if($employee->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs("public/frontend/uploads/$path/", $filenametostore);	 
			        //Resize image here
			        $thumbnailpath = public_path("storage/frontend/uploads/$path/".$filenametostore);
			        $img = Image::make($thumbnailpath)->resize(100, null, function($constraint) {
			            $constraint->aspectRatio();
			        });
			        $img->save($thumbnailpath);
		        endif;
                return back()->with('success','Success! Profile created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create profile');
            endif;
        endif;
    }
    
    public function editProfile($profile,$id){
        if($profile=="Teacher"):
            $employee = TeacherPanel::find($id);
        else:
            $employee = StaffPanel::find($id);
        endif;
        return view('backdoor.editProfile',['staff'=>$employee,'profileType'=>$profile]);
    }
    
    public function updateProfile(Request $requ){
        if($requ->profileType=="Teacher"):
            $employee = TeacherPanel::find($requ->profileId);
        else:
            $employee = StaffPanel::find($requ->profileId);
        endif;
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
    
    public function delProfile($profileType,$id){
        if($profileType=="Teacher"):
            $employee = TeacherPanel::find($id);
        else:
            $employee = StaffPanel::find($id);
        endif;
        if(!empty($employee)):
            $employee->delete();
            return back()->with('success','Success! Profile deleted successfull');
        else:
            return back()->with('error','Sorry! Profile deletion failed');
        endif;
    }
    //Update teacher profile picture controller
    public function updateProfilePic(Request $requ){
        if($requ->profileType=="Teacher"):
            $employee = TeacherPanel::find($requ->profileId);
            $path       = "teacher";
        else:
            $employee = StaffPanel::find($requ->profileId);
            $path       = "staff";
        endif;
        if(!empty($employee)):
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/$path/").$requ->avatar)):
    				unlink(storage_path("frontend/uploads/$path/".$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$employee->avatar = $filenametostore;
    		endif;
            //$employee->avatar          =$requ->;
            if($employee->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs("public/frontend/uploads/$path/", $filenametostore);	 
			        //Resize image here
			        $thumbnailpath = public_path("storage/frontend/uploads/$path/".$filenametostore);
			        $img = Image::make($thumbnailpath)->resize(100, null, function($constraint) {
			            $constraint->aspectRatio();
			        });
			        $img->save($thumbnailpath);
		        endif;
                return back()->with('success','Success! Profile picture updated successfully');
            else:
                return back()->with('error','Sorry! There was an error to update profile picture');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update profile picture');
        endif;
    }
    
    public function delProfilePic($id,$profile){
        if($profile=="Teacher"):
            $employee = TeacherPanel::find($id);
            $path       = "teacher";
        else:
            $employee = StaffPanel::find($id);
            $path       = "staff";
        endif;
		//image save to database
		if(!empty($employee->avatar)):
			if(file_exists(storage_path("frontend/uploads/$path/").$employee->avatar)):
				unlink(storage_path("frontend/uploads/$path/".$employee->avatar));
			endif;
		endif;
		$employee->avatar = "";
		if($employee->save()):
		    return back()->with('success','Profile picture remove successfully');
		else:
		    return back()->with('error','Profile picture remove failed');
		endif;
    }
    
    // Employee panel controller
    public function employeePanel(){
        $employee  = StaffPanel::all();
        return view('backdoor.staffList',['employee'=>$employee]);
    }
    
    public function newEmployeeProfile(){
        return view('backdoor.newEmployee');
    }
    
    //Employee table manage controller
    public function createEmployee(Request $requ){
        //return 11;
        $chk = StaffPanel::where(['phone_number'=>$requ->mobile,'email'=>$requ->email])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Profile already exist');
            //return 0;
        else:
            $employee = new StaffPanel();
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
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/staff/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/staff/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$employee->avatar = $filenametostore;
    		endif;
            //$employee->avatar          =$requ->;
            if($employee->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/staff/', $filenametostore);	 
			        //Resize image here
			        $thumbnailpath = public_path('storage/frontend/uploads/staff/'.$filenametostore);
			        $img = Image::make($thumbnailpath)->resize(100, null, function($constraint) {
			            $constraint->aspectRatio();
			        });
			        $img->save($thumbnailpath);
		        endif;
                return back()->with('success','Success! Profile created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create profile');
            endif;
        endif;
    }
    
    public function editEmployee($id){
        $employee  = StaffPanel::find($id);
        return view('backdoor.editGenProfile',['employee'=>$employee]);
    }
    
    public function updateEmployee(Request $requ){
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
    
    public function delEmployee($id){
        $employee  = StaffPanel::find($id);
        if(!empty($employee)):
            $employee->delete();
            return back()->with('success','Success! Profile deleted successfull');
        else:
            return back()->with('error','Sorry! Profile deletion failed');
        endif;
    }
    //Update teacher profile picture controller
    public function updateEmployeePic(Request $requ){
        $employee = StaffPanel::find($requ->employeeId);
        if(!empty($employee)):
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/staff/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/staff/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$employee->avatar = $filenametostore;
    		endif;
            //$employee->avatar          =$requ->;
            if($employee->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/staff/', $filenametostore);	 
			        //Resize image here
			        $thumbnailpath = public_path('storage/frontend/uploads/staff/'.$filenametostore);
			        $img = Image::make($thumbnailpath)->resize(100, null, function($constraint) {
			            $constraint->aspectRatio();
			        });
			        $img->save($thumbnailpath);
		        endif;
                return back()->with('success','Success! Profile picture updated successfully');
            else:
                return back()->with('error','Sorry! There was an error to update profile picture');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update profile picture');
        endif;
    }
    
    public function delEmployeePic($id){
        $profile = StaffPanel::find($id);
		//image save to database
		if(!empty($profile->avatar)):
			if(file_exists(storage_path("frontend/uploads/staff/").$profile->avatar)):
				unlink(storage_path('frontend/uploads/staff/'.$profile->avatar));
			endif;
		endif;
		$profile->avatar = "";
		if($profile->save()):
		    return back()->with('success','Profile picture remove successfully');
		else:
		    return back()->with('error','Profile picture remove failed');
		endif;
    }
    
    
    public function admitstudent(Request $request){
            $student = new Student();
            $student->name            =   $request->studentname;
            if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $student->avatar =$fileLocation;
        }
        $student->save();
        return back()->with('success','Great! Year Planing created successfully');
    }
    
   public function updateStudent(Request $request){
            $student = Student::find($request->proid);
            $student->name            =   $request->studentname;
            if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $student->avatar =$fileLocation;
        }
        $student->save();
        return back()->with('success','Great! Year Planing created successfully');
    }    
    
    //delete profile picture controller
    public function delStudentPic($id){
        $profile = Student::find($id);
		//image save to database
		if(!empty($profile->avatar)):
			if(file_exists(storage_path("frontend/uploads/student/").$profile->avatar)):
				unlink(storage_path('frontend/uploads/student/'.$profile->avatar));
			endif;
		endif;
		$profile->avatar = "";
		if($profile->save()):
		    return back()->with('success','Profile picture remove successfully');
		else:
		    return back()->with('error','Profile picture remove failed');
		endif;
    }
    //delete profile picture controller
    public function deletestudent($id){
        $profile = Student::find($id);
		if($profile->delete()):
		    return back()->with('success','Profile details delete successfully');
		else:
		    return back()->with('error','Profile details deletion failed');
		endif;
    }
    
    
    
    
    //notice db controller
    //Notice table manage controller
    public function createnotice(Request $requ){
        //return 11;
        $chk = Notice::where(['title'=>$requ->title])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Notice already exist');
            //return 0;
        else:
            $notice = new Notice();
            $notice->title  =   $requ->title    ;
            $notice->status =   $requ->prostatus;
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/notice/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/notice/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$notice->notice_location = $filenametostore;
    		endif;
            //$notice->avatar          =$requ->;
            if($notice->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/notice/', $filenametostore);
		        endif;
                return back()->with('success','Success! Notice created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create Notice');
            endif;
        endif;
    }
    //Update notice profile details
    public function updatenotice(Request $requ){
        $notice = Notice::find($requ->proid);
        //return count($chk);
        if(!empty($notice)>0):
            $notice->title  =   $requ->title    ;
            $notice->status =   $requ->prostatus;
            //$notice->avatar          =$requ->;
            if($notice->save()):
                return back()->with('success','Success! Notice update successfully');
            else:
                return back()->with('error','Sorry! There was an error to update Notice');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update Notice');
        endif;
    }
    //Update profile picture controller
    public function updatenoticeobject(Request $requ){
        //return 11;
        $notice = Notice::find($requ->proid);
        //return count($chk);
        if(!empty($notice)>0):
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/notice/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/notice/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = md5($filename.'_'.time()).'.'.$extension;		 
    			
    			$notice->notice_location = $filenametostore;
    		endif;
            //$notice->avatar          =$requ->;
            if($notice->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/notice/', $filenametostore);
		        endif;
                return back()->with('success','Success! Notice updated successfully');
            else:
                return back()->with('error','Sorry! There was an error to update notice');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update notice');
        endif;
    }
    //delete profile picture controller
    public function delNoticeObject($id){
        $profile = Notice::find($id);
		//image save to database
		if(!empty($profile->avatar)):
			if(file_exists(storage_path("frontend/uploads/notice/").$profile->avatar)):
				unlink(storage_path('frontend/uploads/notice/'.$profile->avatar));
			endif;
		endif;
		$profile->notice_location = "";
		if($profile->save()):
		    return back()->with('success','Notice remove successfully');
		else:
		    return back()->with('error','Notice remove failed');
		endif;
    }
    //delete profile picture controller
    public function deletenotice($id){
        $profile = Notice::find($id);
		if($profile->delete()):
		    return back()->with('success','Notice delete successfully');
		else:
		    return back()->with('error','Notice deletion failed');
		endif;
    }
}
