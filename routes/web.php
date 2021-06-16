<?php

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


Route::get('clear',function(){

    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    // Artisan::call('translator:flush');
    // Waavi\Translation\Facades\TranslationCache::flushAll();
//    Session::forget('key');
//    Session::flush();
    die('Cleared');
});

/*__________________Gust Routs______________________________*/
Route::get('/laravelhome', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Route::get('verifyemail/{id}', 'Auth\RegisterController@verifyEmail');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset_password', 'Auth\ForgotPasswordController@reset_password');
Route::get('/checkUsername', 'Rules@checkUsername');
Route::get('/checkUserEmail', 'Rules@checkUserEmail');
Route::get('/email-exist', 'Front\UserFrontController@isEmailExist');
Route::get('/administrator', 'Auth\LoginController@showAdminLoginForm')->name('administrator');
Route::get('/instructor', 'Auth\LoginController@showInstructorLoginForm')->name('instructor');
Route::get('/learner', 'Auth\LoginController@showLearnerLoginForm')->name('learner');
/*__________________Gust Routs______________________________*/


//Route::middleware(['guest'])->group(function () {

    /************* Home Starts ***************/
//    Route::get('/', 'Front\HomeController@index')->name('home');
    Route::get('/booking', 'Front\HomeController@booking')->name('booking');
    Route::get('/simpe', 'Front\HomeController@events')->name('simpe');
    Route::get('/', 'Front\HomeController@index')->name('home');
    Route::post('/homelogin', 'Auth\LoginController@homelogin');
    Route::post('/homesignup', 'Auth\RegisterController@create_user');
    Route::get('/forgotpassword', 'Front\HomeController@ForgotPassword');
    Route::post('/resetemail', 'Front\HomeController@ResetEmail');
    Route::get('/updatepass/{id}', 'Front\HomeController@UpdatePassword');
    Route::post('/updatepass', 'Front\HomeController@ResetPassword');
    Route::get('/geteventslist', 'Front\HomeController@GetEventsList');
    Route::get('/geteventonid/{ids}', 'Front\HomeController@GetEventOnIds');
    /************* Home Ends ***************/

//});

Route::middleware(['user','verified'])->group(function () {
	/*__________________Front Routs______________________________*/
	Route::get('profile', 'UserController@user_profile');
	Route::post('reset_password', 'UserController@reset_password');
});
// Registration Routes...
Route::get('/register', 'Auth\RegisterController@ShowRegistration')->name('register');
Route::post('register', 'Auth\RegisterController@create_user');
// Login user
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');


// Route::get('admin_area', ['middleware' => 'admin', function () {
Route::middleware(['admin'])->group(function () {

    Route::post('/admin/users_add', 'UserController@create_user');
    Route::resource('/admin/users', 'UserController');
    Route::get('/admin/students/{cid}', 'UserController@User_enrolled_in_course');
    Route::get('/admin/user-create', 'UserController@user_create');
    Route::get('/admin/getusers/{id}', 'UserController@getusers');
    Route::delete('/admin/user/{id}', 'UserController@destroy');
    Route::get('/user-edit/{squirrel}', 'UserController@edit_user');
    Route::post('/admin/update-user', 'UserController@update_user');
    Route::get('/admin/user-delete/{squirrel}', 'UserController@delete_user');
    Route::get('/admin/my-account', 'UserController@my_account');
    Route::get('/admin/instructor', 'UserController@instructor');
    Route::get('/admin/learner', 'UserController@learner');


    /*************** Categories Starts ***************/
    Route::resource('/admin/categories', 'Category');
    Route::delete('/admin/childitem/categories/{id}', 'Category@destroy');
    Route::get('/admin/category', 'Category@index');
    Route::get('/admin/childitem/{id}', 'Category@ChildItem');
    Route::post('/admin/category_add', 'Category@CategoryAdd');
    Route::get('/admin/getcategories/{cat_id}', 'Category@GetCategories');
    Route::post('/admin/update-category', 'Category@UpdateCategory');
    /*************** Categories Ends ***************/

    /*************** Question & Answer Starts ***************/
    Route::resource('/admin/questionandanswer', 'QandAController');
    Route::delete('/admin/childqa/questionandanswer/{id}', 'QandAController@destroy');
    Route::get('/admin/questionlist/{eid}/{table_name}', 'QandAController@index');
    Route::get('/admin/questionandanswer', 'QandAController@index');
    Route::get('/admin/childqa/{id}', 'QandAController@ChildItem');
    Route::post('/admin/questionandanswer_add', 'QandAController@qandaAdd');
    Route::get('/admin/getquestionandanswer/{cat_id}', 'QandAController@Getqanda');
    Route::get('/admin/getqaexam/{tab_name}', 'QandAController@GeQAExam');
    Route::post('/admin/update-questionandanswer', 'QandAController@Updateqanda');
    Route::get('/admin/updateansstatus/{id}', 'QandAController@UpdateANSStatus');
    /*************** Question & Answer Ends ***************/

    /*************** CMS Starts ***************/
    Route::resource('/admin/cms', 'cmsc');
    Route::get('/admin/cms', 'cmsc@index');
    Route::post('/admin/cms_add', 'cmsc@CMSAdd');
    Route::get('/admin/getcms/{cms_id}', 'cmsc@GetCMS');
    Route::post('/admin/savecms', 'Front\CMSController@SaveCMS');
    Route::post('/admin/update-cms', 'cmsc@UpdateCMS');
    Route::get('/admin/cmstpage/{cms_pid}', 'cmsc@SelectPage');
    /*************** CMS Ends ***************/


    /*************** Hallar Starts ***************/
    Route::resource('/admin/hallar', 'HallarController');
    Route::get('/admin/hallar', 'HallarController@index');
    Route::post('/admin/hallar_add', 'HallarController@HallarAdd');
    Route::get('/admin/gethallar/{hallar_id}', 'HallarController@GetHallar');
    Route::post('/admin/update-hallar', 'HallarController@UpdateHallar');
    Route::post('/admin/switch-hallar', 'HallarController@SwitcherHallar');
    Route::get('/admin/user_hallar/{id}', 'HallarController@UserHallar');
    /*************** Hallar Ends ***************/

    /*************** Lag Starts ***************/
    Route::resource('/admin/lag', 'LagController');
    Route::get('/admin/lag', 'LagController@index');
    Route::post('/admin/lag_add', 'LagController@LagAdd');
    Route::get('/admin/getlag/{lag_id}', 'LagController@GetLag');
    Route::post('/admin/update-lag', 'LagController@UpdateLag');
    Route::post('/admin/switch-lag', 'LagController@Switcherlag');
    /*************** Lag Ends ***************/

    /*************** Ledare Starts ***************/
    Route::resource('/admin/ledare', 'LedareController');
    Route::get('/admin/ledare', 'LedareController@index');
    Route::post('/admin/ledare_add', 'LedareController@LedareAdd');
    Route::get('/admin/getledare/{ledare_id}', 'LedareController@GetLedare');
    Route::post('/admin/update-ledare', 'LedareController@UpdateLedare');
    Route::post('/admin/switch-ledare', 'LedareController@SwitcherLedare');
    /*************** Ledare Ends ***************/

    /*************** CurriCulums Starts ***************/
    Route::resource('/admin/coursecurriculum', 'CurriCulums');
    Route::get('/admin/curriculum', 'CurriCulums@index');
    Route::post('/admin/curriculum_add', 'CurriCulums@CurriCulumAdd');
    Route::get('/admin/getcurriculum/{cc_id}', 'CurriCulums@GetCurriCulum');
    Route::post('/admin/update-curriculum', 'CurriCulums@UpdateCurriCulum');
    /*************** CurriCulums Ends ***************/

    /*************** Comment Starts ***************/
    Route::resource('/admin/comment', 'CommentController');
    Route::get('/admin/comment', 'CommentController@index');
    Route::post('/admin/comment_add', 'CommentController@CommentAdd');
    Route::get('/admin/getcomment/{id}', 'CommentController@GetComment');
    Route::post('/admin/update-comment', 'CommentController@UpdateComment');
    Route::get('/admin/comments_blocked/{id}', 'CommentController@CommentsBlocked');
    /*************** Comment Ends ***************/

    /*************** Coupan Starts ***************/
    Route::resource('/admin/coupan', 'CoupanController');
    Route::get('/admin/coupan', 'CoupanController@index');
    Route::post('/admin/coupan_add', 'CoupanController@CoupanAdd');
    Route::get('/admin/getcoupan/{id}', 'CoupanController@GetCoupan');
    Route::post('/admin/update-coupan', 'CoupanController@UpdateCoupan');
    /*************** Coupan Ends ***************/

    /*************** Course Program Starts ***************/
    Route::resource('/admin/courseprogram', 'CourseProgramController');
    Route::get('/admin/courseprogram', 'CourseProgramController@index');
    Route::post('/admin/courseprogram_add', 'CourseProgramController@CourseProgramAdd');
    Route::get('/admin/getcourseprogram/{cp_id}', 'CourseProgramController@GetCourseProgram');
    Route::post('/admin/update-courseprogram', 'CourseProgramController@UpdateCourseProgram');
    Route::post('/admin/update-unit', 'CourseProgramController@UpdateUnits');
    Route::get('/admin/cplisting/{cid}', 'CourseProgramController@CPListing');
    Route::get('/admin/cpunits/{cid}', 'CourseProgramController@Units');
    Route::get('/admin/getajaxquiz/{cid}', 'CourseProgramController@GetAjaxQuiz');
    /*************** Course Program Ends ***************/

    /*************** Exam Starts ***************/
    Route::resource('/admin/exam', 'Exams');
    Route::get('/admin/exam', 'Exams@index');
    Route::get('/admin/examlisting/{cid}', 'Exams@ExamListing');
    Route::post('/admin/exam/removeall', 'Exams@RemoveAll');
    Route::post('/admin/exam_add', 'Exams@ExamsAdd');
    Route::post('/admin/selected_exam_add', 'Exams@AddSelectedExam');
    Route::get('/admin/getexam/{exm_id}', 'Exams@GetExams');
    Route::post('/admin/update-exam', 'Exams@UpdateExams');
    Route::post('/admin/update-selected-exam', 'Exams@UpdateSelectedExams');
    /*************** Exam Ends ***************/

    /*************** MockExam Starts ***************/
    Route::resource('/admin/mockexam', 'MexamController');
    Route::get('/admin/mexam', 'MexamController@index');
    Route::get('/admin/mexamlisting/{cid}', 'MexamController@MExamListing');
    Route::delete('/admin/mexamlisting/mockexam/{cid}', 'MexamController@destroy');
    Route::post('/admin/mexam_add', 'MexamController@MexamsAdd');
    Route::get('/admin/getmexam/{exm_id}', 'MexamController@GetMexams');
    Route::post('/admin/update-mexam', 'MexamController@UpdateMexams');
    /*************** MockExam Ends ***************/

    /*************** Quiz Starts ***************/
    Route::resource('/admin/quiz', 'QuizController');
    Route::get('/admin/quiz', 'QuizController@index');
    Route::get('/admin/quizlisting/{cid}', 'QuizController@QuizListing');
    Route::delete('/admin/quizlisting/quiz/{cid}', 'QuizController@destroy');
    Route::post('/admin/quiz_add', 'QuizController@QuizAdd');
    Route::get('/admin/getquiz/{exm_id}', 'QuizController@GetQuiz');
    Route::post('/admin/update-quiz', 'QuizController@UpdateQuiz');
    /*************** Quiz Ends ***************/

    /*************** Testimonial Starts ***************/
    Route::resource('/admin/testimonial', 'TestimonialController');
    Route::get('/admin/testimonial', 'TestimonialController@index');
    Route::post('/admin/testimonial_add', 'TestimonialController@TestimonialAdd');
    Route::get('/admin/gettestimonial/{t_id}', 'TestimonialController@GetTestimonial');
    Route::post('/admin/update-testimonial', 'TestimonialController@UpdateTestimonial');
    /*************** Testimonial Ends ***************/

    /*************** Teams Starts ***************/
    Route::resource('/admin/teams', 'TeamsController');
    Route::get('/admin/teams', 'TeamsController@index');
    Route::post('/admin/teams_add', 'TeamsController@TeamsAdd');
    Route::get('/admin/getteams/{t_id}', 'TeamsController@GetTeams');
    Route::post('/admin/update-teams', 'TeamsController@UpdateTeams');
    /*************** Teams Ends ***************/

    /*************** Clients Starts ***************/
    Route::resource('/admin/client', 'ClientController');
    Route::get('/admin/client', 'ClientController@index');
    Route::post('/admin/client_add', 'ClientController@ClientAdd');
    Route::get('/admin/getclient/{c_id}', 'ClientController@GetClient');
    Route::post('/admin/update-client', 'ClientController@UpdateClient');
    /*************** Clients Ends ***************/

    /*************** Topics Starts ***************/
    Route::resource('/admin/topics', 'TopicsController');
    Route::get('/admin/topics', 'TopicsController@index');
    Route::post('/admin/topics_add', 'TopicsController@TopicsAdd');
    Route::get('/admin/gettopics/{tns_id}', 'TopicsController@GetTopics');
    Route::post('/admin/update-cmstopics', 'TopicsController@UpdateTopics');
    /*************** Topics Ends ***************/


    /*************** Courses Starts ***************/
    Route::resource('/admin/course', 'CoursesController');
    Route::get('/admin/course', 'CoursesController@index');
    Route::post('/admin/course_add', 'CoursesController@CourseAdd');
    Route::get('/admin/getcourse/{cou_id}', 'CoursesController@GetCourse');
    Route::post('/admin/updatestatus', 'CoursesController@UpdateCourseStatus');
    Route::post('/admin/update-course', 'CoursesController@UpdateCourse');
    Route::post('/admin/setproduct', 'CoursesController@SetProduct');
    Route::post('/admin/applyoffer', 'CoursesController@ApplyOffer');
    /*************** Courses Ends ***************/

    /*************** Assignment Starts ***************/
    Route::resource('/admin/assignment', 'AssignmentController');
    Route::get('/admin/assignment', 'AssignmentController@index');
    Route::post('/admin/assignment_add', 'AssignmentController@AssignmentAdd');
    Route::get('/admin/getassignment/{a_id}', 'AssignmentController@GetAssignment');
    Route::post('/admin/update-assignment', 'AssignmentController@UpdateAssignment');
    Route::get('/admin/getassignmentexam/{tab_name}', 'AssignmentController@GetAssignmentExam');
    /*************** Assignment Ends ***************/

    /*************** Certificate Starts ***************/
    Route::resource('/admin/certificate', 'CertificateController');
    Route::get('/admin/certificate', 'CertificateController@index');
    Route::post('/admin/certificate_add', 'CertificateController@CertificateAdd');
    Route::get('/admin/getcertificate/{a_id}', 'CertificateController@GetCertificate');
    Route::post('/admin/update-certificate', 'CertificateController@UpdateCertificate');
    Route::get('/admin/getcertificateexam/{tab_name}', 'CertificateController@GetCertificateExam');
    /*************** Certificate Ends ***************/

    /*************** Order Starts ***************/
    Route::resource('/admin/Order', 'OrderController');
    Route::get('/admin/orders', 'OrderController@index');
    Route::get('/admin/vieworder/{id}', 'OrderController@ViewOrder');
    /*************** Order Ends ***************/

    /*************** Reports Starts ***************/
    Route::resource('/admin/areports', 'ReportsController');
    Route::get('/admin/areports', 'ReportsController@index');
    Route::get('/admin/ireports', 'ReportsController@InstructorRreports');
    /*************** Reports Ends ***************/

    Route::resource('facker', 'FakerController');

    Route::get('/admin/home', 'DashboardController@index');
    Route::get('/admin/home1', 'DashboardController@index1');

    Route::get('/admin/dashboard', function () {
        return redirect('/' . collect(request()->segments())->first() . '/home');
    });
});

Route::middleware(['instructor'])->group(function () {

    Route::resource('/instructor/users', 'UserController');
    Route::post('/instructor/users_add', 'UserController@create_user');
    Route::get('/instructor/students/{cid}', 'UserController@User_enrolled_in_course');
    Route::get('/instructor/user-create', 'UserController@user_create');
    Route::get('/instructor/getusers/{id}', 'UserController@getusers');
    Route::delete('/instructor/user/{id}', 'UserController@destroy');
    Route::post('/instructor/users_add', 'UserController@create_user');
    Route::post('/instructor/update-user', 'UserController@update_user');
    Route::get('/instructor/user-delete/{squirrel}', 'UserController@delete_user');
    Route::get('/instructor/my-account', 'UserController@my_account');



    /*************** Events Starts ***************/
    Route::resource('/instructor/events', 'EventsController');
    Route::get('/instructor/events', 'EventsController@index');
    Route::post('/instructor/events_add', 'EventsController@EventsAdd');
    Route::get('/instructor/getevents/{events_id}', 'EventsController@GetEvents');
    Route::post('/instructor/update-events', 'EventsController@UpdateEvents');
    /*************** Events Ends ***************/

    Route::get('/instructor/dashboard', function () {
        return redirect('/' . collect(request()->segments())->first() . '/events');
    });
});

Route::middleware(['learner'])->group(function () {

    Route::resource('/learner/users', 'UserController');
    Route::post('/learner/users_add', 'UserController@create_user');
    Route::get('/learner/students/{cid}', 'UserController@User_enrolled_in_course');
    Route::get('/learner/user-create', 'UserController@user_create');
    Route::get('/learner/getusers/{id}', 'UserController@getusers');
    Route::delete('/learner/user/{id}', 'UserController@destroy');
    Route::post('/learner/users_add', 'UserController@create_user');
    Route::post('/learner/update-user', 'UserController@update_user');
    Route::get('/learner/user-delete/{squirrel}', 'UserController@delete_user');
    Route::get('/learner/my-account', 'UserController@my_account');

    Route::get('/learner/home', 'DashboardController@LearnerDashboard');

    Route::get('/learner/dashboard', function () {
        return redirect('/' . collect(request()->segments())->first() . '/home');
    });
});

// Auth::routes();

Route::get('/sendmail', 'TopicsController@sendmail');


Route::get('/get-started', function () {
    return view('demo');
});

Route::get('/404', function () {
    return view('frontend.404');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});

Route::get('/get-started', function () {
    return view('demo');
});

Route::get('/checkout', 'AuthorizeController@index');
Route::post('/checkout', 'AuthorizeController@chargeCreditCard');
