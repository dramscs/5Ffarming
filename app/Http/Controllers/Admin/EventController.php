<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\model\Evn_event_master;

class EventController extends Controller
{
    public function index()
    {
        $events = Evn_event_master::latest()->paginate(5);
        $events = DB::select("SELECT * FROM evn_event_master WHERE active = 1 ORDER BY id DESC");


        return view('admin.views.eventIndex',compact('events'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {

        return view('admin.views.eventCreate');
    }

    public function store(Request $request)
    {
        $request->validate([

            'eventname' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'venue' => 'required',
            'imagename' => ''
        ]);

          $events = new Evn_event_master ($request->input());

            if($file = $request->hasFile('imagename')) {
            
            $file = $request->file('imagename') ;
            $destinationPath = public_path().'/images/' ;
            $fileExtention = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999). '.' . $fileExtention;
            $file->move($destinationPath,$fileName);
            $events->imagename = $fileName ;
        }
  
        $events->save() ;
        return redirect()->route('events.index')
                        ->with('success','Event created successfully.');
    }

    public function edit(Evn_event_master $event)
    {
        return view('admin.views.eventEdit',compact('event'));
    }

    public function update(Request $request, Evn_event_master $event)
    {
        $request->validate([

            'eventname' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'venue' => 'required',
        ]);

        $event-> update($request->all());

            if($file = $request->hasFile('imagename')) {
            
            $file = $request->file('imagename') ;
            $destinationPath = public_path().'/images/' ;
            $fileExtention = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999). '.' . $fileExtention;
            $file->move($destinationPath,$fileName);
            $event->imagename = $fileName ;
        }
  
        $event->update() ;
        return redirect()->route('events.index')
                        ->with('success','Event update successfully.');
    }
    public function destroy($id)
    {
        $event = Evn_event_master::find($id);
        $event = DB::select("UPDATE evn_event_master SET active = 0 WHERE id = $id");
        return redirect()->route('events.index')
        ->with('success','Event deleted successfully.');
        
    }
}
