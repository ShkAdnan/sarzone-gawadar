<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\graduateController;
use App\Http\Controllers\placementController;
use App\Http\Controllers\careerController;
use App\Http\Controllers\admissionController;
use App\Http\Controllers\frontAdmissionController;
use App\Http\Controllers\homeAndBasicController;
use App\Http\Controllers\noticeController;
use App\Http\Controllers\resourcesController;
use App\Http\Controllers\applierController;
use App\Http\Controllers\dashboardController;

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

// Route::get('/Artisan',function(){
//     Artisan::call('make:model visitor');
// });



// Route::get('/controlller', function () {
//     Artisan::call('make:controller dashboardController');
// });


// ADMIN ROUTES

Route::group(['prefix'=>'admin'],function(){
    Route::get('/login',[Login::class,'getForm'])->name('login_form');
    Route::post('/logging_In',[Login::class,'login'])->name('login');
    Route::get('/logOut',[Login::class,'logOut'])->name('logOut');
});



// DASHBOARD ROUTES


Route::group(['middleware' => 'userCheck','prefix'=>'dashboard'],function(){
    Route::get('/',[dashboardController::class,'index'])->name('dashboard');
});

// NOTICE ROUTES

Route::group(['middleware' => 'userCheck','prefix'=>'notice'],function(){
    Route::get('/',[noticeController::class,'index'])->name('notice');
    Route::post('/add',[noticeController::class,'store'])->name('notice.add');
    Route::get('/view',[noticeController::class,'show'])->name('notice.view');
    Route::get('/delete/{id}',[noticeController::class,'delete'])->name('notice.delete');
    Route::post('/online',[noticeController::class,'online'])->name('notice.online');
});

Route::group(['middleware' => 'userCheck','prefix'=>'stories'],function(){
    Route::get('/',[homeAndBasicController::class,'Stories'])->name('Stories');
    Route::post('/add',[homeAndBasicController::class,'add'])->name('Stories.add');
    Route::get('/view',[homeAndBasicController::class,'show'])->name('Stories.view');
    Route::get('/edit/{id}',[homeAndBasicController::class,'editStories'])->name('Stories.edit');
    Route::post('/update',[homeAndBasicController::class,'updateStories'])->name('Stories.update');
    Route::get('/delete/{id}',[homeAndBasicController::class,'delete'])->name('Stories.delete');
    // Route::post('/online',[noticeController::class,'online'])->name('notice.online');
});

// APPLIERS ROUTES
Route::group(['middleware' => 'userCheck','prefix'=>'appliers'],function(){
    Route::get('/show',[applierController::class,'show'])->name('appliers.show');
    Route::get('/delete/{id}',[applierController::class,'delete'])->name('applier.delete');
    Route::get('/approve/{id}',[applierController::class,'approve'])->name('applier.approve');
});



// GALLERY ROUTES
Route::group(['middleware' => 'userCheck','prefix'=>'gallery'],function(){
    Route::get('/',[galleryController::class,'index'])->name('album');
    Route::get('/view',[galleryController::class,'show'])->name('album.view');
    Route::post('/add',[galleryController::class,'store'])->name('album.add');
    Route::get('/delete/{id}',[galleryController::class,'delete'])->name('album.delete');
    Route::get('/edit/{id}',[galleryController::class,'edit'])->name('album.edit');
    Route::post('/edited',[galleryController::class,'edited'])->name('album.edited');
});

// GRADUATE ROUTES
Route::group(['middleware' => 'userCheck','prefix' => 'graduate'],function(){
    Route::get('/',[graduateController::class,'index'])->name('graduates');
    Route::get('/view',[graduateController::class,'show'])->name('graduate.view');
    Route::post('/add',[graduateController::class,'store'])->name('graduate.add');
    Route::get('/delete/{id}',[graduateController::class,'delete'])->name('graduate.delete');
    Route::get('/edit/{id}',[graduateController::class,'edit'])->name('graduate.edit');
    Route::post('/edited',[graduateController::class,'edited'])->name('graduate.edited');
});


// PLACEMENT ROUTES
Route::group(['middleware' => 'userCheck','prefix' => 'placement'],function(){
    Route::get('/',[placementController::class,'index'])->name('placement');
    Route::get('/view',[placementController::class,'show'])->name('placement.view');
    Route::post('/add',[placementController::class,'store'])->name('placement.add');
    Route::get('/delete/{id}',[placementController::class,'delete'])->name('placement.delete');
    Route::get('/edit/{id}',[placementController::class,'edit'])->name('placement.edit');
    Route::post('/edited',[placementController::class,'edited'])->name('placement.edited');
    Route::get('/closed',[placementController::class,'closed'])->name('placement.closed');
    Route::get('/viewCVs/{id}',[placementController::class,'viewCVs'])->name('placement.viewCVs');
});


// CAREER ROUTES
Route::group(['middleware' => 'userCheck','prefix' => 'career'],function(){
    Route::get('/',[careerController::class,'index'])->name('career');
    Route::get('/view',[careerController::class,'show'])->name('career.view');
    Route::post('/add',[careerController::class,'store'])->name('career.add');
    Route::get('/delete/{id}',[careerController::class,'delete'])->name('career.delete');
    Route::get('/edit/{id}',[careerController::class,'edit'])->name('career.edit');
    Route::post('/edited',[careerController::class,'edited'])->name('career.edited');
    Route::get('/closed',[careerController::class,'closed'])->name('career.closed');
    Route::get('/viewCVs/{id}',[careerController::class,'viewCVs'])->name('career.viewCVs');
});


