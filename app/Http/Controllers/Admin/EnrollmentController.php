<?php

namespace App\Http\Controllers\admin;
use DB;
use App\model\Eventenrollment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnrollmentController extends Controller
{  
    public function index()
    {
        $enrollments = Eventenrollment::latest()->paginate(5);
        
        $enrollments = DB::select("SELECT *,(SELECT eventname FROM evn_event_master WHERE id=evn_event_enrolment.event_id AND active = 1) As event_id, (CASE WHEN registration_type = 1 THEN 'Indian' WHEN registration_type = 2 THEN 'Foreign' ELSE 'Students' END) AS registration_type FROM evn_event_enrolment WHERE active = 1 ORDER BY id DESC"); 
        
        return view('admin.views.enrollmentIndex',compact('enrollments'))
        ->with('i', (request()->input('page', 1) - 1) * 5);                   
    }
    
    public function create()
    {
        return view('admin.views.enrollmentCreate');
    }

    
    public function store(Request $data)
    {
            $data->validate([
                'event_id' => 'required',
                'registration_type' => 'required',
                'early' => 'required',
                'early_enddate' => 'required',
                'regular' => 'required',
                'regular_enddate' => 'required',
                'onsite' => 'required',
                'single_day' => 'required',
    
            ]);
        
          $peventid= $data['event_id'];
          $pregistrationtype=$data['registration_type'];
          $pearly=$data['early'];
          $pearlyenddate=$data['early_enddate'];
          $pregular=$data['regular'];
          $pregularenddate=$data['regular_enddate'];
          $ponsite=$data['onsite'];
          $psingleday=$data['single_day'];

            $enrollments = new Eventenrollment($data->input());
            
            $enrollments = DB::select('CALL CheckEvent(?, ?, ?, ?, ?, ?, ?, ?)', [$peventid,$pregistrationtype,$pearly,$pearlyenddate,$pregular,$pregularenddate,$ponsite,$psingleday]);
     
                return redirect()->route('enrollments.index')
                               ->with('success',$enrollments[0]->ResponseMessage);
                               return view('admin.views.enrollmentIndex');
    
    }

    public function edit(Eventenrollment $enrollment)
    {
        return view('admin.views.enrollmentEdit',compact('enrollment'));
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
  
         return redirect()->route('enrollments.index')->with('success','Eventenrollment updated successfully');
    }  
    
    public function destroy($id)
    {
        $eventenrollment = Eventenrollment::find($id);
		$eventenrollment = DB::select("UPDATE evn_event_enrolment SET active = 0 WHERE id = $id");
		return redirect('/enrollments')->with('success','Eventenrollment deleted successfully');
    }
}