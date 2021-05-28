<?php

namespace App\Http\Controllers\Front;

use App\Events;
use App\Lag;
use App\Ledare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

use App\User;

use Illuminate\Support\Facades\Mail;

use Auth;

use Session;

class HomeController extends Controller
{
    public function __construct() {
        $this->header_title = "Booking System";
    }

    public function index() {

        $data['sub_heading']  = 'Home page';
        $data['page_title']   = 'Home';

        return view('frontend.home', $data);
    }

    public function booking() {

        $data['sub_heading']  = 'Home page';
        $data['page_title']   = 'Home';

        return view('frontend.booking', $data);
    }

    public function GetEventsList(){
        $data           = [];
        $lagsarr        = [];
        $ledaresarr     = [];
        $userarr        = [];

        $events         = Events::where('status', "no")->orderBy("eventStartdate", "asc")->get();
        $data['events'] = $events;

        /********** Set lags Arr ********/
        $lags         = Lag::all();
        if(count($lags) > 0) {
            foreach($lags as $v) {
                $lagsarr[$v->id]      = $v->name;
            }
        }

        $data['eventslag']         = $lagsarr;
        /********** Set lags Arr ********/

        /********** Set ledare Arr ********/
        $ledare         = Ledare::all();
        if(count($ledare) > 0) {
            foreach($ledare as $v) {
                $ledaresarr[$v->id]      = $v->name;
            }
        }

        $data['eventsledare']         = $ledaresarr;
        /********** Set ledare Arr ********/

        /********** Set User Arr ********/
        $user         = User::all();
        if(count($user) > 0) {
            foreach($user as $v) {
                $userarr[$v->id]      = $v->first_name . " " . $v->last_name;
            }
        }

        $data['eventsuser']         = $userarr;
        /********** Set User Arr ********/

        return Response::json($data);
    }

    public function GetEventOnIds($ids){
        $data           = [];
        $lagsarr        = [];
        $ledaresarr     = [];
        $userarr        = [];

        if(count(explode(",", $ids)) > 0) {
            $events         = Events::whereIn('UserId', explode(",", $ids))->orderBy("eventStartdate", "asc")->get();
        } else {
            $events         = Events::where('status', "no")->orderBy("eventStartdate", "asc")->get();
        }

        $data['events'] = $events;

        /********** Set lags Arr ********/
        $lags         = Lag::all();
        if(count($lags) > 0) {
            foreach($lags as $v) {
                $lagsarr[$v->id]      = $v->name;
            }
        }

        $data['eventslag']         = $lagsarr;
        /********** Set lags Arr ********/

        /********** Set ledare Arr ********/
        $ledare         = Ledare::all();
        if(count($ledare) > 0) {
            foreach($ledare as $v) {
                $ledaresarr[$v->id]      = $v->name;
            }
        }

        $data['eventsledare']         = $ledaresarr;
        /********** Set ledare Arr ********/

        /********** Set User Arr ********/
        $user         = User::all();
        if(count($user) > 0) {
            foreach($user as $v) {
                $userarr[$v->id]      = $v->first_name . " " . $v->last_name;
            }
        }

        $data['eventsuser']         = $userarr;
        /********** Set User Arr ********/

        return Response::json($data);
    }

    public function events() {

        $data['sub_heading']  = 'Home page';
        $data['page_title']   = 'Home';

        return view('frontend.events', $data);
    }

    public function ForgotPassword() {

        $data['sub_heading']  = 'Forgot Password Page';
        $data['page_title']   = 'Forgot Password';

        return view('frontend.forgotpass', $data);
    }

    public function ContactUS() {

        $data['sub_heading']  = 'Contact US Page';
        $data['page_title']   = 'Contact US';

        return view('frontend.contactus', $data);
    }

    public function PostForm(Request $request) {

        $this->validate($request, [
            'first_name'=>'required|max:120',
            'last_name'=>'required|max:120',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required'
        ]);

        $first_name         = $request->first_name;
        $last_name          = $request->last_name;
        $client_email       = $request->email;
        $phone_number       = $request->phone;
        $cmessage           = $request->message;

        Mail::send('emails.AskQuestion', ['first_name' => $first_name, 'last_name' => $last_name, "client_email" => $client_email, "phone" => $phone_number, "cmessage" => $cmessage], function($message)  use ($first_name, $last_name){
            $message->to("euniversitylondon@gmail.com");
            $message->subject($first_name . " " . $last_name . " send's new request from contact us page !!!");
        });

        return redirect()->back()->withErrors(['email' => 'Your request has been submitted, Admin will contact you soon !!!']);
    }

