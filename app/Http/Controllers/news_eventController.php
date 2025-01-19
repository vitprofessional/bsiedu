<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addmission_info_model;
use App\Models\jobplacement__model;
use App\Models\resource_management_model;
use App\Models\student_arcive_model;
use App\Models\yearly_bay_planing_model;
use App\Models\yearly_planing_model;
use App\Models\PreviousPrincipal;
use App\Models\instituteDetailsModel;
use App\Models\resultmodel;

class news_eventController extends Controller
{
    public function yearplaning()
    {
        $result=yearly_planing_model::get();
        return view('backdoor.yearplaning',['Deatkey'=>$result]);
    }
    
    public function Newyearplaning()
    {
        return view('backdoor.newYearplaning');
    } 
    
        public function storeYearPlan(Request $request){
        $data = new yearly_planing_model();
        $data->	title   = $request->title;
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Year Planing created successfully');
        
    }
    public function editeYearPlaning($id)
    {
        $id=yearly_planing_model::find($id);
        return view('backdoor.editeYearPlaning',['Datakey'=>$id]);
    }
    
    public function updateYearPlaning(Request $request)
    {
        $data= yearly_planing_model::find($request->id);
        $data->title    = $request->title;
        
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
         return back()->with('success','Data updated successfully');
    }
    public function yearPlaningDelete($id)
    {
       $id=yearly_planing_model::find($id);
       if($id->delete()){
           return back()->with('success','Remove year planing success');
       }else{
           return back()->with('error','Remove year planing Faile');
       }
    }
    
    
    // End Yearly Planing ////////////
    
    
    public function Admission()
    {
        $result=addmission_info_model::get();
        return view('backdoor.admissionInfo',['Deatkey'=>$result]);
    }

    public function NewAddmission()
    {
        return view('backdoor.newAddmission');
    }
    
        public function storeAddmission(Request $request){
        $data = new addmission_info_model();
        $data->	title   = $request->title;
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Year Addmission created successfully');
        
    }
    
    public function EditeAddmission($id)
    {
        $id=addmission_info_model::find($id);
        return view('backdoor.editeAddmission',['Datakey'=>$id]);
    }
    
    public function updateAddmission(Request $request)
    {
        $data= addmission_info_model::find($request->id);
        $data->title    = $request->title;
        
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
         return back()->with('success','Data updated successfully');
    }
    
    public function AddmissionDelete($id)
    {
       $id=addmission_info_model::find($id);
       if($id->delete()){
           return back()->with('success','Remove year planing success');
       }else{
           return back()->with('error','Remove year planing Faile');
       }
    }  
    
    
    // End Addmission ///
    
    // Start Year Bay planing//
    
    public function yearbayplaning()
    {
        $result=yearly_bay_planing_model::get();
        return view('backdoor.YearBayPlaning',['Deatkey'=>$result]);
    }
    
    public function NewYearBayPlaning()
    {
        return view('backdoor.newyearBayplaning');
    }
    
    public function storeYearBayPlaning(Request $request){
        $data = new yearly_bay_planing_model();
        $data->	title   = $request->title;
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Year Bay Planing created successfully');
        
    }
    
    public function EditeYearBayPlaning($id)
    {
        $id=yearly_bay_planing_model::find($id);
        return view('backdoor.editeYearBayPlaning',['Datakey'=>$id]);
    }
    
    public function updateYearBay(Request $request)
    {
        $data= yearly_bay_planing_model::find($request->id);
        $data->title    = $request->title;
        
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
         return back()->with('success','Data updated successfully');
    }
    
    public function YearBayPlaningDelete($id)
    {
       $id=yearly_bay_planing_model::find($id);
       if($id->delete()){
           return back()->with('success','Remove year planing success');
       }else{
           return back()->with('error','Remove year planing Faile');
       }
    }
    
    // End Year Bay Planing//
    
    
    public function jobplacement()
    {
        $result=jobplacement__model::get();
        return view('backdoor.jobplacement',['Deatkey'=>$result]);
    }   
    
    public function newjobplacement()
    {
        return view('backdoor.newjobplacement');
    }
    
    public function storeJobplacement(Request $request){
        $data = new jobplacement__model();
        $data->	title   = $request->title;
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Year Bay Planing created successfully');
        
    }
    
    public function Editejob($id)
    {
        $id=jobplacement__model::find($id);
        return view('backdoor.editejob',['Datakey'=>$id]);
    }    
    
    public function updatejob(Request $request)
    {
        $data= jobplacement__model::find($request->id);
        $data->title    = $request->title;
        
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
         return back()->with('success','Data updated successfully');
    }
    
    public function jobplacementDelete($id)
    {
       $id=jobplacement__model::find($id);
       if($id->delete()){
           return back()->with('success','Remove year planing success');
       }else{
           return back()->with('error','Remove year planing Faile');
       }
    } 
    
        // Research management    ..////
        
    public function researchmanagement()
    {
        $result=resource_management_model::get();
        return view('backdoor.reserarchManagement',['Deatkey'=>$result]);
    } 
    
    public function newresearch()
    {
        return view('backdoor.newresercemanagement');
    }
    
    public function storeReserch(Request $request)
    {
        $data = new resource_management_model();
        $data->	title   = $request->title;
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Year Bay Planing created successfully');
        
    }
    
