<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// New frontend routes

// news and event//
Route::get('/new/home', [
    'uses'  =>  'FrontViewController@frontsideHome',
    'as'    =>  'newHOme'
    ]);

Route::get('/new/year/planing', [
    'uses'  =>  'news_eventController@yearplaning',
    'as'    =>  'yearplaning'
    ]);
    
Route::get('/new/add/year/planing', [
    'uses'  =>  'news_eventController@newyearplaning',
    'as'    =>  'newyearplaning'
    ]); 
    
Route::post('/new/store/year/planing', [
    'uses'  =>  'news_eventController@storeYearPlan',
    'as'    =>  'storeYearPlan'
    ]);    

Route::get('/new/edite/year/planing/{id}', [
    'uses'  =>  'news_eventController@editeYearPlaning',
    'as'    =>  'editeYearPlaning'
    ]);
    
Route::post('/new/update/year/planing', [
    'uses'  =>  'news_eventController@updateYearPlaning',
    'as'    =>  'updateYearPlaning'
    ]);
    
Route::get('/new/delete/year/planing/{id}', [
    'uses'  =>  'news_eventController@yearPlaningDelete',
    'as'    =>  'yearPlaningDelete'
    ]); 
    
// End Yearly planing //

Route::get('/infoBox/show/{boxId}/{title}',[
    'uses'  =>'FrontViewController@boxContentShow',
    'as'    =>'boxContentShow'
]);

// Teacher panel
Route::get('/adminPanel/teacher/panel',[
    'uses'  =>'AdminDBController@teacherPanel',
    'as'    =>'teacherPanel'
]);

Route::get('/adminPanel/new/profile/{profileType}',[
    'uses'  =>'AdminDBController@newProfile',
    'as'    =>'newProfile'
]);

Route::post('/adminPanel/save/profile',[
    'uses'  =>'AdminDBController@createProfile',
    'as'    =>'createProfile'
]);

Route::get('/adminPanel/edit/{profileType}/{id}',[
    'uses'  =>'AdminDBController@editProfile',
    'as'    =>'editProfile'
]);


Route::post('/adminPanel/update/profile',[
    'uses'  =>'AdminDBController@updateProfile',
    'as'    =>'updateProfile'
]);

Route::post('/adminPanel/update/profile/pic',[
    'uses'  =>'AdminDBController@updateProfilePic',
    'as'    =>'updateProfilePic'
]);

Route::get('/adminPanel/delete/profile/pic/{id}/{profile}',[
    'uses'  =>'AdminDBController@delProfilePic',
    'as'    =>'delProfilePic'
]);

Route::get('/adminPanel/delete/{profileType}/{id}',[
    'uses'  =>'AdminDBController@delProfile',
    'as'    =>'delProfile'
]);

// Teacher panel
Route::get('/adminPanel/infoBox',[
    'uses'  =>'AdminDBController@infoBox',
    'as'    =>'infoBox'
]);
Route::get('/adminPanel/new/infoBox',[
    'uses'  =>'AdminDBController@newInfoBox',
    'as'    =>'newInfoBox'
]);
Route::get('/adminPanel/infoBox/content/{id}',[
    'uses'  =>'AdminDBController@infoBoxContent',
    'as'    =>'boxContentView'
]);

Route::post('/adminPanel/save/infobox',[
    'uses'  =>'AdminDBController@saveInfoBox',
    'as'    =>'saveInfoBox'
]);

Route::get('/adminPanel/update/infoBox/{id}',[
    'uses'  =>'AdminDBController@editInfoBox',
    'as'    =>'editInfoBox'
]);

Route::post('/adminPanel/update/infoBox',[
    'uses'  =>'AdminDBController@updateInfoBox',
    'as'    =>'updateInfoBox'
]);

Route::post('/adminPanel/update/infoBox/media',[
    'uses'  =>'AdminDBController@updateInfoBoxMedia',
    'as'    =>'updateInfoBoxMedia'
]);
Route::get('/adminPanel/del/InfoMedia/{id}',[
    'uses'  =>'AdminDBController@delInfoBoxMedia',
    'as'    =>'delInfoBoxMedia'
]);
Route::get('/adminPanel/del/infoBox/{id}',[
    'uses'  =>'AdminDBController@delInfoBox',
    'as'    =>'delInfoBox'
]);
Route::get('/adminPanel/newInfoBoxContent',[
    'uses'  =>'AdminDBController@newInfoBoxContent',
    'as'    =>'newInfoBoxContent'
]);

Route::post('/adminPanel/save/infobox/content/',[
    'uses'  =>'AdminDBController@saveInfoBoxContent',
    'as'    =>'saveInfoBoxContent'
]);

Route::get('/adminPanel/update/infoBox/content/{id}',[
    'uses'  =>'AdminDBController@editInfoBoxContent',
    'as'    =>'editInfoBoxContent'
]);

Route::post('/adminPanel/update/infoBox/content/',[
    'uses'  =>'AdminDBController@updateInfoBoxContent',
    'as'    =>'updateInfoBoxContent'
]);
Route::get('/adminPanel/del/infoBox/content/{id}',[
    'uses'  =>'AdminDBController@delInfoBoxContent',
    'as'    =>'delInfoBoxContent'
]);

Route::post('/adminPanel/update/infoBox/content/media/',[
    'uses'  =>'AdminDBController@updateInfoBoxContentMedia',
    'as'    =>'updateInfoBoxContentMedia'
]);
Route::get('/adminPanel/del/infoBox/content/media/{id}',[
    'uses'  =>'AdminDBController@delInfoBoxContentMedia',
    'as'    =>'delInfoBoxContentMedia'
]);

// Frontend routes

// About
Route::get('/about/teacherList',[
    'uses'  =>'FrontViewController@teacherList',
    'as'    =>'teacherList'
]);

// Training List
Route::get('/training/inhouse/teacher',[
    'uses'  =>'FrontViewController@inhouseTrainingTeacherList',
    'as'    =>'inhouseTrainingTeacherList'
]);
Route::get('/training/inhouse/staff',[
    'uses'  =>'FrontViewController@inhouseTrainingStaffList',
    'as'    =>'inhouseTrainingStaffList'
]);
Route::get('/training/inhouse/subjectwise',[
    'uses'  =>'FrontViewController@trainingSubjectWise',
    'as'    =>'trainingSubjectWise'
]);

// Industry Linkage List
Route::get('/industy/linkage/company',[
    'uses'  =>'FrontViewController@linkageIndustryList',
    'as'    =>'linkageIndustryList'
]);
Route::get('/industy/linkage/attachment',[
    'uses'  =>'FrontViewController@industryAttachment',
    'as'    =>'industryAttachment'
]);
Route::get('/industy/linkage/visitCompany',[
    'uses'  =>'FrontViewController@industryVisitList',
    'as'    =>'industryVisitList'
]);

// Employee panel
Route::get('/adminPanel/employee/panel',[
    'uses'  =>'AdminDBController@employeePanel',
    'as'    =>'employeePanel'
]);

