<?php
  
namespace App\Http\Controllers;
  
use App\Speaker;
use Illuminate\Http\Request;
  
class SpeakersController extends Controller
{
    
 public function index()
    {
        $speakers = Speaker::latest()->paginate(5);
  
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
  
    
    public function destroy(Speaker $speaker)
    {
        $speaker->delete();
  
        return redirect()->route('speakers.index')->with('success','Speaker deleted successfully');
    }
}