<?php

namespace App\Http\Controllers\admin;
use DB;
use App\model\Eventenrollment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventenrollmentController extends Controller
{
   
    public function index()
    {

        $eventenrollments = Eventenrollment::latest()->paginate(5);
        $eventenrollments = DB::select("SELECT * FROM evn_event_enrolment WHERE active = 1 ORDER BY id DESC");


        return view('admin.views.eventenrollmentIndex',compact('eventenrollments'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

                   
    }

    
    public function create()
    {
        return view('admin.views.eventenrollmentsCreate.');
    }

    
    public function store(Request $request)
    {
        {

            $request->validate([
                'event_id' => 'required',
                'registration_type' => 'required',
                'early' => 'required',
                'early_enddate' => 'required',
                'regular' => 'required',
                'regular_enddate' => 'required',
                'onsite' => 'required',
                'single_day' => 'required',
    
            ]);

            $eventenrollments = new Eventenrollment($request->input());
            }
            $eventenrollments->save() ;
            return redirect()->route('eventenrollments.index')
                           ->with('success','Eventenrollment Added successfully');
                           return view('admin.views.eventenrollmentIndex');
    }
    
    public function edit(Eventenrollment $eventenrollment)
    {
        return view('admin.views.eventenrollmentEdit',compact('eventenrollment'));
    }
  
   
    public function update(Request $request, Eventenrollment $eventenrollment)
    {
        $request->validate([
            'event_id' => 'required',
            'registration_type' => 'required',
            'early' => 'required',
            'early_enddate' => 'required',
            'regular' => 'required',
            'regular_enddate' => 'required',
            'onsite' => 'required',
            'single_day' => 'required',
        ]);
  
        $eventenrollment->update($request->all());
  
         return redirect()->route('eventenrollments.index')->with('success','Eventenrollment updated successfully');
    }  

    
    public function destroy($id)
    {
        $eventenrollment = Eventenrollment::find($id);
		$eventenrollment = DB::select("UPDATE evn_event_enrolment SET active = 0 WHERE id = $id");
		return redirect('/eventenrollments')->with('success','Eventenrollment deleted successfully');
    }
  

}