Route::get('/about/employeeList',[
    'uses'  =>'FrontViewController@employeeList',
    'as'    =>'employeeList'
]);

Route::get('/about/employeeList',[
    'uses'  =>'FrontViewController@employeeList',
    'as'    =>'employeeList'
]);

//placement cell
Route::post('/job/placement-cell',[
    'uses'  =>'FrontController@savePlaceStudent',
    'as'    =>'savePlaceStudent'
]);
Route::get('/job/placement-cell',[
    'uses'  =>'FrontViewController@placementCell',
    'as'    =>'placementCell'
]);
Route::get('/job/needy-student',[
    'uses'  =>'FrontViewController@jobNeededStudent',
    'as'    =>'jobNeededStudent'
]);
Route::post('/job/needy-student/save',[
    'uses'  =>'FrontController@saveNeedyStudent',
    'as'    =>'saveNeedyStudent'
]);

//start Admission

Route::get('/new/admission/', [
    'uses'  =>  'news_eventController@Admission',
    'as'    =>  'Admission'
    ]);
    
Route::get('/new/add/admission/', [
    'uses'  =>  'news_eventController@NewAddmission',
    'as'    =>  'NewAddmission'
    ]);    

Route::post('/new/store/addmission/', [
    'uses'  =>  'news_eventController@storeAddmission',
    'as'    =>  'storeAddmission'
    ]);

Route::get('/new/edite/addmission/{id}', [
    'uses'  =>  'news_eventController@EditeAddmission',
    'as'    =>  'EditeAddmission'
    ]);
    
Route::post('/new/update/addmission/', [
    'uses'  =>  'news_eventController@updateAddmission',
    'as'    =>  'updateAddmission'
    ]);
        
Route::get('/new/delete/addmission/{id}', [
    'uses'  =>  'news_eventController@AddmissionDelete',
    'as'    =>  'AddmissionDelete'
    ]); 
    
// End Addmission
    
// Start Year Bay planing?//
Route::get('/new/year/bay/planing', [
    'uses'  =>  'news_eventController@yearbayplaning',
    'as'    =>  'YearBay'
    ]);
    
Route::get('/new/add/year/bay/planing', [
    'uses'  =>  'news_eventController@NewYearBayPlaning',
    'as'    =>  'NewYearBayPlaning'
    ]);
    
Route::post('/new/store/year/bay/plaing/', [
    'uses'  =>  'news_eventController@storeYearBayPlaning',
    'as'    =>  'storeYearBayPlaning'
    ]);

Route::get('/new/edite/year/bay/plaing/{id}', [
    'uses'  =>  'news_eventController@EditeYearBayPlaning',
    'as'    =>  'EditeYearBayPlaning'
    ]); 
    
Route::post('/new/update/year/bay/plaing/', [
    'uses'  =>  'news_eventController@updateYearBay',
    'as'    =>  'updateYearBay'
    ]);

Route::get('/new/year/bay/planing/delete/{id}', [
    'uses'  =>  'news_eventController@YearBayPlaningDelete',
    'as'    =>  'YearBayPlaningDelete'
    ]);    
    
// job placement
Route::get('/new/jobplacement', [
    'uses'  =>  'news_eventController@jobplacement',
    'as'    =>  'jobplacement'
    ]);  

Route::get('/new/add/jobplacement', [
    'uses'  =>  'news_eventController@newjobplacement',
    'as'    =>  'newjobplacement'
    ]); 
    
Route::post('/new/store/jobplacement', [
    'uses'  =>  'news_eventController@storeJobplacement',
    'as'    =>  'storeJobplacement'
    ]); 

Route::get('/new/edite/job/placement/{id}', [
    'uses'  =>  'news_eventController@Editejob',
    'as'    =>  'Editejob'
    ]); 
    
Route::post('/new/update/jobplacement', [
    'uses'  =>  'news_eventController@updatejob',
    'as'    =>  'updatejob'
    ]);  

Route::get('/new/jobplacement/delete/{id}', [
    'uses'  =>  'news_eventController@jobplacementDelete',
    'as'    =>  'jobplacementDelete'
    ]); 
    
// research management system//
    
Route::get('/new/research/management', [
    'uses'  =>  'news_eventController@researchmanagement',
    'as'    =>  'researchmanagement'
    ]); 
    
Route::get('/new/add/research/management', [
    'uses'  =>  'news_eventController@newresearch',
    'as'    =>  'newresearch'
    ]);
    
Route::post('/new/store/research/manangement/', [
    'uses'  =>  'news_eventController@storeReserch',
    'as'    =>  'storeReserch'
    ]);    

Route::get('/new/edite/reserch/{id}', [
    'uses'  =>  'news_eventController@EditeResearch',
    'as'    =>  'EditeResearch'
    ]); 
    
Route::post('/new/update/research', [
    'uses'  =>  'news_eventController@updateReserch',
    'as'    =>  'updateReserch'
    ]);
    
Route::get('/new/research/delete/{id}', [
    'uses'  =>  'news_eventController@researchManagementtDelete',
    'as'    =>  'researchManagementtDelete'
    ]);  
    
/// student Acive //
    
Route::get('/new/student/arcive', [
    'uses'  =>  'news_eventController@studentArcive',
    'as'    =>  'studentArcive'
    ]);
    
Route::get('/new/add/student/arcive', [
    'uses'  =>  'news_eventController@NewstudentArcive',
    'as'    =>  'NewstudentArcive'
    ]);    
    
Route::post('/new/store/student/arcive/', [
    'uses'  =>  'news_eventController@storeStudentArcive',
    'as'    =>  'storeStudentArcive'
    ]); 
    
Route::get('/new/edite/student/arcive/{id}', [
    'uses'  =>  'news_eventController@EditeStudentArciv',
    'as'    =>  'EditeStudentArciv'
    ]);
    
Route::post('/new/update/student/arcive/', [
    'uses'  =>  'news_eventController@updateStudentArcive',
    'as'    =>  'updateStudentArcive'
    ]);    

Route::get('/new/student/arcive/delete/{id}', [
    'uses'  =>  'news_eventController@StudentArciveDelete',
    'as'    =>  'StudentArciveDelete'
    ]);   
    
// End New & Event ///
    
// About //
    
Route::get('/new/ex-principal', [
    'uses'  =>  'news_eventController@Exprincipal',
    'as'    =>  'Exprincipal'
    ]);
    
Route::get('/new/add/ex-principal', [
    'uses'  =>  'news_eventController@NewExprincipal',
    'as'    =>  'NewExprincipal'
    ]); 

Route::post('/new/store/ex-principal', [
    'uses'  =>  'news_eventController@storeExprincipal',
    'as'    =>  'storeExprincipal'
    ]);
    
Route::get('/new/edite/exprincipal/{id}', [
    'uses'  =>  'news_eventController@EditeExprincpal',
    'as'    =>  'EditeExprincpal'
    ]);
    
