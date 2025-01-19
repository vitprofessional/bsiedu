<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function __construct(){
        $this->middleware('bsiadmin');
    }
    //page db controller
    //Page table manage controller
    public function createpage(Request $requ){
        //return 11;
        $chk = Page::where(['page_name'=>$requ->page_name])->get();
        //return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Page already exist');
            //return 0;
        else:
            $page = new Page();
            $page->menu             =   $requ->menuname;
            $page->page_title       =   $requ->page_title;
            $page->page_headline    =   $requ->page_headline;
            $page->page_name        =   $requ->page_name;
            $page->text_content     =   $requ->text_content;
            $page->status           =   $requ->prostatus;
            //return 1;
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/page/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/page/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = $filename.'_'.time().'.'.$extension;		 
    			
    			$page->avatar = $filenametostore;
    		endif;
            //$page->avatar          =$requ->;
            if($page->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/page/', $filenametostore);
		        endif;
                return back()->with('success','Success! Page created successfully');
            else:
                return back()->with('error','Sorry! There was an error to create Page');
            endif;
        endif;
    }
    //Update page profile details
    public function updatepage(Request $requ){
        $page = Page::find($requ->proid);
        //return count($chk);
        if(!empty($page)):
            $page->menu             =   $requ->menuname;
            $page->page_title       =   $requ->page_title;
            $page->page_headline    =   $requ->page_headline;
            $page->page_name        =   $requ->page_name;
            $page->text_content     =   $requ->text_content;
            $page->status           =   $requ->prostatus;
            //$page->avatar          =$requ->;
            if($page->save()):
                return back()->with('success','Success! Page update successfully');
            else:
                return back()->with('error','Sorry! There was an error to update Page');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update Page');
        endif;
    }
    //Update profile picture controller
    public function updatepageobject(Request $requ){
        //return 11;
        $page = Page::find($requ->proid);
        //return count($page);
        if(!empty($page)):
    		//image save to database
    		if(!empty($requ->file('avatar'))):
    			if(file_exists(storage_path("frontend/uploads/page/").$requ->avatar)):
    				unlink(storage_path('frontend/uploads/page/'.$requ->avatar));
    			endif;
    			//get filename with extension
    			$filenamewithextension = $requ->file('avatar')->getClientOriginalName();
    			
    			//get filename without extension
    			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    			
    			//get file extension
    			$extension = $requ->file('avatar')->getClientOriginalExtension();
    			
    			//filename to store
    			$filenametostore = $filename.'_'.time().'.'.$extension;		 
    			
    			$page->avatar = $filenametostore;
    		endif;
            //$page->avatar          =$requ->;
            if($page->save()):
		        if(!empty($requ->file('avatar'))):
			        //Upload File
			        $requ->file('avatar')->storeAs('public/frontend/uploads/page/', $filenametostore);
		        endif;
                return back()->with('success','Success! Page updated successfully');
            else:
                return back()->with('error','Sorry! There was an error to update page');
            endif;
        else:
            return back()->with('error','Sorry! There was an error to update page');
        endif;
    }
    //delete profile picture controller
    public function delPageObject($id){
        $profile = Page::find($id);
		//image save to database
		if(!empty($profile->avatar)):
			if(file_exists(storage_path("frontend/uploads/page/").$profile->avatar)):
				unlink(storage_path('frontend/uploads/page/'.$profile->avatar));
			endif;
		endif;
		$profile->avatar = "";
		if($profile->save()):
		    return back()->with('success','Page remove successfully');
		else:
		    return back()->with('error','Page remove failed');
		endif;
    }
    //delete profile picture controller
    public function deletepage($id){
        $profile = Page::find($id);
		if($profile->delete()):
		    return back()->with('success','Page delete successfully');
		else:
		    return back()->with('error','Page deletion failed');
		endif;
    }
}
