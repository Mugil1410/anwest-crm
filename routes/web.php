<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\SiteController;


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

//admin login
Route::get('/login',[UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/auth/check', [UserController::class,'authCheck'])->name('auth.check');



// site pages
Route::get('/', [SiteController::class, 'h1'])->name('main');
Route::get('/software_development', [SiteController::class,'software_development'])->name('software_development');
Route::get('/staff',[SiteController::class, 'staff'])->name('staff');
Route::get('/android', [SiteController::class,'android'])->name('android');
Route::get('/ai', [SiteController::class,'ai'])->name('ai');
Route::get('/digital_marketing', [SiteController::class,'digital_marketing'])->name('digital_marketing');
Route::get('/entertainment', [SiteController::class,'entertainment'])->name('entertainment');
Route::get('/life_science', [SiteController::class,'life_science'])->name('life_science');
Route::get('/it', [SiteController::class,'it'])->name('it');
Route::get('/transport', [SiteController::class,'transport'])->name('transport');
Route::get('/services-details',[SiteController::class,'services_details'])->name('services-details');
Route::get('/gas',[SiteController::class, 'gas'])->name('gas');
Route::get('/aviation',[SiteController::class, 'aviation'])->name('aviation');
Route::get('/contact',[SiteController::class, 'contact'])->name('contact');
Route::get('/cloud',[SiteController::class, 'cloud'])->name('cloud');

// site carrer
Route::get('/career',[SiteController::class, 'career'])->name('career');
Route::get('/jobdescription/{id}',[SiteController::class, 'jobdescription'])->name('jobdescription');
Route::get('/jobform/{id}',[SiteController::class,'jobform'])->name('jobform');
Route::post('/store', [SiteController::class,'store'])->name('store');
Route::get('/formsubmit',[SiteController::class,'applicationsubmission'])->name('applicationsubmission');

//site subscriber route
Route::post('/subscriber', [SiteController::class,'subscriber'])->name('subscriber');
Route::get('/subscriberlist',[SiteController::class,'subscriberlist'])->name('subscriberlist');
Route::post('/subscriberdelete',[SiteController::class,'subscriberdelete'])->name('subscriberdelete');


Route::middleware('auth')->group(function () {
//job routes
Route::get('/dashboard', [UserController::class, 'index'])->name('home');
Route::get('/job',[UserController::class, 'job'])->name('job');
Route::post('/jobstatus',[UserController::class, 'jobstatus'])->name('jobstatus');
Route::get('/add-job', [UserController::class,'addJob'])->name('Addjob');
Route::post('/create-job', [UserController::class,'jobpost'])->name('jobpost');
Route::get('/edit/{id}', [UserController::class,"edit"])->name('jobedit');
Route::post('/update/{id}', [UserController::class,"update"])->name('jobupdate');
Route::get('/delete/{id}', [UserController::class,"delete"])->name('jobdelete');

//applicants route
Route::get('/applicants', [UserController::class,"applicants"])->name('applicants');
Route::get('/applicants_profile/{id}', [UserController::class,"applicantsprofile"])->name('applicants.profile');
Route::post('/update_status', [UserController::class,"updatestatus"])->name('applicants.updatestatus');
Route::post('/applicants_delete',[UserController::class,'applicantdelete'])->name('applicantdelete');
Route::post('/apllicants-filter', [UserController::class,"applicantsfilter"])->name('apllicants.filter');
Route::get('/resume/{id}', [UserController::class,"resumeshow"])->name('resume.show');

//query routes
Route::get("/querylist", [UserController::class,"querylist"])->name('querylist');
Route::post("/query", [UserController::class,"query"] )->name("query");
Route::post("/querydelete", [UserController::class,"querydelete"] )->name("querydelete");

});
Route::get('/logout',[UserController::class, 'logout'])->name('logout');