Route::post('/new/uadate/ex-principal', [
    'uses'  =>  'news_eventController@updateExprincipal',
    'as'    =>  'updateExprincipal'
    ]); 
    
Route::get('/new/exprincipal/delete/{id}', [
    'uses'  =>  'news_eventController@ExprincipalDelete',
    'as'    =>  'ExprincipalDelete'
    ]); 
    
// institute details//
    
Route::get('/new/institute/details', [
    'uses'  =>  'news_eventController@institutedetails',
    'as'    =>  'institutedetails'
    ]); 
    
Route::get('/new/add/institute/details', [
    'uses'  =>  'news_eventController@NewInstitutedetails',
    'as'    =>  'NewInstitutedetails'
    ]);     
    
Route::post('/new/store/institute/details', [
    'uses'  =>  'news_eventController@storeinstitute',
    'as'    =>  'storeinstitute'
    ]);
    
Route::get('/new/edite/institute/details/{id}', [
    'uses'  =>  'news_eventController@EditeinstituteDetails',
    'as'    =>  'EditeinstituteDetails'
    ]);
    
Route::post('/new/update/institute/', [
    'uses'  =>  'news_eventController@updateinstitute',
    'as'    =>  'updateinstitute'
    ]);    

Route::get('/new/delete/institute/details/{id}', [
    'uses'  =>  'news_eventController@instituteDelete',
    'as'    =>  'instituteDelete'
    ]); 
// Result //
    
Route::get('/new/result/', [
    'uses'  =>  'news_eventController@result',
    'as'    =>  'result'
    ]);    
    
Route::get('/new/add/result/', [
    'uses'  =>  'news_eventController@Newresult',
    'as'    =>  'Newresult'
    ]); 
    
Route::post('/new/store/result/', [
    'uses'  =>  'news_eventController@storeResult',
    'as'    =>  'storeResult'
    ]);  
    
Route::get('/new/edite/result/{id}', [
    'uses'  =>  'news_eventController@EditeResult',
    'as'    =>  'EditeResult'
    ]);     

Route::post('/new/update/result/', [
    'uses'  =>  'news_eventController@updateResult',
    'as'    =>  'updateResult'
    ]); 
    
Route::get('/new/delete/result/{id}', [
    'uses'  =>  'news_eventController@ResultDelete',
    'as'    =>  'ResultDelete'
    ]);
    
Route::get('/new/delete/result/{id}', [
    'uses'  =>  'news_eventController@ResultDelete',
    'as'    =>  'ResultDelete'
    ]);    
    
//End News & Event
Route::get('/principal/speech', [
    'uses'  =>  'FrontViewController@principalSpeech',
    'as'    =>  'principalSpeech'
    ]);
   

Route::get('/new/result', [
    'uses'  =>  'FrontViewController@result',
    'as'    =>  'result'
    ]); 
    


Route::get('/new/student', [
    'uses'  =>  'FrontViewController@studentgallary',
    'as'    =>  'studentgallary'
    ]); 
    
Route::get('/new/photo/gallary', [
    'uses'  =>  'FrontViewController@Photogallary',
    'as'    =>  'Photogallary'
    ]);
   
Route::get('/new/video/gallary', [
    'uses'  =>  'FrontViewController@newVideogallary',
    'as'    =>  'newVideogallary'
    ]);
    
Route::get('/new/youtub/video/gallary', [
    'uses'  =>  'AdminController@videioinformation',
    'as'    =>  'youtubeVideo'
    ]);    
Route::get('/about/institute', [
    'uses'  =>  'FrontViewController@instituteInfo',
    'as'    =>  'instituteInfo'
    ]); 
    
Route::get('/about/exprincipals/', [
    'uses'  =>  'FrontViewController@exprincipal',
    'as'    =>  'exprincipals'
    ]);     
Route::get('all/notice',[
    'uses'  =>  'FrontViewController@allnotice',
    'as'    =>  'allnotice'
    
    ]);  

Route::get('lab/details/{id}',[
    'uses'  =>  'FrontViewController@labdetails',
    'as'    =>  'labdetails' 
    
    ]);

// Accademics//

Route::get('new/class/rotine/',[
    'uses'  =>  'FrontViewController@NewclassRotine',
    'as'    =>  'NewclassRotine' 
    
    ]);
    
Route::get('new/lab/',[
    'uses'  =>  'AdminController@lab',
    'as'    =>  'lab' 
    
    ]);    

Route::get('new/lab/adminview/',[
    'uses'  =>  'AdminController@labAddView',
    'as'    =>  'labAddView' 
    
    ]);
    
Route::get('new/lab/delet/{id}',[
    'uses'  =>  'AdminController@deletelab',
    'as'    =>  'deletelab' 
    
    ]);    
    
Route::post('new/lab/store/',[
    'uses'  =>  'AdminController@labStoreData',
    'as'    =>  'labStoreData' 
    
    ]); 
Route::get('new/exam/rotine/',[
    'uses'  =>  'FrontViewController@NewExamRotine',
    'as'    =>  'NewExamRotine' 
    
    ]);
    
Route::get('new/sylabus',[
    'uses'  =>  'FrontViewController@Newsylabus',
    'as'    =>  'Newsylabus' 
    
    ]); 
    
Route::get('new/semesterplan',[
    'uses'  =>  'FrontViewController@NewSemesterplan',
    'as'    =>  'NewSemesterplan' 
    
    ]);  
    
Route::get('new/probidhan',[
    'uses'  =>  'FrontViewController@probdhan',
    'as'    =>  'probdhan' 
    
    ]);  
    
Route::get('new/contact',[
    'uses'  =>  'FrontViewController@newContact',
    'as'    =>  'newContact' 
    
    ]);      
    
// Gallary 

// End New frontend routes

//Front View Routes
Route::get('/', [
    'uses'  =>  'FrontViewController@frontsideHome',
    'as'    =>  'newHOme'
    ]);

Route::get('/database/student',[
    'uses'  =>  'FrontViewController@bsistudent',
    'as'    =>  'bsistudent'
]);

Route::get('/database/student/profile/{id}',[
    'uses'  =>'FrontViewController@viewStudent',
    'as'    =>'viewStudent'
]);

Route::get('/academic/probidhan',[
    'uses'  =>'FrontViewController@probidhan',
    'as'    =>'probidhan'
]);

Route::get('/academic/syllabus',[
    'uses'  =>'FrontViewController@syllabus',
    'as'    =>'syllabus'
]);

Route::get('/academic/semisterplan',[
    'uses'  =>'FrontViewController@semisterplan',
    'as'    =>'semisterplan'
]);

Route::get('/academic/classroutine',[
    'uses'  =>'FrontViewController@classroutine',
    'as'    =>'classroutine'
]);

Route::get('/academic/examroutine',[
    'uses'  =>'FrontViewController@examroutine',
    'as'    =>'examroutine'
]);

