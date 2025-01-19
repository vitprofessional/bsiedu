<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoGallery;
use App\Models\VideoGallery;
use App\Models\SliderGallery;

use Intervention\Image\ImageManagerStatic as Image;
use Mail;
use App\Mail\NotifiMail;

class GalleryController extends Controller
{
    public function photogallery(){
        $gallery = PhotoGallery::all();
        return view('backdoor.photogallery',['gallery'=>$gallery]);
    }
    public function newphotogallery(){
        return view('backdoor.newphotogallery');
    }
    
    public function createphotogallery(Request $requ){
        $photogallery = new PhotoGallery;
        
        $check = PhotoGallery::where(['title'=>$requ->title])->get();
        if(count($check)>0):
            return back()->with('error','Sorry! Gallery Already Exist. Please try with new one');
        else:
            $photogallery->title    = $requ->title;
            $photogallery->details  = $requ->details;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/photogallery/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/photogallery/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = $filename.'_'.time().'.'.$extension;		 
    			
    			$photogallery->location = $filenametostore;
    		endif;
            if($photogallery->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/photogallery/', $filenametostore);	 
		        endif;
                return back()->with('success','Great! Gallery created successfully');
            else:
                return back()->with('error','Sorry! There was an error. Please try later');
            endif;
        endif;
    }
    
    public function editphotogallery($id){
        $photogallery = PhotoGallery::find($id);
        return view('backdoor.editphotogallery',['photogallery'=>$photogallery]);
    }
    
    //Update photogallery profile details
    public function updatephotogallery(Request $requ){
        $photogallery = PhotoGallery::find($requ->proid);
        //return count($chk);
        if(!empty($photogallery)):
            $photogallery->title    = $requ->title;
            $photogallery->details  = $requ->details;
            if($photogallery->save()):
                return back()->with('success','Success! PhotoGallery update successfully');
            else:
                return back()->with('error','Sorry! There was an error to update PhotoGallery');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update PhotoGallery');
        endif;
    }
    //Update profile picture controller
    public function updatephotogalleryobject(Request $requ){
        //return 11;
        $photogallery = PhotoGallery::find($requ->proid);
        //return count($photogallery);
        if(!empty($photogallery)>0):
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/photogallery/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/photogallery/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = $filename.'_'.time().'.'.$extension;		 
    			
    			$photogallery->location = $filenametostore;
    		endif;
            //$photogallery->avatar          =$requ->;
            if($photogallery->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/photogallery/', $filenametostore);
		        endif;
                return back()->with('success','Success! PhotoGallery updated successfully');
            else:
                return back()->with('error','Sorry! There was an error to update photogallery');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update photogallery');
        endif;
    }
    //delete profile picture controller
    public function delPhotoGalleryObject($id){
        $photogallery = PhotoGallery::find($id);
		//image save to database
		if(!empty($photogallery->location)):
			if(file_exists(storage_path("frontend/uploads/photogallery/").$photogallery->location)):
				unlink(storage_path('frontend/uploads/photogallery/'.$photogallery->location));
			endif;
		endif;
		$photogallery->location = "";
		if($photogallery->save()):
		    return back()->with('success','PhotoGallery remove successfully');
		else:
		    return back()->with('error','PhotoGallery remove failed');
		endif;
    }
    
    //delete profile picture controller
    public function deletephotogallery($id){
        $gallery = PhotoGallery::find($id);
		if($gallery->delete()):
		    return back()->with('success','Gallery delete successfully');
		else:
		    return back()->with('error','Gallery deletion failed');
		endif;
    }
    
    
    
    
    
    //Video gallery controller
    public function videogallery(){
        $gallery = VideoGallery::all();
        return view('backdoor.videogallery',['gallery'=>$gallery]);
    }
    public function newvideogallery(){
        return view('backdoor.newvideogallery');
    }
    
    // public function createvideogallery(Request $requ){
    //     $videogallery = new VideoGallery;
        
    //     $check = VideoGallery::where(['title'=>$requ->title])->get();
    //     if(count($check)>0):
    //         return back()->with('error','Sorry! Gallery Already Exist. Please try with new one');
    //     else:
    //         $videogallery->title    = $requ->title;	
    //         $videogallery->details    = $requ->details;	 
    // 		$videogallery->location = $requ->avatar;
    //         if($videogallery->save()):
    //             return back()->with('success','Great! Gallery created successfully');
    //         else:
    //             return back()->with('error','Sorry! There was an error. Please try later');
    //         endif;
    //     endif;
    // }
    
        public function createvideogallery(Request $request){
        $data = new VideoGallery();
        $data->	title   = $request->title;
        $data->	details   = $request->details;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/notice'),$filename);
            $data->location =$fileLocation;
        }
        $data->save();
        return back()->with('success','Great! Gallery created successfully');
        
    }
    
        
        public function CreateYoutubVideoGallery(Request $request){
        $data = new VideoGallery();
        $data->	title   = $request->title;
        $data->	details   = $request->details;
        $data-> avatar  = $request->avatar;
        $data->save();
        return back()->with('success','Great! Gallery created successfully');
        
    }
    public function editvideogallery($id){
        $videogallery = VideoGallery::find($id);
        return view('backdoor.editvideogallery',['videogallery'=>$videogallery]);
    }
    
    // //Update videogallery profile details
    // public function updatevideogallery(Request $requ){
    //     $videogallery = VideoGallery::find($requ->proid);
    //     //return count($chk);
    //     if(!empty($videogallery)):
    //         $videogallery->title        = $requ->title;
    //           $videogallery->details    = $requ->details;
    //           $videogallery->location   = $requ->avatar;	
    //         if($videogallery->save()):
    //             return back()->with('success','Success! VideoGallery update successfully');
    //         else:
    //             return back()->with('error','Sorry! There was an error to update VideoGallery');
    //         endif;
    //     else:
    //         return back()->with('error','Sorry! There was an error to update VideoGallery');
    //     endif;
    // }
       public function updatevideogallery(Request $request)
    {
        $data= VideoGallery::find($request->proid);
        $data->title    = $request->title;
        $data->details    = $request->details;
        
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('Y.m.d').$file->getClientOriginalName();
            $fileLocation = 'public/backdoor/uploads/notice/'.$filename;
            $file->move(public_path('backdoor/uploads/newsEvent'),$filename);
            $data->location =$fileLocation;
        }
        $data->save();
         return back()->with('success','Data updated successfully');
    }
    
