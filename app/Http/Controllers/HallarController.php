<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

use App\User;
use App\Hallar;

use Auth;

use Session;

class HallarController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index() {

        $data['sub_heading']  = 'Hallar';
        $data['page_title']   = 'Booking System Hallar';
        $data['Hallar']        =  Hallar::paginate(7);
        return view('hallar/index', $data);
    }

    public function UserHallar($id) {

        $data['sub_heading']  = 'Hallar';
        $data['page_title']   = 'Booking System Hallar';
        $data['User']        =  User::find($id);
        return view('hallar/user', $data);
    }

    public function HallarAdd(Request $request){ //exit($request->axaxa);
        $Hallar         = new Hallar;

        $this->validate($request, [
            'hallar_name'=>'required',
            'hallar_apply_type'=>'required',
            'hallar_price'=>'required',
            'hallar_register_type'=>'required'
        ]);


        $Hallar->name  = $request->hallar_name;
        $Hallar->apply_type  = $request->hallar_apply_type;
        $Hallar->price  = $request->hallar_price;
        $Hallar->register_type  = $request->hallar_register_type;

        /******* Create New User ******/
        $receivedData = array(
            'fname' => (strpos($request->hallar_name, " ") !== false) ? explode(" ", $request->hallar_name)[0] : $request->hallar_name,
            'lname' => (strpos($request->hallar_name, " ") !== false) ? explode(" ", $request->hallar_name)[1] : $request->hallar_name
        );
        $receivedData = (object)$receivedData;
        $Hallar->userID  = Hallar::insertUser($receivedData);
        /******* Create New User ******/

        /********** Upload Image *************/
        if(!empty($request->file('hallar_visafile'))) {
            if( $Hallar->visafile ) {
                unlink('uploads/visafile/' . $Hallar->visafile);
            }
            $hallar_visafile = $request->file('hallar_visafile');
            $filename = time() . '.' . $hallar_visafile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('hallar_visafile')->move('uploads/visafile/', $filename);
            $Hallar->visafile = $filename;
        }
        /********** Upload Image *************/

        $saved          = $Hallar->save();

        if ($saved) {
            $request->session()->flash('message', 'Hallar successfully added!');
            return redirect('/admin/hallar');
        } else {
            return redirect()->back()->with('message', 'Couldn\'t create Hallar!');
        }
    }

    public function GetHallar($id){
        $data         = [];
        $Hallar         = Hallar::find($id);
        $data['hallar'] = $Hallar;
        return Response::json($data);
    }

    public function SwitcherHallar(Request $request) {

        $data               = [];

        $Hallar             = Hallar::find($request->id);

        if($Hallar->status == "yes") {
            $Hallar->status  = "no";
        } else {
            $Hallar->status  = "yes";
        }

        $Hallar->save();

        $data['success']    = "Yes";
        $data['id']         = $Hallar->status;
        return Response::json($data);
    }

    public function UpdateHallar(Request $request){

        $id              =        $request->hallar_id;

        $this->validate($request, [
            'hallar_name'=>'required',
            'hallar_apply_type'=>'required',
            'hallar_price'=>'required',
            'hallar_register_type'=>'required'
        ]);

        $Hallar              = Hallar::find($id);

        $Hallar->name  = $request->hallar_name;
        $Hallar->apply_type  = $request->hallar_apply_type;
        $Hallar->price  = $request->hallar_price;
        $Hallar->register_type  = $request->hallar_register_type;

        /********** Upload Image *************/
        if(!empty($request->file('hallar_visafile'))) {
            if( $Hallar->visafile ) {
                unlink('uploads/visafile/' . $Hallar->visafile);
            }
            $hallar_visafile = $request->file('hallar_visafile');
            $filename = time() . '.' . $hallar_visafile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('hallar_visafile')->move('uploads/visafile/', $filename);
            $Hallar->visafile = $filename;
        }
        /********** Upload Image *************/

        $saved              = $Hallar->save();

        if ($saved) {
            $request->session()->flash('message', 'Hallar was successful edited!');
            return redirect('/admin/hallar');
        } else {
            return redirect()->back()->with('error', 'Couldn\'t create Hallar!');
        }
    }


    public function destroy($id) {
        //Find a user with a given id and delete
        $categories = Hallar::findOrFail($id);
        $categories->delete();
        return redirect('/admin/hallar')->with('message', 'Selected item has been deleted successfully!');
    }

}
