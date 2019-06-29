<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\model\Evn_event_master;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $events = Evn_event_master::latest()->paginate(5);
        $events = DB::select("SELECT * FROM evn_event_master WHERE active = 1");


        return view('admin.views.eventIndex',compact('events'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.views.eventCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation 

        $request->validate([

            'eventname' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'venue' => 'required',
        ]);

        $events = new Evn_event_master;

        Evn_event_master::create($request->all());
        return redirect()->route('events.index')
                        ->with('success','speaker created successfully.');






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evn_event_master $event)
    {
        //
        return view('admin.views.eventEdit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evn_event_master $event)
    {
        //


        $request->validate([

            'eventname' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'venue' => 'required',
        ]);

        $event-> update($request->all());
        return redirect()->route('events.index')
                        ->with('success','event update successfully.');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $event = Evn_event_master::find($id);
        $event = DB::select("UPDATE evn_event_master SET active = 0 WHERE id = $id");
        return redirect()->route('events.index')
        ->with('success','event deleted successfully.');
        
    }
}
