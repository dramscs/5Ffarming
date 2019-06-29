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
            $speakers = DB::select("SELECT * FROM cmn_speakers WHERE active = 1 order by created_at DESC");
            return view('admin.views.speakerIndex',compact('speakers'))
                ->with('i');
        

    }
   
    public function create()
    {
        return view('admin.views.speakerCreate');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);
  
        $speaker = new Speaker($request->input());

        if($file = $request->hasFile('avatar')) {
            
            $file = $request->file('avatar') ;
            $destinationPath = public_path().'/images/' ;
            $fileExtention = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999). '.' . $fileExtention;
            $file->move($destinationPath,$fileName);
            $speaker->avatar = $fileName ;
        }
  
        $speaker->save() ;
        return redirect()->route('speakers.index')
                       ->with('success','You have successfully uploaded your files');
    }
   
     
    public function edit(Speaker $speaker)
    {
        return view('admin.views.edit',compact('speaker'));
    }
  
   
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
           

        ]);
      
            $speaker = Speaker::find($id);
        
      
        if($file = $request->hasFile('avatar')) {
            
            $file = $request->file('avatar') ;
            $destinationPath = public_path().'/images/' ;
            $fileExtention = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999). '.' . $fileExtention;
            $file->move($destinationPath,$fileName);
            $speaker->avatar = $fileName ;
        }
  
        $speaker->update($request->all());
        return redirect()->route('speakers.index')
                       ->with('success','You have successfully uploaded/updates your files and data');
    }
  
    
    public function destroy($id)
    {

        $speaker = Speaker::find($id);
		$speaker = DB::select("UPDATE cmn_speakers SET active = 0 WHERE id = $id");
		return redirect('/speakers')->with('success','Speaker deleted successfully');

      
        // return redirect()->route('speakers.index')->with('success','Speaker deleted successfully');
    }
}