    //delete profile picture controller
    public function deletevideogallery($id){
        $gallery = VideoGallery::find($id);
		if($gallery->delete()):
		    return back()->with('success','Gallery delete successfully');
		else:
		    return back()->with('error','Gallery deletion failed');
		endif;
    }
    
    //     public function updatevideogalleryobject(Request $requ){
    //     //return 11;
    //     $videogallery = VideoGallery::find($requ->proid);
    //     //return count($photogallery);
    //     if(!empty($videogallery)):
    // 		//image save to database
    // 		if(!empty($requ->file('avatar'))):
    // 			if(file_exists(storage_path("frontend/uploads/photogallery/").$requ->avatar)):
    // 				unlink(storage_path('frontend/uploads/photogallery/'.$requ->avatar));
    // 			endif;
    // 			//get filename with extension
    // 			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    // 			//get filename without extension
    // 			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    // 			//get file extension
    // 			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    // 			//filename to store
    // 			$filenametostore = $filename.'_'.time().'.'.$extension;		 
    			
    // 			$videogallery->location = $filenametostore;
    // 		endif;
    //         //$photogallery->avatar          =$requ->;
    //         if($videogallery->save()):
		  //      if(!empty($requ->file('avatar'))):
			 //       //Upload File
			 //       $requ->file('avatar')->storeAs('public/frontend/uploads/photogallery/', $filenametostore);
		  //      endif;
    //             return back()->with('success','Success! PhotoGallery updated successfully');
    //         else:
    //             return back()->with('error','Sorry! There was an error to update photogallery');
    //         endif;
    //     else:
    //         return back()->with('error','Sorry! There was an error to update photogallery');
    //     endif;
    // }
    
    // public function createvideogallery(Request $requ){
    //     $videogallery = new VideoGallery;
        
    //     $check = VideoGallery::where(['title'=>$requ->title])->get();
    //     if(count($check)>0):
    //         return back()->with('error','Sorry! Gallery Already Exist. Please try with new one');
    //     else:
    //         $videogallery->title    = $requ->title;
    //         $videogallery->details  = $requ->details;
    //         $videogallery->location =   $requ->avatar;
    //         $videogallery->save();
    //         return redirect()->route('videogallery');
    // 		//image save to database
    // 		if(!empty($requ->file('avatar'))):
    // 			if(file_exists(storage_path("frontend/uploads/photogallery/").$requ->avatar)):
    // 				unlink(storage_path('frontend/uploads/photogallery/'.$requ->avatar));
    // 			endif;
    // 			//get filename with extension
    // 			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    // 			//get filename without extension
    // 			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    //  			//get file extension
    //  			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    //  			//filename to store
    //  			$filenametostore = $filename.'_'.time().'.'.$extension;		 
    			
    //  			$videogallery->location = $filenametostore;
    //  		endif;
    //          if($videogallery->save()):
		  //      if(!empty($requ->file('avatar'))):
			 //       //Upload File
			 //       $requ->file('avatar')->storeAs('public/frontend/uploads/photogallery/', $filenametostore);	 
		  //      endif;
    //              return back()->with('success','Great! Gallery created successfully');
    //          else:
    //              return back()->with('error','Sorry! There was an error. Please try later');
    //          endif;
    //      endif;
   // }
    
        //delete profile picture controller
    public function delVideoGalleryObject($id){
        $videogallery = VideoGallery::find($id);
		//image save to database
		if(!empty($videogallery->location)):
			if(file_exists(storage_path("frontend/uploads/photogallery/").$videogallery->location)):
				unlink(storage_path('frontend/uploads/photogallery/'.$videogallery->location));
			endif;
		endif;
		$videogallery->location = "";
		if($videogallery->save()):
		    return back()->with('success','videoGallery remove successfully');
		else:
		    return back()->with('error','videoGallery remove failed');
		endif;
    }
    
    
    public function sendMail()
    {
      $name="Abdur Rhaman";
      Mail::to('fsugar909@gmail.com')->send(new NotifiMail($name));
 
      if (count(Mail::failures())>0) {
           return back()->with('error','Sorry! Please try again latter');
      }else{
           return back()->with('success','Great! Successfully send in your mail');
         }
    } 

    
    
    
}
