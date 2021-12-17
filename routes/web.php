<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\userController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;



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


// Auth::routes();

// Route::group(['middleware' => ['auth']], function () {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', userController::class);
// });
// Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('auth/login');
});
// Route::get('/gender', function (){
//     return view('gender');
// });
// Route::get('/student-type', function (){
//     return view('student-type');
// });
// Route::get('/relationship', function (){
//     return view('relationship');
// });
// Route::get('/countries', function (){
//     return view('countries');
// });
// Route::get('/country-codes', function (){
//     return view('country-codes');
// });
// Route::get('/entrance-term', function (){
//     return view('entrance-term');
// });
// Route::get('/program-type', function (){
//     return view('program-type');
// });
// Route::get('/state', function (){
//     return view('state');
// });
// Route::get('/title', function (){
//     return view('title');
// });
// Route::get('/subject-area', function (){
//     return view('subject-area');
// });
// Route::get('/application', function () {
//     return view('application');
// });
// Route::get('/create-user', function (){
//     return view('register');
// });
// Route::get('/create-user', function () {
//     return view('create_user');
// });

// Route::get('/my-students', function () {
//     return view('my-students');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
});
// Route::get('/login', function () {
//     return view('auth/login');
// });
// Route::get('/profile', function () {
//     return view('profile');
// });
// ============== HR ==================
Route::get('/hr/home', function () {
    return view('hr/home');
});
Route::get('hr/dashboard', function () {
    return view('hr/dashboard');
});
Route::get('hr/all-employee', function () {
    return view('hr/all-employee');
});
Route::get('hr/registration', function () {
    return view('hr/registration');
});
Route::get('hr/my-dashboard', function () {
    return view('hr/my-dashboard');
});
Route::get('hr/my-profile', function () {
    return view('hr/my-profile');
});
Route::get('hr/apply-leave', function () {
    return view('hr/apply-leave');
});
Route::get('hr/leave-applications', function () {
    return view('hr/leave-applications');
});
Route::get('hr/confirm-leave', function () {
    return view('hr/confirm-leave');
});
Route::get('hr/apply-loan', function () {
    return view('hr/apply-loan');
});
Route::get('hr/loan-applications', function () {
    return view('hr/loan-applications');
});
Route::get('hr/confirm-loan', function () {
    return view('hr/confirm-loan');
});
Route::get('hr/loan-history', function () {
    return view('hr/loan-history');
});
Route::get('hr/office-location', function () {
    return view('hr/office-location');
});
// Route::get('signin', function (){
//     return view('signin');
// });
// Route::get('/create-user', [UserController::class, 'adduser'])->name('create-user');
Route::get('/gender', [PostController::class, 'getgender'])->name('gender.getgender');
Route::get('/country-codes', [PostController::class, 'getcountrycodes'])->name('country-codes.getcountrycodes');
Route::get('/course', [PostController::class, 'getcourse'])->name('course.getcourse');
Route::get('/entrance-term', [PostController::class, 'getentranceterm'])->name('entrance-term.getentranceterm');
Route::get('/countries', [PostController::class, 'getcountries'])->name('countries.getcountries');
Route::get('/state', [PostController::class, 'getstates'])->name('state.getstates');
Route::get('/relationship', [PostController::class, 'getrelationships'])->name('relationship.getrelationships');
Route::get('/student-type', [PostController::class, 'getstudenttype'])->name('student-type.getstudenttype');
Route::get('/program-type', [PostController::class, 'getprogramtype'])->name('program-type.getprogramtype');
Route::get('/title', [PostController::class, 'gettitles'])->name('title, gettitles');
Route::get('/subject-area', [PostController::class, 'getsubjectarea'])->name('subject-area.getsubjectarea');
Route::get('/school', [PostController::class, 'getschool'])->name('school.getschool');
Route::get('/information', [PostController::class, 'getinformation'])->name('information');
Route::get('/enquiry', [EnquiryController::class, 'addenquiry'])->name('enquiry');
Route::get('application', [PostController::class, 'applicationform'])->name('application');
Route::get('editapplication/{id}', [PostController::class, 'editapplication'])->name('editapplication');
Route::post('updateapplication', [PostController::class, 'updateapplication'])->name('updateapplication');
Route::get('view-documents/{id}', [PostController::class, 'viewdoc'])->name('view-documents');
Route::get('my-students', [PostController::class, 'mystudent'])->name('mystudents');
Route::get('/get-profile/{id}', [PostController::class, 'getapplication'])->name('profile');
// Route::get('/status/{status_id}', [EnquiryController::class, 'getenquiry'])->name('status');
Route::get('/report', [EnquiryController::class, 'getreport'])->name('report');
Route::get('/appreport', [PostController::class, 'appreport'])->name('appreport');
Route::get('/applicant-status', [PostController::class, 'applicantStatus'])->name('applicant-status');
Route::get('/track-payment', [PostController::class, 'trackPayment'])->name('track-payment');