// ADMISSIONS ROUTES
Route::group(['middleware' => 'userCheck','prefix' => 'admissions'],function(){
    Route::get('/',[admissionController::class,'index'])->name('admission');
    Route::get('/view',[admissionController::class,'show'])->name('admission.view');
    Route::post('/add',[admissionController::class,'store'])->name('admission.add');
    Route::get('/delete/{id}',[admissionController::class,'delete'])->name('admission.delete');
    Route::get('/edit/{id}',[admissionController::class,'edit'])->name('admission.edit');
    Route::post('/edited',[admissionController::class,'edited'])->name('admission.edited');
    Route::get('/onlineAdmission',[admissionController::class,'onlineAdmission'])->name('admission.onlineAdmission');
    Route::post('/online',[admissionController::class,'online'])->name('admission.online');
});

Route::group(['middleware' => 'userCheck','prefix' => 'online_applications'],function(){
    Route::get('/',[admissionController::class,'onlineApplications'])->name('online_applications');
    Route::get('/view/{id}',[admissionController::class,'viewApplications'])->name('online_applications.view');
    Route::get('/makeViewed/{id}',[admissionController::class,'makeViewed'])->name('online_applications.makeViewed');
    Route::get('/delete/{id}',[admissionController::class,'deleteApplication'])->name('online_applications.delete');

});



                        // FRONT END ROUTES

Route::get('/',[homeAndBasicController::class,'Index'])->name('home')->middleware('visitorCheck');
Route::get('/album/{id}',[homeAndBasicController::class,'album'])->name('gallery.album')->middleware('visitorCheck');


Route::group(['prefix' => 'onlineAdmission','middleware'=>'visitorCheck'],function(){
    Route::get('/',[frontAdmissionController::class,'index'])->name('onlineAdmission.index');
    Route::post('/store',[frontAdmissionController::class,'store'])->name('onlineAdmission.store');
    Route::get('/pre_requisite',[frontAdmissionController::class,'programPre_requisite'])->name('onlineAdmission.pre_requisite');
    Route::get('/pdf',function(){
        return view("front.onlineAdmissionForm_pdf");
    })->name('onlineAdmission.pdf');
    Route::get('/pdf1',[frontAdmissionController::class,'createPDF'])->name('onlineAdmission.pdf1');
});
Route::group(['prefix' => 'about','middleware'=>'visitorCheck'],function(){
    Route::get('/',[homeAndBasicController::class,'aboutIndex'])->name('about.index');
    Route::get('/faculty',[homeAndBasicController::class,'facultyIndex'])->name('about.faculty');
    Route::get('/vocationalFaculty',[homeAndBasicController::class,'vocationalFacultyIndex'])->name('about.vocationalFaculty');
    Route::get('/principle_message',[homeAndBasicController::class,'principleMessage'])->name('about.principleMessage');
    Route::get('/director_message',[homeAndBasicController::class,'directorMessage'])->name('about.directorMessage');
    Route::get('/secratary_message',[homeAndBasicController::class,'secrataryMessage'])->name('about.secrataryMessage');
});
Route::group(['prefix' => 'programs','middleware'=>'visitorCheck'],function(){
    Route::get('/',[homeAndBasicController::class,'programOffered'])->name('program.offering');
    Route::get('/fee-structure',[homeAndBasicController::class,'feeStructure'])->name('program.fee_structure');
});
Route::group(['prefix' => 'careers','middleware'=>'visitorCheck'],function(){
    Route::get('/',[homeAndBasicController::class,'careersIndex'])->name('careers.front');
    Route::get('/applyForm/{id}/{job_type}',[homeAndBasicController::class,'applyForm'])->name('alumnae.applyForm');
    Route::post('/apply',[homeAndBasicController::class,'careerApply'])->name('careers.apply');
});
Route::group(['prefix' => 'alumnae','middleware'=>'visitorCheck'],function(){
    Route::get('/',[homeAndBasicController::class,'alumnaeList'])->name('alumnae');
    Route::get('/placements',[homeAndBasicController::class,'placementsTable'])->name('alumnae.placementsTable');
    Route::get('/applyForm/{id}/{job_type}',[homeAndBasicController::class,'applyForm'])->name('alumnae.applyForm');
    Route::post('/apply',[homeAndBasicController::class,'placementApply'])->name('alumnae.placement.apply');
    Route::get('/verify',[homeAndBasicController::class,'alumnaeVerify'])->name('alumnae.verify');
    Route::post('/AllDetail',[homeAndBasicController::class,'alumnaeAllDetail'])->name('alumnae.details');
});
Route::group(['prefix' => 'resources','middleware'=>'visitorCheck'],function(){
    Route::get('/',[resourcesController::class,'Elibrary'])->name('about.Elibrary');
    Route::get('/helpDesk',[resourcesController::class,'helpDesk'])->name('about.helpDesk');
    Route::get('/FAQ',[resourcesController::class,'FAQ'])->name('about.FAQ');
});
