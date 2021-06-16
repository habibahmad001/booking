<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

use App\User;
use App\Lag;

use Auth;

use Session;

class LagController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index() {

        $data['sub_heading']  = 'Lag';
        $data['page_title']   = 'Booking System Lag';
        $data['lag']        =  Lag::paginate(7);
        return view('lag/index', $data);
    }

    public function LagAdd(Request $request){ //exit($request->axaxa);

        $lag         = new Lag;

        $this->validate($request, [

            'lag_name'=>'required',
            'lag_area'=>'required',
            'lag_legs'=>'required',
            'lag_apply_type'=>'required',
            'lag_register_type'=>'required'
        ]);

        $lag->name  = $request->lag_name;
        $lag->area  = $request->lag_area;
        $lag->legs  = $request->lag_legs;
        $lag->apply_type  = $request->lag_apply_type;
        $lag->register_type  = $request->lag_register_type;

        /********** Upload Image *************/
        if(!empty($request->file('lag_visafile'))) {
            if( $lag->visafile ) {
                unlink('uploads/lagvisafile/' . $lag->visafile);
            }
            $lag_visafile = $request->file('lag_visafile');
            $filename = time() . '.' . $lag_visafile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('lag_visafile')->move('uploads/lagvisafile/', $filename);
            $lag->visafile = $filename;
        }
        /********** Upload Image *************/

        $saved          = $lag->save();
        if ($saved) {
            $request->session()->flash('message', 'Lag successfully added!');
            return redirect('/admin/lag');
        } else {
            return redirect()->back()->with('message', 'Couldn\'t create Lag!');
        }
    }

    public function GetLag($id){
        $data         = [];
        $lag         = Lag::find($id);
        $data['lag'] = $lag;
        return Response::json($data);
    }

    public function Switcherlag(Request $request) {

        $data               = [];

        $Lag             = Lag::find($request->id);

        if($Lag->status == "yes") {
            $Lag->status  = "no";
        } else {
            $Lag->status  = "yes";
        }

        $Lag->save();

        $data['success']    = "Yes";
        $data['id']         = $Lag->status;
        return Response::json($data);
    }

    public function UpdateLag(Request $request){

        $id              =        $request->lag_id;

        $this->validate($request, [

            'lag_name'=>'required',
            'lag_area'=>'required',
            'lag_legs'=>'required',
            'lag_apply_type'=>'required',
            'lag_register_type'=>'required'

        ]);

        $lag              = Lag::find($id);

        $lag->name  = $request->lag_name;
        $lag->area  = $request->lag_area;
        $lag->legs  = $request->lag_legs;
        $lag->apply_type  = $request->lag_apply_type;
        $lag->register_type  = $request->lag_register_type;

        /********** Upload Image *************/
        if(!empty($request->file('lag_visafile'))) {
            if( $lag->visafile ) {
                unlink('uploads/lagvisafile/' . $lag->visafile);
            }
            $lag_visafile = $request->file('lag_visafile');
            $filename = time() . '.' . $lag_visafile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('lag_visafile')->move('uploads/lagvisafile/', $filename);
            $lag->visafile = $filename;
        }
        /********** Upload Image *************/

        $saved              = $lag->save();

        if ($saved) {
            $request->session()->flash('message', 'Lag was successful edited!');
            return redirect('/admin/lag');
        } else {
            return redirect()->back()->with('error', 'Couldn\'t create Lag!');
        }
    }


    public function destroy($id) {
        //Find a user with a given id and delete
        $categories = Lag::findOrFail($id);
        $categories->delete();
        return redirect('/admin/lag')->with('message', 'Selected item has been deleted successfully!');
    }

}