//////
// Route::get('/main', 'EnquiryController@index');
// Route::get('/signin', 'EnquiryController@index');
// Route::post('/main/checklogin', 'EnquiryController@checklogin');
// Route::get('main/successlogin', 'EnquiryController@successlogin');
// Route::get('main/logout', 'EnquiryController@logout');
Route::get('/dashboard', [PostController::class, 'dashboard']);
Route::get('/signin', [PostController::class, 'index']);
Route::post('main/checklogin', [PostController::class, 'checklogin'])->name('checklogin');
Route::get('main/successlogin', [PostController::class, 'successlogin']);
Route::get('main/logout', [PostController::class, 'logout']);

// Route::post('/user/checklogin', 'UserController@checklogin');
// Route::get('user/dashboard', 'UserController@successlogin');
// Route::get('/logout', 'MainController@logout');

Route::get('/status', [EnquiryController::class, 'getenquiry'])->name('status');
//---------------POST ROUTES------------------
// Route::post('/course', [PostController::class, 'addcourse'])->name('post.add');
Route::post('course', [PostController::class, 'addcoursesubmit'])->name('course.submit');
Route::post('country-codes', [PostController::class, 'addcountrycodes'])->name('country-codes.submit');
Route::post('entrance-term', [PostController::class, 'addentranceterm'])->name('entrance-term.submit');
Route::post('gender', [PostController::class, 'addgender'])->name('gender.submit');
Route::post('countries', [PostController::class, 'addcountries'])->name('countries.submit');
Route::post('state', [PostController::class, 'addstates'])->name('state.submit');
Route::post('relationship', [PostController::class, 'addrelationships'])->name('relationship.submit');
Route::post('student-type', [PostController::class, 'addstudenttype'])->name('student-type.submit');
Route::post('program-type', [PostController::class, 'addprogramtype'])->name('program-type.submit');
Route::post('title', [PostController::class, 'addtitles'])->name('title.submit');
Route::post('subject-area', [PostController::class, 'addsubjectarea'])->name('subject-area.submit');
Route::post('school', [PostController::class, 'addschool'])->name('school.submit');
Route::post('information', [PostController::class, 'addinformation'])->name('information.submit');
Route::post('/application', [PostController::class, 'addapplication'])->name('application.submit');
Route::get('/create_user', 'App\Http\Controllers\userController@createuser')->name('createuser');
Route::post('/create_user', 'App\Http\Controllers\userController@userstore')->name('userstore');
Route::post('/enquiry', [EnquiryController::class, 'createEnquiry'])->name('submitenquiry');
Route::get('editenquiry/{id}', [EnquiryController::class, 'editenquiry'])->name('editenquiry');
Route::post('updateenquiry', [EnquiryController::class, 'updateenquiry'])->name('updateenquiry');
Route::post('status', [EnquiryController::class, 'statusupdate'])->name('statusupdate');
Route::post('/report', [EnquiryController::class, 'daily_report'])->name('report');
Route::post('/appreport', [PostController::class, 'app_report'])->name('appreport');




//---------------------------DELETE ROUTES-----------------------------
Route::get('delete-course/{id}', [PostController::class, 'delcourse'])->name('delete-course.delete');
Route::get('delete-entrance-term/{id}', [PostController::class, 'delentranceterm'])->name('delete-entrance-term.delete');
Route::get('delete-gender/{id}', [PostController::class, 'delgender'])->name('delete-gender.delete');
Route::get('delete-country-codes/{id}', [PostController::class, 'delcountrycode'])->name('delete-country-codes.delete');
Route::get('delete-countries/{id}', [PostController::class, 'delcountries'])->name('delete-countries.delete');
Route::get('delete-state/{id}', [PostController::class, 'delstates'])->name('delete-state.delete');
Route::get('delete-relationship/{id}', [PostController::class, 'delrelationships'])->name('delete-relationship.delete');
Route::get('delete-student-type/{id}', [PostController::class, 'delstudenttype'])->name('delete-student-type.delete');
Route::get('delete-program-type/{id}', [PostController::class, 'delprogramtype'])->name('delete-program-type.delete');
Route::get('delete-title/{id}', [PostController::class, 'deltitle'])->name('delete-title.delete');
Route::get('delete-subject-area/{id}', [PostController::class, 'delsubjectarea'])->name('delete-subject-area.delete');
Route::get('delete-school/{id}', [PostController::class, 'delschool'])->name('delete-school.delete');
Route::get('delete-information/{id}', [PostController::class, 'delinformation'])->name('delete-information.delete');
// Route::get('/post', [PostController::class, 'getUserRoles'])->name('post.getuserroles');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
