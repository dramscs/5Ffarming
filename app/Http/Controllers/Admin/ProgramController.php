<?php

namespace App\Http\Controllers\Admin;

use App\model\Evn_program_detail;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ProgramController extends Controller
{
    
    public function index()
       {
           $programs = Evn_program_detail::latest()->paginate(5);
     
           $programs = DB::select("SELECT * FROM evn_program_details WHERE active = 1 order by created_at DESC");
           
           return view('views.program',compact('programs'))
               ->with('i', (request()->input('page', 1) - 1) * 5);
       }
      
       public function create()
       {
           return view('views.create');
       }
     
       public function store(Request $request)
       {
           $request->validate([
               'name' => 'required',
               'designation' => 'required',
               'avatar' => '',
   
           ]);
     
           Speaker::create($request->all());
           
            return redirect()->route('speakers.index');
                       //    ->with('success','speaker created successfully.');
       }
      
        
       public function edit(Speaker $speaker)
       {
           return view('views.edit',compact('speaker'));
       }
     
      
       public function update(Request $request, Speaker $speaker)
       {
           $request->validate([
               'name' => 'required',
               'designation' => 'required',
               'designation' => '',
   
           ]);
     
           $speaker->update($request->all());
     
           return redirect()->route('speakers.index')->with('success','Speaker updated successfully');
       }
     
       
       public function destroy($id)
       {
   
           $speaker = Speaker::find($id);
           $speaker = DB::select("UPDATE speakers SET active = 0 WHERE id = $id");
           return redirect('/speakers')->with('success','Speaker deleted successfully');
   
         
           // return redirect()->route('speakers.index')->with('success','Speaker deleted successfully');
       }
   }
