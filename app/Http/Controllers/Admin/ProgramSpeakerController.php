<?php

namespace App\Http\Controllers\admin;
use DB;
use App\model\Programspeaker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramSpeakerController extends Controller
{
    

    public function index()
    {
        $programspeakers = Programspeaker::latest()->paginate(5);

        $programspeakers = DB::select("SELECT *, 
        (SELECT title FROM evn_program_details WHERE id=evn_program_speaker.program_details_id AND active = 1) As program_details_id, 
        (SELECT name FROM cmn_speakers WHERE id=evn_program_speaker.speaker_id AND active = 1) As speaker_id 
        FROM evn_program_speaker WHERE active = 1 ORDER BY id DESC");
        
                return view('admin.views.programspeakerIndex',compact('programspeakers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                   
    }

    public function create()
    {
        return view('admin.views.programspeakerCreate');
    }

    
    public function store(Request $request)
    {
        {
            $request->validate([
                'program_details_id' => 'required',
                'speaker_id' => 'required',
                ]);

            $programspeakers = new Programspeaker($request->input());
            }
            $programspeakers->save() ;
            return redirect()->route('programspeakers.index')
                           ->with('success','Program Speaker detail Added successfully');
                           return view('admin.views.programspeakerIndex');
    }
    
    public function edit(Programspeaker $programspeaker)
    {
        return view('admin.views.programspeakerEdit ',compact('programspeaker'));
    }
    

    public function update(Request $request, Programspeaker $programspeaker)
    {
        $request->validate([
            'program_details_id' => 'required',
            'speaker_id' => 'required',
        ]);

        $programspeaker->update($request->all());
  
         return redirect()->route('programspeakers.index')->with('success','Program Speaker detail updated successfully');
    }  

    
    public function destroy($id)
    {
       
        $programspeaker = Programspeaker::find($id);
		$programspeaker = DB::select("UPDATE evn_program_speaker SET active = 0 WHERE id = $id");
		return redirect('/programspeakers')->with('success','Program Speaker detail deleted successfully');
    }
}