Route::get('/academic/academic-calender',[
    'uses'  =>'FrontViewController@academiccalender',
    'as'    =>'academiccalender'
]);

Route::get('/education/{id}',[
    'uses'  =>'FrontViewController@education',
    'as'    =>'education'
]);

Route::get('/about/{id}',[
    'uses'  =>'FrontViewController@about',
    'as'    =>'about'
]);


Route::get('/gallery/photo-gallery',[
    'uses'  =>'FrontViewController@photogallery',
    'as'    =>'frontphotogallery'
]);

Route::get('/gallery/photo-gallery',[
    'uses'  =>'FrontViewController@photogallery',
    'as'    =>'frontphotogallery'
]);

Route::get('/principal/Speech',[
    'uses'  =>'FrontViewController@speech',
    'as'    =>'speech'
]);
Route::get('contactform',[
    'uses'  =>'FrontViewController@contactform',
    'as'    =>'contactformView'
]);

Route::post('/store',[
    'uses'  =>'FrontViewController@store',
    'as'    =>'contactStore'
]);

 // placement cell route

Route::get('adminPanel/placementCell/',[
    'uses'  =>'AdminPanelController@placementCell',
    'as'    =>'adminPlacementCell'
]);
Route::get('adminPanel/placementCell/delete/placeStudent/{id}',[
    'uses'  =>'AdminPanelController@delPlaceStudent',
    'as'    =>'delPlaceStudent'
]);
Route::get('adminPanel/placementCell/delete/needyStudent/{id}',[
    'uses'  =>'AdminPanelController@delNeedyStudent',
    'as'    =>'delNeedyStudent'
]);

//inhouse training teacher
Route::get('adminPanel/training/inhouse/teacher',[
    'uses'  =>'AcademicDBController@inHouseTeacher',
    'as'    =>'inHouseTeacher'
]);
Route::get('adminPanel/training/inhouse/teacher/created',[
    'uses'  =>'AcademicDBController@newInHouseTeacher',
    'as'    =>'newInHouseTeacher'
]);
Route::post('adminPanel/training/inhouse/teacher/save',[
    'uses'  =>'AcademicDBController@createInHouseTeacher',
    'as'    =>'createInHouseTeacher'
]);
Route::get('adminPanel/training/inhouse/teacher/edit/{id}',[
    'uses'  =>'AcademicDBController@editInHouseTeacher',
    'as'    =>'editInHouseTeacher'
]);
Route::post('adminPanel/training/inhouse/teacher/update',[
    'uses'  =>'AcademicDBController@updateInHouseTeacher',
    'as'    =>'updateInHouseTeacher'
]);
Route::get('adminPanel/training/inhouse/teacher/delete/{id}',[
    'uses'  =>'AcademicDBController@delInHouseTeacher',
    'as'    =>'delInHouseTeacher'
]);
Route::get('adminPanel/training/inhouse/teacher/object/delete/{id}',[
    'uses'  =>'AcademicDBController@delInHouseTeacherObj',
    'as'    =>'delInHouseTeacherObj'
]);

//important link routes
Route::get('adminPanel/important/link',[
    'uses'  =>'AdminDBController@importantLink',
    'as'    =>'importantLink'
]);
Route::get('adminPanel/important/link/new',[
    'uses'  =>'AdminDBController@newLink',
    'as'    =>'newLink'
]);
Route::post('adminPanel/important/link/save',[
    'uses'  =>'AdminDBController@saveLink',
    'as'    =>'saveLink'
]);
Route::get('adminPanel/important/link/edit/{id}',[
    'uses'  =>'AdminDBController@editLink',
    'as'    =>'editLink'
]);
Route::post('adminPanel/important/link/update',[
    'uses'  =>'AdminDBController@updateLink',
    'as'    =>'updateLink'
]);
Route::get('adminPanel/important/link/delete/{id}',[
    'uses'  =>'AdminDBController@delLink',
    'as'    =>'delLink'
]);

//inhouse training staff
Route::get('adminPanel/training/inhouse/staff',[
    'uses'  =>'AcademicDBController@inHouseStaff',
    'as'    =>'inHouseStaff'
]);
Route::get('adminPanel/training/inhouse/staff/created',[
    'uses'  =>'AcademicDBController@newInHouseStaff',
    'as'    =>'newInHouseStaff'
]);
Route::post('adminPanel/training/inhouse/staff/save',[
    'uses'  =>'AcademicDBController@createInHouseStaff',
    'as'    =>'createInHouseStaff'
]);
Route::get('adminPanel/training/inhouse/staff/edit/{id}',[
    'uses'  =>'AcademicDBController@editInHouseStaff',
    'as'    =>'editInHouseStaff'
]);
Route::post('adminPanel/training/inhouse/staff/update',[
    'uses'  =>'AcademicDBController@updateInHouseStaff',
    'as'    =>'updateInHouseStaff'
]);
Route::get('adminPanel/training/inhouse/staff/delete/{id}',[
    'uses'  =>'AcademicDBController@delInHouseStaff',
    'as'    =>'delInHouseStaff'
]);
Route::get('adminPanel/training/inhouse/staff/object/delete/{id}',[
    'uses'  =>'AcademicDBController@delInHouseStaffObj',
    'as'    =>'delInHouseStaffObj'
]);

//training subjectwise
Route::get('adminPanel/training/subjectWise',[
    'uses'  =>'AcademicDBController@trainingListSubjectwise',
    'as'    =>'trainingListSubjectwise'
]);
Route::get('adminPanel/training/subjectWise/created',[
    'uses'  =>'AcademicDBController@newTrainingSubjectwise',
    'as'    =>'newTrainingSubjectwise'
]);
Route::post('adminPanel/training/subjectWise/save',[
    'uses'  =>'AcademicDBController@createTrainingSubjectwise',
    'as'    =>'createTrainingSubjectwise'
]);
Route::get('adminPanel/training/subjectWise/edit/{id}',[
    'uses'  =>'AcademicDBController@editTrainingSubjectwise',
    'as'    =>'editTrainingSubjectwise'
]);
Route::post('adminPanel/training/subjectWise/update',[
    'uses'  =>'AcademicDBController@updateTrainingSubjectwise',
    'as'    =>'updateTrainingSubjectwise'
]);
Route::get('adminPanel/training/subjectWise/delete/{id}',[
    'uses'  =>'AcademicDBController@delTrainingSubjectwise',
    'as'    =>'delTrainingSubjectwise'
]);
Route::get('adminPanel/training/subjectWise/object/delete/{id}',[
    'uses'  =>'AcademicDBController@delTrainingSubjectwiseObj',
    'as'    =>'delTrainingSubjectwiseObj'
]);

