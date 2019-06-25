<?php
  
namespace App\Http\Controllers\Admin;
use DB;
use App\model\Speaker;
use Illuminate\Http\Request;
  
class SpeakersController extends Controller
{
    
 public function index()
    {
        $speakers = Speaker::latest()->paginate(5);
  
        $speakers = DB::select("SELECT * FROM speakers WHERE active = 1 order by created_at DESC");
        
        return view('admin.views.speaker',compact('speakers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    public function create()
    {
        return view('admin.views.create');
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
        return view('admin.views.edit',compact('speaker'));
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