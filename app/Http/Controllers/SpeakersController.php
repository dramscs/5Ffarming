<?php
  
namespace App\Http\Controllers;
  
use App\Speaker;
use Illuminate\Http\Request;
  
class SpeakersController extends Controller
{
    
 public function index()
    {
        // return view('views.speakers')
        // ->withSpeaker(Speaker::all());


        $speakers = Speaker::latest()->paginate(5);
  
        return view('views.speakers',compact('speakers'))
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
        ]);
  
        Product::create($request->all());
   
        return redirect()->route('views.index');
//                        ->with('success','Speaker Added successfully.');
    }
   
     
    public function edit(Speaker $speaker)
    {
        return view('edit',compact('speaker'));
    }
  
   
    public function update(Request $request, Speaker $speaker)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('views.index')->with('success','Speaker updated successfully');
    }
  
    
    public function destroy(Speaker $speaker)
    {
        $product->delete();
  
        return redirect()->route('views.index')->with('success','Product deleted successfully');
    }
}