//industry linkage
Route::get('adminPanel/linkage/industry',[
    'uses'  =>'AdminPanelController@linkageIndustry',
    'as'    =>'linkageIndustry'
]);
Route::get('adminPanel/linkage/industry/created',[
    'uses'  =>'AdminPanelController@createLinkageIndustry',
    'as'    =>'createLinkageIndustry'
]);
Route::post('adminPanel/linkage/industry/save',[
    'uses'  =>'AdminPanelController@saveLinkageIndustry',
    'as'    =>'saveLinkageIndustry'
]);
Route::get('adminPanel/linkage/industry/edit/{id}',[
    'uses'  =>'AdminPanelController@editLinkageIndustry',
    'as'    =>'editLinkageIndustry'
]);
Route::post('adminPanel/linkage/industry/update',[
    'uses'  =>'AdminPanelController@updateIndustryLinkage',
    'as'    =>'updateIndustryLinkage'
]);
Route::get('adminPanel/linkage/industry/delete/{id}',[
    'uses'  =>'AdminPanelController@delLinkageIndustry',
    'as'    =>'delLinkageIndustry'
]);
Route::get('adminPanel/linkage/industry/mou/delete/{id}',[
    'uses'  =>'AdminPanelController@delIndustryMou',
    'as'    =>'delIndustryMou'
]);
Route::get('adminPanel/linkage/industry/company/delete/{id}',[
    'uses'  =>'AdminPanelController@delIndustryCompany',
    'as'    =>'delIndustryCompany'
]);
//linkage industry end
Route::get('adminPanel/linkage/attachment/',[
    'uses'  =>'AdminPanelController@industrialAttachment',
    'as'    =>'industrialAttachment'
]);
Route::get('adminPanel/linkage/attachment/created',[
    'uses'  =>'AdminPanelController@createAttachment',
    'as'    =>'createAttachment'
]);
Route::post('adminPanel/linkage/attachment/save',[
    'uses'  =>'AdminPanelController@saveAttachment',
    'as'    =>'saveAttachment'
]);
Route::get('adminPanel/linkage/attachment/edit/{id}',[
    'uses'  =>'AdminPanelController@editAttachment',
    'as'    =>'editAttachment'
]);
Route::post('adminPanel/linkage/attachment/update',[
    'uses'  =>'AdminPanelController@updateAttachment',
    'as'    =>'updateAttachment'
]);
Route::get('adminPanel/linkage/attachment/delete/{id}',[
    'uses'  =>'AdminPanelController@delAttachment',
    'as'    =>'delAttachment'
]);
Route::get('adminPanel/attachment/file/delete/{id}',[
    'uses'  =>'AdminPanelController@delAttachmentFile',
    'as'    =>'delAttachmentFile'
]);
//industrial attachment end
Route::get('adminPanel/linkage/industry/visit/',[
    'uses'  =>'AdminPanelController@indVisit',
    'as'    =>'indVisit'
]);
Route::get('adminPanel/linkage/industry/visit/created',[
    'uses'  =>'AdminPanelController@createIndVisit',
    'as'    =>'createIndVisit'
]);
Route::post('adminPanel/linkage/industry/visit/save',[
    'uses'  =>'AdminPanelController@saveIndVisit',
    'as'    =>'saveIndVisit'
]);
Route::get('adminPanel/linkage/industry/visit/edit/{id}',[
    'uses'  =>'AdminPanelController@editIndVisit',
    'as'    =>'editIndVisit'
]);
Route::post('adminPanel/linkage/industry/visit/update',[
    'uses'  =>'AdminPanelController@updateIndVisit',
    'as'    =>'updateIndVisit'
]);
Route::get('adminPanel/linkage/industry/visit/delete/{id}',[
    'uses'  =>'AdminPanelController@delIndVisit',
    'as'    =>'delIndVisit'
]);
Route::get('adminPanel/industry/visit/file/delete/{id}',[
    'uses'  =>'AdminPanelController@delVisitFile',
    'as'    =>'delVisitFile'
]);
//industrial visit end

// user management route

Route::get('adminPanel/view/user',[
    'uses'  =>'AdminController@userview',
    'as'    =>'userview'
]);

Route::get('adminPanel/video/information',[
    'uses'  =>'AdminController@videioinformation',
    'as'    =>'videoIfo'
]);

Route::get('adminPanel/useradd',[
    'uses'  =>'AdminController@addUser',
    'as'    =>'addUser'
]);

Route::get('adminPanel/userEdit/{id}',[
    'uses'  =>'AdminController@userEdit',
    'as'    =>'userEdit'
]);
Route::get('adminPanel/userView/{id}',[
    'uses'  =>'AdminController@userView',
    'as'    =>'userView'
]);
Route::get('adminPanel/delete/{id}',[
    'uses'  =>'AdminController@deleteUser',
    'as'    =>'deleteUser'
]);
Route::post('adminPanel/update/{id}',[
    'uses'  =>'AdminController@updateUser',
    'as'    =>'updateUser'
]);

Route::get('adminPanel/userprofile',[
    'uses'  =>'AdminController@userprofile',
    'as'    =>'userprofile'
]);

Route::post('/adminPanel/admit-panel',[
    'uses'  =>'AdminController@userStore',
    'as'    =>'userStore'
]);

Route::get('jobplaceform',[
    'uses'  =>'FrontViewController@jobplaceform',
    'as'    =>'jobplaceform'
]);

Route::post('/jobStore',[
    'uses'  =>'FrontViewController@Storejob',
    'as'    =>'Storejob'
]);

Route::get('jobplaceview',[
    'uses'  =>'FrontViewController@jobview',
    'as'    =>'jobview'
]);

 Route::get('/contactform', [FrontViewController::class, 'contactform'])->name('contactform.view');

//Admin panel routes
Route::get('/admin-login',[
    'uses'  =>'FrontViewController@adminlogin',
    'as'    =>'adminlogin'
]);

Route::post('/register-confirm',[
    'uses'  =>'FrontViewController@AdminSignup',
    'as'    =>'adminSignup'
]);

Route::post('/admin-confirm',[
    'uses'  =>'FrontViewController@AdminLoginCheck',
    'as'    =>'adminLogin'
]);
Route::get('/admin-panel/logout/',[
    'uses'  =>'FrontViewController@adminlogout',
    'as'    =>'adminlogout'
]);

Route::get('/adminPanel/home',[
    'uses'  =>'AdminController@index',
    'as'    =>'backhome'
]);
Route::get('/adminPanel/contact',[
    'uses'  =>'FrontViewController@contactview',
    'as'    =>'backcontact'
]);

Route::get('/adminPanel/password/change/view',[
    'uses'  =>'AdminViewController@passswordChange',
    'as'    =>'passwordChangepage'
]);

Route::post('/admin-confirm/change/password',[
    'uses'  =>'AdminPanelController@changePassword',
    'as'    =>'changePassword'
]);

//Student Management
Route::get('/adminPanel/students',[
    'uses'  =>'AdminController@students',
    'as'    =>'backstudent'
]);
Route::get('/adminPanel/new-student-profile',[
    'uses'  =>  'AdminController@newstudent',
    'as'    =>  'newstudent'
]);

Route::post('/adminPanel/admit-student',[
    'uses'  =>'AdminDBController@admitstudent',
    'as'    =>'admitstudent'
]);

