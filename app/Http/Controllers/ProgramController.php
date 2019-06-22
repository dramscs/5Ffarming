<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    
    public function index()
       {
           $programs = Program::latest()->paginate(5);
     
           $programs = DB::select("SELECT * FROM speakers WHERE active = 1 order by created_at DESC");
           
           return view('views.index',compact('speakers'))
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