    public function AboutUS() {

        $data['sub_heading']  = 'About US Page';
        $data['page_title']   = 'About US';

        $data['AllClients']         = Clients::where("client_status","yes")->orderBy('id', 'desc')->get();
        $data['Topics']             = Topics::where("topics_status","yes")->orderBy('id', 'asc')->get();
        $data['Teams']              = Teams::where("teams_status","yes")->orderBy('id', 'asc')->get();

        return view('frontend.aboutus', $data);
    }

    public function UpdatePassword($id) {

        $data['sub_heading']  = 'Forgot Password Page';
        $data['page_title']   = 'Forgot Password';

        $data['id']   = $id;

        return view('frontend.updatepass', $data);
    }

    public function ResetEmail(Request $request) {

        $email = $request->account_email;

        $User_Data         = User::where("email", $email)->get();

        if(count($User_Data) > 0) {
            $usertype   = $User_Data[0]->user_type;
            $first_name = $User_Data[0]->first_name;
            $userID     = $User_Data[0]->id;

            Mail::send('emails.ResetPassword', ['first_name' => $first_name, 'usertype' => $usertype, "userID" => $userID], function($message)  use ($email){
                $message->to($email);
                $message->subject("eUniversityLondon Account password reset email !!!");
            });

            return redirect()->intended('/')->withErrors(['email' => 'Please check your email !!!']);
        }

        return redirect()->intended('/')->withErrors(['email' => 'Email does not exist !!!']);
    }

    public function Search(Request $request){
        $data         = [];

        $term = $request->search;

        $data['sub_heading']  = 'Search Page';
        $data['page_title']   = $this->header_title;


        $data['Courses']    = Courses::where("course_status", "yes")->get();
        $AllCategories      = Categories::where("category_status", "yes")->get();
        $data['Search']     = Courses::where("course_status", "yes")->where('course_title', 'LIKE', '%' . $term . '%')->orWhere('course_desc', 'LIKE', '%' . $term . '%')->get();

        /********** Course in categories starts ************/
        $course_cat_arr = [];
        foreach($AllCategories as $CatID) {
            $course_count = 0;
            foreach($data['Courses'] as $v) {
                if(in_array($CatID->id, (array) json_decode($v->category_id))) {
                    $course_count++;
                }
            }
            $course_cat_arr[$CatID->id] = $course_count;
        }
        $data['course_cat'] = $course_cat_arr;
        /********** Course in categories Ends ************/

        return view('frontend.search', $data);
    }

    public function SearchType($term){
        $data         = [];

        $data['sub_heading']  = 'Search Page';
        $data['page_title']   = $this->header_title;


        $data['Courses']    = Courses::where("course_status", "yes")->get();
        $AllCategories      = Categories::where("category_status", "yes")->get();
        $data['Search']     = Courses::where("course_status", "yes")->where('course_title', 'LIKE', '%' . $term . '%')->orWhere('course_desc', 'LIKE', '%' . $term . '%')->get();

        /********** Course in categories starts ************/
        $course_cat_arr = [];
        foreach($AllCategories as $CatID) {
            $course_count = 0;
            foreach($data['Courses'] as $v) {
                if(in_array($CatID->id, (array) json_decode($v->category_id))) {
                    $course_count++;
                }
            }
            $course_cat_arr[$CatID->id] = $course_count;
        }
        $data['course_cat'] = $course_cat_arr;
        /********** Course in categories Ends ************/

        return view('frontend.search', $data);
    }

    public function ResetPassword(Request $request) {

        $id              =        $request->user_id;
        $this->validate($request, [
            'new_password'     => 'required',
            'confirm_password'     => 'required|same:new_password'
        ]);
        $users              = User::find($id);
        $users->password    = bcrypt($request->new_password);
        $users->passupdated = "yes";

        $saved              = $users->save();
        if ($saved) {
            $request->session()->flash('message', 'Password has been updated Successfully !!!');
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Couldn\'t update Password !!!');
        }
    }

}
