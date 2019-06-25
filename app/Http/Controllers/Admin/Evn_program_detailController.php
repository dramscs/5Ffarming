<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\model\Evn_program_detail;
class Evn_program_detailController extends Controller
{
    
    public function index()
    {
        $speakers = Evn_program_detail::latest()->paginate(5);
  
        $speakers = DB::select("SELECT * FROM evn_program_details WHERE active = 1 order by created_at DESC");
        
        return view('admin.views.programIndex',compact('programs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    public function create()
    {
        return view('admin.views.programCreate');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'avatar' => '',

        ]);
  
        Evn_program_detail::create($request->all());
        
         return redirect()->route('speakers.programIndex');
                    //    ->with('success','speaker created successfully.');
    }
   
     
    public function edit(Speaker $speaker)
    {
        return view('admin.views.edit',compact('program'));
    }
  
   
    public function update(Request $request, Program $speaker)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'designation' => '',

        ]);
  
        $speaker->update($request->all());
  
        return redirect()->route('programs.index')->with('success','programs updated successfully');
    }
  
    
    public function destroy($id)
    {

        $speaker = Evn_program_detail::find($id);
		$speaker = DB::select("UPDATE evn_program_details SET active = 0 WHERE id = $id");
		return redirect('/speakers')->with('success','Speaker deleted successfully');

      
        // return redirect()->route('speakers.index')->with('success','Speaker deleted successfully');
    }
}