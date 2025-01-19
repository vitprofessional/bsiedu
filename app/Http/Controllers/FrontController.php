<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Hash;
use \App\Models\AdminPanel;
use \App\Models\Jobplace;
use \App\Models\NeedyStudent;
use Auth;
use App\Models\Notice;
use App\Models\Staff;
use Intervention\Image\ImageManagerStatic as Image;

class FrontController extends Controller
{
    public function adminRegister(Request $request){
        $data= new AdminPanel();
        $data->adminname            = $request->username;
        $data->adminemail           = $request->email;
        $data->adminmobile          = $request->mobile;
        $data->adminspeech          = $request->space;
        $hashpass                   = Hash::make($request->password);
        $data->adminpassword        = $hashpass;
        $data->plaine_password      = $request->password;
        $data->position             = $request->position;
        $data->	status              = $request->status;
         if($request->file('adminimage')){
            $file = $request->file('adminimage');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;             
            $file->move(public_path('backdoor/uploads/user_images'),$filename);
            $data['adminimage']=$fileLocation;
        }
        $data->save();
        return redirect()->route('adminlogin');
    }
    
    public function savePlaceStudent(Request $request){
        $data= new Jobplace();
        $data->name         = preg_replace('/[^A-Za-z\-]/', '', $request->fullName);
        $data->email        = preg_replace('/[^A-Za-z0-9\-]/', '', $request->email);
        $data->mobile       = preg_replace('/[^A-Za-z0-9\-]/', '', $request->mobileNumber);
        $data->roll_number  = preg_replace('/[^A-Za-z0-9\-]/', '', $request->rollNumber);
        $data->session      = preg_replace('/[^A-Za-z0-9-\-]/', '', $request->sessionNumber);
        $data->position     = preg_replace('/[^A-Za-z\-]/', '', $request->position);
        $data->company      = preg_replace('/[^A-Za-z\-]/', '', $request->companyName);
        $data->details      = preg_replace('/[^A-Za-z\-]/', '', $request->jobDetails);
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $fileLocation = 'placement-cell/'.$filename;             
            $file->move(storage_path('app/public/frontend/uploads/placement-cell/'),$filename);
            $data->photo = $fileLocation;
        }
        if($data->save()):
	        if(!empty($request->file('avatar'))):
		        //Resize image here
		        $thumbnailpath = storage_path("app/public/frontend/uploads/".$fileLocation);
		        $img = Image::make($thumbnailpath)->resize(245, 245, function($constraint) {
		            $constraint->aspectRatio();
		        });
		        $img->save($thumbnailpath);
	        endif;
            return back()->with('success','Profile successfully created');
        else:
            return back()->with('error','Profile failed to create');
        endif;
    }
    
    public function saveNeedyStudent(Request $request){
        $data= new NeedyStudent();
        $data->name         = preg_replace('/[^A-Za-z\-]/', '', $request->fullName);
        $data->email        = preg_replace('/[^A-Za-z0-9\-]/', '', $request->email);
        $data->mobile       = preg_replace('/[^A-Za-z0-9\-]/', '', $request->mobileNumber);
        $data->roll_number  = preg_replace('/[^A-Za-z0-9\-]/', '', $request->rollNumber);
        $data->session      = preg_replace('/[^A-Za-z0-9-\-]/', '', $request->sessionNumber);
        if($request->file('avatar') && $request->file('cv')){
            // photo preaper for upload
            $photo = $request->file('avatar');
            $photoName = date("Y.m.d"). $photo->getClientOriginalName();
            $photoLocation = 'needy-student/'.$photoName;             
            $photo->move(storage_path('app/public/frontend/uploads/needy-student/'),$photoName);
            // cv prepare for upload
            $cv = $request->file('cv');
            $cvName = date("Y.m.d"). $cv->getClientOriginalName();
            $cvLocation = 'needy-student/'.$cvName;             
            $cv->move(storage_path('app/public/frontend/uploads/needy-student/'),$cvName);
            
            // store photo and cv to database
            $data->photo= $photoLocation;
            $data->cv   = $cvLocation;
        }
        if($data->save()):
            return back()->with('success','Profile successfully created');
        else:
            return back()->with('error','Profile failed to create');
        endif;
    }
    
    public function login(){
        return view("frontend.login");
    }

    public function adminLogin(Request $requ){
        $check = AdminPanel::where(['adminemail'=>$requ->adminemail,'adminpassword'=>$requ->password])->first();
        if($check):
            $hashPass = $check->adminpassword;
            $auth = $requ->password;
            if($auth):
                Session::regenerate();
                Session::put('bsiadmin',$check->id);
                return redirect(route('backhome'));
            else:
                return back()->with('error','Sorry! Wrong password provide');
            endif;
        else:
            return back()->with('error','Sorry! You have no permission to access this page');
        endif;
    }
    public function noticeDelete($id){
      $result= Notice::where('id',$id)->delete(); 
      return redirect()->route('adminNotice');
    }
    public function StuffDelete($id){
      $result=Staff::where('id',$id)->delete(); 
      return redirect()->route('adminstuff');
    }    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