Route::post('/adminPanel/updateStudent',[
    'uses'  =>'AdminDBController@updateStudent',
    'as'    =>'updateStudent'
]);

Route::post('/adminPanel/update-student-pic',[
    'uses'  =>'AdminDBController@updatestudentpropic',
    'as'    =>'updatestudentpic'
]);

Route::get('/adminPanel/edit-student/{id}',[
    'uses'  =>'AdminController@editstudent',
    'as'    =>'editStudent'
]);

Route::get('/adminPanel/delete-student-pic/{id}',[
    'uses'  =>'AdminDBController@delStudentPic',
    'as'    =>'delStudentPic'
]);

Route::get('/adminPanel/delete-student/{id}',[
    'uses'  =>'AdminDBController@deletestudent',
    'as'    =>'delStudent'
]);

// //Notice & Event Management
Route::get('/adminPanel/notice',[
    'uses'  =>'AdminController@notice',
    'as'    =>'backnotice'
]);
Route::get('/adminPanel/new-notice',[
    'uses'  =>  'AdminController@newnotice',
    'as'    =>  'newnotice'
]);

Route::post('/adminPanel/create-notice',[
    'uses'  =>'AdminDBController@createnotice',
    'as'    =>'createnotice'
]);

Route::post('/adminPanel/update-notice',[
    'uses'  =>'AdminDBController@updatenotice',
    'as'    =>'updatenotice'
]);

Route::get('/adminPanel/edit-notice/{id}',[
    'uses'  =>'AdminController@editnotice',
    'as'    =>'editNotice'
]);

Route::get('/adminPanel/delete-notice/{id}',[
    'uses'  =>'AdminDBController@deletenotice',
    'as'    =>'delNotice'
]);

Route::post('/adminPanel/update-notice-object',[
    'uses'  =>'AdminDBController@updatenoticeobject',
    'as'    =>'updatenoticeobject'
]);


Route::get('/adminPanel/delete-notice-object/{id}',[
    'uses'  =>'AdminDBController@delNoticeObject',
    'as'    =>'delNoticeObject'
]);


//Academic Management
Route::get('/adminPanel/academic',[
    'uses'  =>'AdminController@backacademic',
    'as'    =>'backacademic'
]);

//Syllabus Management
Route::get('/adminPanel/syllabus',[
    'uses'  =>'AdminController@syllabus',
    'as'    =>'backsyllabus'
]);

Route::get('/adminPanel/new-syllabus',[
    'uses'  =>  'AdminController@newsyllabus',
    'as'    =>  'newsyllabus'
]);

Route::post('/adminPanel/create-syllabus',[
    'uses'  =>'AcademicDBController@createsyllabus',
    'as'    =>'createsyllabus'
]);

Route::post('/adminPanel/update-syllabus',[
    'uses'  =>'AcademicDBController@updatesyllabus',
    'as'    =>'updatesyllabus'
]);

Route::get('/adminPanel/edit-syllabus/{id}',[
    'uses'  =>'AdminController@editsyllabus',
    'as'    =>'editSyllabus'
]);

Route::get('/adminPanel/delete-syllabus/{id}',[
    'uses'  =>'AcademicDBController@deletesyllabus',
    'as'    =>'delSyllabus'
]);

Route::post('/adminPanel/update-syllabus-object',[
    'uses'  =>'AcademicDBController@updatesyllabusobject',
    'as'    =>'updatesyllabusobject'
]);


Route::get('/adminPanel/delete-syllabus-object/{id}',[
    'uses'  =>'AcademicDBController@delSyllabusObject',
    'as'    =>'delSyllabusObject'
]);

//Result Management
Route::get('/adminPanel/result',[
    'uses'  =>'AcademicDBController@resultList',
    'as'    =>'resultList'
]);

Route::get('/adminPanel/new-result',[
    'uses'  =>  'AcademicDBController@newResult',
    'as'    =>  'newResult'
]);

Route::post('/adminPanel/create-result',[
    'uses'  =>'AcademicDBController@createResult',
    'as'    =>'createResult'
]);

Route::post('/adminPanel/update-result',[
    'uses'  =>'AcademicDBController@updateResult',
    'as'    =>'updateResult'
]);

Route::get('/adminPanel/edit-result/{id}',[
    'uses'  =>'AcademicDBController@editResult',
    'as'    =>'editResult'
]);

Route::get('/adminPanel/delete-result/{id}',[
    'uses'  =>'AcademicDBController@delResult',
    'as'    =>'delResult'
]);

Route::get('/adminPanel/delete-result-object/{id}',[
    'uses'  =>'AcademicDBController@delResultObject',
    'as'    =>'delResultObject'
]);


//Probidhan Management
Route::get('/adminPanel/probidhan',[
    'uses'  =>'AdminController@probidhan',
    'as'    =>'backprobidhan'
]);

Route::get('/adminPanel/new-probidhan',[
    'uses'  =>  'AdminController@newprobidhan',
    'as'    =>  'newprobidhan'
]);

Route::post('/adminPanel/create-probidhan',[
    'uses'  =>'AcademicDBController@createprobidhan',
    'as'    =>'createprobidhan'
]);

Route::post('/adminPanel/update-probidhan',[
    'uses'  =>'AcademicDBController@updateprobidhan',
    'as'    =>'updateprobidhan'
]);

Route::get('/adminPanel/edit-probidhan/{id}',[
    'uses'  =>'AdminController@editprobidhan',
    'as'    =>'editProbidhan'
]);

Route::get('/adminPanel/delete-probidhan/{id}',[
    'uses'  =>'AcademicDBController@deleteprobidhan',
    'as'    =>'delProbidhan'
]);

Route::post('/adminPanel/update-probidhan-object',[
    'uses'  =>'AcademicDBController@updateprobidhanobject',
    'as'    =>'updateprobidhanobject'
]);


Route::get('/adminPanel/delete-probidhan-object/{id}',[
    'uses'  =>'AcademicDBController@delProbidhanObject',
    'as'    =>'delProbidhanObject'
]);



//SemisterPlan Management
Route::get('/adminPanel/semisterplan',[
    'uses'  =>'AdminController@semisterplan',
    'as'    =>'backsemisterplan'
]);

Route::get('/adminPanel/new-semisterplan',[
    'uses'  =>  'AdminController@newsemisterplan',
    'as'    =>  'newsemisterplan'
]);

Route::post('/adminPanel/create-semisterplan',[
    'uses'  =>'AcademicDBController@createsemisterplan',
    'as'    =>'createsemisterplan'
]);

Route::post('/adminPanel/update-semisterplan',[
    'uses'  =>'AcademicDBController@updatesemisterplan',
    'as'    =>'updatesemisterplan'
]);

Route::get('/adminPanel/edit-semisterplan/{id}',[
    'uses'  =>'AdminController@editsemisterplan',
    'as'    =>'editSemisterPlan'
]);

