<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

use App\User;
use App\Events;

use Auth;

use Session;

class EventsController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index() {

        $data['sub_heading']  = 'Events';
        $data['page_title']   = 'Booking System Events';
        if(collect(request()->segments())->first() == "instructor") {
            $data['events']        =  Events::where("UserID", Auth::user()->id)->where("status", "yes")->paginate(7);
        } else {
            $data['events']        =  Events::where("status", "yes")->paginate(7);
        }

        return view('events/index', $data);
    }

    public function EventsAdd(Request $request){ //exit($request->axaxa);

        $events         = new Events;

        $this->validate($request, [

            'events_note'=>'required',
            'events_eventStartdate'=>'required',
            'event_stime'=>'required',
            'event_etime'=>'required',
            'events_eventResource'=>'required',
            'events_lag'=>'required',
            'events_ledare'=>'required',
        ]);

        $events->note  = $request->events_note;
        $events->eventStartdate  = $request->events_eventStartdate;
//        $events->eventEnddate  = $request->events_eventEnddate;
        $events->eventStarttime  = $request->event_stime;
        $events->eventEndtime  = $request->event_etime;
        $events->eventColor  = $request->eventcolour;
        $events->eventResource  = $request->events_eventResource;
        $events->EventId  = rand(0, 10000);
        $events->UserId  = Auth::user()->id;
        $events->lag  = $request->events_lag;
        $events->ledare  = $request->events_ledare;

        $saved          = $events->save();
        if ($saved) {
            $request->session()->flash('message', 'Events successfully added!');
            return redirect('/'.collect(request()->segments())->first().'/events');
        } else {
            return redirect()->back()->with('message', 'Couldn\'t create Events!');
        }
    }

    public function GetEvents($id){
        $data         = [];
        $events         = Events::find($id);
        $data['events'] = $events;
        return Response::json($data);
    }

    public function UpdateEvents(Request $request){

        $id              =        $request->events_id;

        $this->validate($request, [

            'events_note'=>'required',
            'events_eventStartdate'=>'required',
            'event_stime'=>'required',
            'event_etime'=>'required',
            'eventcolour'=>'required',
            'events_eventResource'=>'required',
            'events_lag'=>'required',
            'events_ledare'=>'required',
        ]);

        $events              = Events::find($id);

        $events->note  = $request->events_note;
        $events->eventStartdate  = $request->events_eventStartdate;
//        $events->eventEnddate  = $request->events_eventEnddate;
        $events->eventStarttime  = $request->event_stime;
        $events->eventEndtime  = $request->event_etime;
        $events->eventColor  = $request->eventcolour;
        $events->eventResource  = $request->events_eventResource;
        $events->EventId  = rand(0, 10000);
        $events->UserId  = Auth::user()->id;
        $events->lag  = $request->events_lag;
        $events->ledare  = $request->events_ledare;

        $saved              = $events->save();

        if ($saved) {
            $request->session()->flash('message', 'Events was successful edited!');
            return redirect('/'.collect(request()->segments())->first().'/events');
        } else {
            return redirect()->back()->with('error', 'Couldn\'t create Events!');
        }
    }


    public function destroy($id) {
        //Find a user with a given id and delete
        $categories = Events::findOrFail($id);
        $categories->delete();
        return redirect('/'.collect(request()->segments())->first().'/events')->with('message', 'Selected item has been deleted successfully!');
    }

}
