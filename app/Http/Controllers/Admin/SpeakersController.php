<?php
  
namespace App\Http\Controllers\Admin;
use DB;
use App\model\Speaker;
use Illuminate\Http\Request;
  
class SpeakersController extends Controller
{
    
    public function index()
    {
        {
          
         
            
            $speakers = DB::select("SELECT * FROM cmn_speakers WHERE active = 1 order by created_at DESC");

            $speakers = Speaker::latest()->paginate(5);
            return view('admin.views.speakerIndex',compact('speakers'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }

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
  
   
    public function update(Request $request, Speaker $speaker)
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
  
        $speaker->update() ;
        return redirect()->route('speakers.index')
                       ->with('success','You have successfully updated your files');
    }
  
    
    public function destroy($id)
    {

        $speaker = Speaker::find($id);
		$speaker = DB::select("UPDATE cmn_speakers SET active = 0 WHERE id = $id");
		return redirect('/speakers')->with('success','Speaker deleted successfully');

      
        // return redirect()->route('speakers.index')->with('success','Speaker deleted successfully');
    }
}