Route::get('/adminPanel/delete-semisterplan/{id}',[
    'uses'  =>'AcademicDBController@deletesemisterplan',
    'as'    =>'delSemisterPlan'
]);

Route::post('/adminPanel/update-semisterplan-object',[
    'uses'  =>'AcademicDBController@updatesemisterplanobject',
    'as'    =>'updatesemisterplanobject'
]);


Route::get('/adminPanel/delete-semisterplan-object/{id}',[
    'uses'  =>'AcademicDBController@delSemisterPlanObject',
    'as'    =>'delSemisterPlanObject'
]);



//ClassRoutine Management

Route::get('/adminPanel/classroutine',[
    'uses'  =>'AdminController@classroutine',
    'as'    =>'backclassroutine'
]);

Route::get('/adminPanel/new-classroutine',[
    'uses'  =>  'AdminController@newclassroutine',
    'as'    =>  'newclassroutine'
]);

Route::post('/adminPanel/create-classroutine',[
    'uses'  =>'AdminPanelController@confirmClassrotine',
    'as'    =>'createclassroutine'
]);

Route::post('/adminPanel/update-classroutine',[
    'uses'  =>'AdminPanelController@updateClassrotine',
    'as'    =>'updateclassroutine'
]);

Route::get('/adminPanel/edit-classroutine/{id}',[
    'uses'  =>'AdminController@editclassroutine',
    'as'    =>'editClassRoutine'
]);

Route::get('/adminPanel/delete-classroutine/{id}',[
    'uses'  =>'AdminController@deleteclassroutine',
    'as'    =>'delClassRoutine'
]);

Route::post('/adminPanel/update-classroutine-object',[
    'uses'  =>'AcademicDBController@updateclassroutineobject',
    'as'    =>'updateclassroutineobject'
]);


Route::get('/adminPanel/delete-classroutine-object/{id}',[
    'uses'  =>'AcademicDBController@delClassRoutineObject',
    'as'    =>'delClassRoutineObject'
]);


// //ExamRoutine Management
Route::get('/adminPanel/examroutine',[
    'uses'  =>'AdminController@examroutine',
    'as'    =>'backexamroutine'
]);

Route::get('/adminPanel/new-examroutine',[
    'uses'  =>  'AdminController@newexamroutine',
    'as'    =>  'newexamroutine'
]);

Route::post('/adminPanel/create-examroutine',[
    'uses'  =>'AdminPanelController@confirmExamRotine',
    'as'    =>'createexamroutine'
]);

Route::post('/adminPanel/update-examroutine',[
    'uses'  =>'AdminPanelController@updateExamRotine',
    'as'    =>'updateexamroutine'
]);

Route::get('/adminPanel/edit-examroutine/{id}',[
    'uses'  =>'AdminController@editexamroutine',
    'as'    =>'editExamRoutine'
]);

Route::get('/adminPanel/delete-examroutine/{id}',[
    'uses'  =>'FrontViewController@deletExam',
    'as'    =>'delExamRoutine'
]);

Route::post('/adminPanel/update-examroutine-object',[
    'uses'  =>'AcademicDBController@updateexamroutineobject',
    'as'    =>'updateexamroutineobject'
]);


Route::get('/adminPanel/delete-examroutine-object/{id}',[
    'uses'  =>'AcademicDBController@delExamRoutineObject',
    'as'    =>'delExamRoutineObject'
]);


//AcademicCalender Management
Route::get('/adminPanel/academiccalender',[
    'uses'  =>'AdminController@academiccalender',
    'as'    =>'backacademiccalender'
]);

Route::get('/adminPanel/new-academiccalender',[
    'uses'  =>  'AdminController@newacademiccalender',
    'as'    =>  'newacademiccalender'
]);

Route::post('/adminPanel/create-academiccalender',[
    'uses'  =>'AcademicDBController@createacademiccalender',
    'as'    =>'createacademiccalender'
]);

Route::post('/adminPanel/update-academiccalender',[
    'uses'  =>'AcademicDBController@updateacademiccalender',
    'as'    =>'updateacademiccalender'
]);

Route::get('/adminPanel/edit-academiccalender/{id}',[
    'uses'  =>'AdminController@editacademiccalender',
    'as'    =>'editAcademicCalender'
]);

Route::get('/adminPanel/delete-academiccalender/{id}',[
    'uses'  =>'AcademicDBController@deleteacademiccalender',
    'as'    =>'delAcademicCalender'
]);

Route::post('/adminPanel/update-academiccalender-object',[
    'uses'  =>'AcademicDBController@updateacademiccalenderobject',
    'as'    =>'updateacademiccalenderobject'
]);


Route::get('/adminPanel/delete-academiccalender-object/{id}',[
    'uses'  =>'AcademicDBController@delAcademicCalenderObject',
    'as'    =>'delAcademicCalenderObject'
]);

//Page Management
Route::get('/adminPanel/page',[
    'uses'  =>'AdminController@pagelist',
    'as'    =>'pagelist'
]);
Route::get('/adminPanel/new-page',[
    'uses'  =>  'AdminController@newpage',
    'as'    =>  'newpage'
]);

Route::post('/adminPanel/create-page',[
    'uses'  =>'PageController@createpage',
    'as'    =>'createpage'
]);

Route::post('/adminPanel/update-page',[
    'uses'  =>'PageController@updatepage',
    'as'    =>'updatepage'
]);

Route::get('/adminPanel/edit-page/{id}',[
    'uses'  =>'AdminController@editpage',
    'as'    =>'editPage'
]);

Route::get('/adminPanel/delete-page/{id}',[
    'uses'  =>'PageController@deletepage',
    'as'    =>'delPage'
]);

Route::post('/adminPanel/update-page-objects',[
    'uses'  =>'PageController@updatepageobject',
    'as'    =>'updatepageobjects'
]);


Route::get('/adminPanel/delete-page-object/{id}',[
    'uses'  =>'PageController@delPageObject',
    'as'    =>'delPageObject'
]);

// Send Malil//

Route::get('/adminPanel/send/email',[
    'uses'  =>'GalleryController@sendMail',
    'as'    =>'sendMail'
]);
//Gallery Management
Route::get('/adminPanel/gallery',[
    'uses'  =>'AdminController@gallery',
    'as'    =>'gallery'
]);

//Photo Gallery Management
Route::get('/adminPanel/photo-gallery',[
    'uses'  =>'GalleryController@photogallery',
    'as'    =>'photogallery'
]);

Route::get('/adminPanel/new-photogallery',[
    'uses'  =>  'GalleryController@newphotogallery',
    'as'    =>  'newphotogallery'
]);

Route::post('/adminPanel/create-photogallery',[
    'uses'  =>'GalleryController@createphotogallery',
    'as'    =>'createphotogallery'
]);

Route::post('/adminPanel/update-photogallery',[
    'uses'  =>'GalleryController@updatephotogallery',
    'as'    =>'updatephotogallery'
]);

