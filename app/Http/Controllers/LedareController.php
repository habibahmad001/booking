<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

use App\User;
use App\Ledare;

use Auth;

use Session;

class LedareController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index() {

        $data['sub_heading']  = 'Ledare';
        $data['page_title']   = 'Booking System Ledare';
        $data['ledare']        =  Ledare::where("status", "no")->paginate(7);
        return view('ledare/index', $data);
    }

    public function LedareAdd(Request $request){ //exit($request->axaxa);

        $ledare         = new Ledare;

        $this->validate($request, [

            'ledare_name'=>'required',
            'ledare_Kont_type'=>'required',
            'ledare_lagb_type'=>'required',
            'ledare_tillg_type'=>'required',
            'ledare_register_type'=>'required'

        ]);

        $ledare->name  = $request->ledare_name;
        $ledare->Kont_type  = $request->ledare_Kont_type;
        $ledare->lagb_type  = $request->ledare_lagb_type;
        $ledare->tillg_type  = $request->ledare_tillg_type;
        $ledare->register_type  = $request->ledare_register_type;

        /********** Upload Image *************/
        if(!empty($request->file('ledare_kontfile'))) {
            if( $ledare->kontfile ) {
                unlink('uploads/ledare/' . $ledare->kontfile);
            }
            $ledare_kontfile = $request->file('ledare_kontfile');
            $filename = time() . '.' . $ledare_kontfile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('ledare_kontfile')->move('uploads/ledare/', $filename);
            $ledare->kontfile = $filename;
        }
        /********** Upload Image *************/

        /********** Upload Image *************/
        if(!empty($request->file('ledare_lagbdfile'))) {
            if( $ledare->lagbdfile ) {
                unlink('uploads/lagbd/' . $ledare->lagbdfile);
            }
            $ledare_lagbdfile = $request->file('ledare_lagbdfile');
            $filename = time() . '.' . $ledare_lagbdfile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('ledare_lagbdfile')->move('uploads/lagbd/', $filename);
            $ledare->lagbdfile = $filename;
        }
        /********** Upload Image *************/

        /********** Upload Image *************/
        if(!empty($request->file('ledare_tillgfile'))) {
            if( $ledare->tillgfile ) {
                unlink('uploads/tillg/' . $ledare->tillgfile);
            }
            $ledare_tillgfile = $request->file('ledare_tillgfile');
            $filename = time() . '.' . $ledare_tillgfile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('ledare_tillgfile')->move('uploads/tillg/', $filename);
            $ledare->tillgfile = $filename;
        }
        /********** Upload Image *************/

        $saved          = $ledare->save();
        if ($saved) {
            $request->session()->flash('message', 'Ledare successfully added!');
            return redirect('/admin/ledare');
        } else {
            return redirect()->back()->with('message', 'Couldn\'t create Ledare!');
        }
    }

    public function GetLedare($id){
        $data         = [];
        $ledare         = Ledare::find($id);
        $data['ledare'] = $ledare;
        return Response::json($data);
    }

    public function UpdateLedare(Request $request){

        $id              =        $request->ledare_id;

        $this->validate($request, [

            'ledare_name'=>'required',
            'ledare_Kont_type'=>'required',
            'ledare_lagb_type'=>'required',
            'ledare_tillg_type'=>'required',
            'ledare_register_type'=>'required'

        ]);

        $ledare              = Ledare::find($id);

        $ledare->name  = $request->ledare_name;
        $ledare->Kont_type  = $request->ledare_Kont_type;
        $ledare->lagb_type  = $request->ledare_lagb_type;
        $ledare->tillg_type  = $request->ledare_tillg_type;
        $ledare->register_type  = $request->ledare_register_type;

        /********** Upload Image *************/
        if(!empty($request->file('ledare_kontfile'))) {
            if( $ledare->kontfile ) {
                unlink('uploads/ledare/' . $ledare->kontfile);
            }
            $ledare_kontfile = $request->file('ledare_kontfile');
            $filename = time() . '.' . $ledare_kontfile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('ledare_kontfile')->move('uploads/ledare/', $filename);
            $ledare->kontfile = $filename;
        }
        /********** Upload Image *************/

        /********** Upload Image *************/
        if(!empty($request->file('ledare_lagbdfile'))) {
            if( $ledare->lagbdfile ) {
                unlink('uploads/lagbd/' . $ledare->lagbdfile);
            }
            $ledare_lagbdfile = $request->file('ledare_lagbdfile');
            $filename = time() . '.' . $ledare_lagbdfile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('ledare_lagbdfile')->move('uploads/lagbd/', $filename);
            $ledare->lagbdfile = $filename;
        }
        /********** Upload Image *************/

        /********** Upload Image *************/
        if(!empty($request->file('ledare_tillgfile'))) {
            if( $ledare->tillgfile ) {
                unlink('uploads/tillg/' . $ledare->tillgfile);
            }
            $ledare_tillgfile = $request->file('ledare_tillgfile');
            $filename = time() . '.' . $ledare_tillgfile->getClientOriginalExtension();
            //Image::make($avatar)->resize(90, 90)->save( public_path('/uploads/avatars/' . $filename ) );
            $request->file('ledare_tillgfile')->move('uploads/tillg/', $filename);
            $ledare->tillgfile = $filename;
        }
        /********** Upload Image *************/

        $saved              = $ledare->save();

        if ($saved) {
            $request->session()->flash('message', 'Ledare was successful edited!');
            return redirect('/admin/ledare');
        } else {
            return redirect()->back()->with('error', 'Couldn\'t create Ledare!');
        }
    }


    public function destroy($id) {
        //Find a user with a given id and delete
        $categories = Ledare::findOrFail($id);
        $categories->delete();
        return redirect('/admin/ledare')->with('message', 'Selected item has been deleted successfully!');
    }

}