    public function EditeResearch($id)
    {
        $id=resource_management_model::find($id);
        return view('backdoor.editeReserchManagement',['Datakey'=>$id]);
    }

   public function updateReserch(Request $request)
    {
        $data= resource_management_model::find($request->id);
        $data->title    = $request->title;
        
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
         return back()->with('success','Data updated successfully');
    }
    
    public function researchManagementtDelete($id)
    {
       $id=resource_management_model::find($id);
       if($id->delete()){
           return back()->with('success','Remove year planing success');
       }else{
           return back()->with('error','Remove year planing Faile');
       }
    }
    
    /// student Arcive ////
    
   public function studentArcive()
    {
        $result=student_arcive_model::get();
        return view('backdoor.studentArcive',['Deatkey'=>$result]);
    }
    
   public function NewstudentArcive()
    {
        return view('backdoor.newStudentArcive');
    } 
    
    public function storeStudentArcive(Request $request)
    {
        $data = new student_arcive_model();
        $data->	title   = $request->title;
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Year Bay Planing created successfully');
        
    }
    
    public function EditeStudentArciv($id)
    {
        $id=student_arcive_model::find($id);
        return view('backdoor.editeStudentArcive',['Datakey'=>$id]);
    } 
    
   public function updateStudentArcive(Request $request)
    {
        $data= student_arcive_model::find($request->id);
        $data->title    = $request->title;
        
        if($request->file('file')){
            $file = $request->file('file');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->file =$fileLocation;
        }
        $data->save();
         return back()->with('success','Data updated successfully');
    }
    
    public function StudentArciveDelete($id)
    {
       $id=student_arcive_model::find($id);
       if($id->delete()){
           return back()->with('success','Remove year planing success');
       }else{
           return back()->with('error','Remove year planing Faile');
       }
    }
    
    public function Exprincipal()
    {
        $result=PreviousPrincipal::get();
        return view('backdoor.exprincipal',['Deatkey'=>$result]);
    }
    
    public function NewExprincipal()
    {
        return view('backdoor.naewexaprincipal');
    }
    
    public function storeExprincipal(Request $request)
    {
        $data = new PreviousPrincipal();
        $data->	name       = $request->name;
        $data->	startdate   = $request->startdate;
        $data->	enddate     = $request->enddate;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Year Bay Planing created successfully');
        
    } 
    
   public function EditeExprincpal($id)
    {
        $id=PreviousPrincipal::find($id);
        return view('backdoor.editeExprincipal',['Datakey'=>$id]);
    } 
    
   public function updateExprincipal(Request $request)
    {
        $data= PreviousPrincipal::find($request->id);
        $data->	name       = $request->name;
        $data->	startdate   = $request->startdate;
        $data->	enddate     = $request->enddate;
        
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
         return back()->with('success','Data updated successfully');
    }
    
    public function ExprincipalDelete($id)
    {
       $id=PreviousPrincipal::find($id);
       if($id->delete()){
           return back()->with('success','Remove year planing success');
       }else{
           return back()->with('error','Remove year planing Faile');
       }
    }
    
    // Institute Details //
    
    public function institutedetails()
    {
        $result=instituteDetailsModel::get();
        return view('backdoor.institutedetails',['Datakey'=>$result]);
    }
    
    public function NewInstitutedetails()
    {
        return view('backdoor.newinstitute');
    }
    
    public function storeinstitute(Request $request)
    {
        $data = new instituteDetailsModel();
        $data->	title       = $request->title;
        $data->	details   = $request->details;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Year Bay Planing created successfully');
        
    }
    
   public function EditeinstituteDetails($id)
    {
        $id=instituteDetailsModel::find($id);
        return view('backdoor.editeinstitute',['Datakey'=>$id]);
    }
    
   public function updateinstitute(Request $request)
    {
        $data= instituteDetailsModel::find($request->id);
        $data->	title       = $request->title;
        $data->	details   = $request->details;
      
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','Data updated successfully');
    }
    
    public function instituteDelete($id)
    {
       $id=instituteDetailsModel::find($id);
       if($id->delete()){
           return back()->with('success','Remove year planing success');
       }else{
           return back()->with('error','Remove year planing Faile');
       }
    } 
    
    // Result Page //
    
    public function result()
    {
        $result=resultmodel::get();
        return view('backdoor.result',['Datakey'=>$result]);
    }
    
    public function Newresult()
    {
        return view('backdoor.newresult');
    }
    
    public function storeResult(Request $request)
    {
        $data = new resultmodel();
        $data->	title       = $request->title;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Year Bay Planing created successfully');
        
    }
    
    public function EditeResult($id)
    {
        $id=resultmodel::find($id);
        return view('backdoor.editeResult',['Datakey'=>$id]);
    }
    
    public function updateResult(Request $request)
    {
        $data= resultmodel::find($request->id);
        $data->	title       = $request->title;
      
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/newsEvent/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->avatar =$fileLocation;
        }
        $data->save();
        return back()->with('success','Data updated successfully');
    }
    
    public function ResultDelete($id)
    {
       $id=resultmodel::find($id);
       if($id->delete()){
           return back()->with('success','Remove year planing success');
       }else{
           return back()->with('error','Remove year planing Faile');
       }
    }     
        
    
    
    
}





