Route::get('/adminPanel/edit-photogallery/{id}',[
    'uses'  =>'GalleryController@editphotogallery',
    'as'    =>'editphotogallery'
]);

Route::get('/adminPanel/delete-photogallery/{id}',[
    'uses'  =>'GalleryController@deletephotogallery',
    'as'    =>'deletephotogallery'
]);

Route::post('/adminPanel/update-photogallery-objects',[
    'uses'  =>'GalleryController@updatephotogalleryobject',
    'as'    =>'updatephotogalleryobject'
]);


Route::get('/adminPanel/delete-photogallery-object/{id}',[
    'uses'  =>'GalleryController@delPhotoGalleryObject',
    'as'    =>'delPhotoGalleryObject'
]);

//Video Gallery Management
Route::get('/adminPanel/video-gallery',[
    'uses'  =>'GalleryController@videogallery',
    'as'    =>'videogallery'
]);
Route::get('/adminPanel/new-videogallery',[
    'uses'  =>  'GalleryController@newvideogallery',
    'as'    =>  'newvideogallery'
]);

Route::post('/adminPanel/create-videogallery',[
    'uses'  =>'GalleryController@createvideogallery',
    'as'    =>'createvideogallery'
]);

Route::post('/adminPanel/update-videogallery',[
    'uses'  =>'GalleryController@updatevideogallery',
    'as'    =>'updatevideogallery'
]);

Route::get('/adminPanel/edit-videogallery/{id}',[
    'uses'  =>'GalleryController@editvideogallery',
    'as'    =>'editvideogallery'
]);

Route::get('/adminPanel/delete-videogallery/{id}',[
    'uses'  =>'GalleryController@deletevideogallery',
    'as'    =>'deletevideogallery'
]);

Route::post('/adminPanel/update-videogallery-objects',[
    'uses'  =>'GalleryController@updatevideogalleryobject',
    'as'    =>'updatevideogalleryobject'
]);
  

Route::get('/adminPanel/delete-videogallery-object/{id}',[
    'uses'  =>'GalleryController@delVideoGalleryObject',
    'as'    =>'delVideoGalleryObject'
]);

//********************** Slider **************************************//
Route::get('slider/list',[
    'uses'  =>'FrontViewController@sliderlist',
    'as'    =>'sliderlist'
]);

Route::get('new/slider',[
    'uses'  =>'FrontViewController@newslider',
    'as'    =>'newslider'
]);

Route::post('slider/confirm',[
    'uses'  =>'AdminPanelController@sliderConfirm',
    'as'    =>'createslide'
]);

Route::get('edit/slider/{id}',[
    'uses'  =>'FrontViewController@editslide',
    'as'    =>'editlist'
]);

Route::post('updte/slide',[
    'uses'  =>'AdminPanelController@sliderUpdate',
    'as'    =>'sliderUpdate'
    ]);
    
Route::get('delete/slider/{id}',[
    'uses'  =>'FrontViewController@deletslid',
    'as'    =>'deletslide'
]);
    
//************************** backend route****************************//




Route::get('contactform',[
    'uses'  =>'FrontViewController@contactform',
    'as'    =>'contactform'
]);
Route::post('/store',[
    'uses'  =>'FrontViewController@Store',
    'as'    =>'contactStore'
]);

Route::get('jobplaceform',[
    'uses'  =>'FrontViewController@jobplaceform',
    'as'    =>'jobplaceform'
]);

Route::post('/jobStore',[
    'uses'  =>'FrontViewController@jobStore',
    'as'    =>'jobStore'
]);

// // photo gallery management

Route::get('backend/photo-gallery',[
    'uses'  =>'GalleryController@photogallery',
    'as'    =>'photogallery'
]);

Route::get('backend/new-photogallery',[
    'uses'  =>  'GalleryController@newphotogallery',
    'as'    =>  'newphotogallery'
]);


Route::post('/backend/create-photogallery',[
    'uses'  =>'GalleryController@createphotogallery',
    'as'    =>'createphotogallery'
]);

Route::get('/backend/edit-photogallery/{id}',[
    'uses'  =>'GalleryController@editphotogallery',
    'as'    =>'editphotogallery'
]);

Route::get('/adminPanel/delete-photogallery/{id}',[
    'uses'  =>'GalleryController@deletephotogallery',
    'as'    =>'deletephotogallery'
]);

Route::get('backend/video-gallery',[
    'uses'  =>'GalleryController@videogallery',
    'as'    =>'videogallery'
]);

Route::get('backend/new-videogallery',[
    'uses'  =>  'GalleryController@newvideogallery',
    'as'    =>  'newvideogallery'
]);
Route::post('/adminPanel/create-videogallery',[
    'uses'  =>'GalleryController@createvideogallery',
    'as'    =>'createvideogallery'
]);

Route::get('/backend/contactMessage',[
    'uses'  =>'AdminController@contactview',
    'as'    =>'contactview'
]);

Route::get('/backend/page',[
    'uses'  =>'AdminController@pagelist',
    'as'    =>'pagelist'
]);
Route::get('/adminPanel/new-page',[
    'uses'  =>  'AdminController@newpage',
    'as'    =>  'newpage'
]);
Route::get('/adminPanel/edit-page/{id}',[
    'uses'  =>'AdminController@editpage',
    'as'    =>'editPage'
]);
Route::get('/adminPanel/delete-page-object/{id}',[
    'uses'  =>'PageController@delPageObject',
    'as'    =>'delPageObject'
]);

Route::post('/adminPanel/update-page',[
    'uses'  =>'PageController@updatepage',
    'as'    =>'updatepage'
]);

Route::get('/adminPanel/delete-page/{id}',[
    'uses'  =>'PageController@deletepage',
    'as'    =>'delPage'
]);

Route::get('/backend/academic',[
    'uses'  =>'AdminController@backacademic',
    'as'    =>'backacademic'
]);

Route::post('/backend/create-page',[
    'uses'  =>'PageController@createpage',
    'as'    =>'createpage'
]);

//Student Management
Route::get('/backend/students',[
    'uses'  =>'AdminController@students',
    'as'    =>'students'
]);
Route::get('/backend/new-student-profile',[
    'uses'  =>  'AdminController@newstudent',
    'as'    =>  'newstudent'
]);

Route::post('/backend/update-student',[
    'uses'  =>'AdminController@updatestudent',
    'as'    =>'updatestudent'
]);
Route::get('/backend/edit-student/{id}',[
    'uses'  =>'AdminController@editstudent',
    'as'    =>'editStudent'
]);

//Notice & Event Management
Route::get('/adminPanel/notice',[
    'uses'  =>'AdminController@notice',
    'as'    =>'backnotice'
]);
Route::get('/adminPanel/new-notice',[
    'uses'  =>  'AdminController@newnotice',
    'as'    =>  'newnotice'
]);



Route::get('/adminPanel/edit-notice/{id}',[
    'uses'  =>'AdminController@editnotice',
    'as'    =>'editNotice'
]);


