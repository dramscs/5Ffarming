<?php

namespace App\Http\Controllers\admin;
use DB;
use App\model\Programmaster;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgrammasterController extends Controller
{
   
    public function index()
    {

        $programmasters = Programmaster::latest()->paginate(5);
        $programmasters = DB::select("SELECT * FROM evn_program_master WHERE active = 1");


        return view('admin.views.programmasterIndex',compact('programmasters'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

                   
    }

    
    public function create()
    {
        return view('admin.views.programmasterCreate');
    }

    
    public function store(Request $request)
    {
        {
            $request->validate([
                'event_id' => 'required',
                'program_title' => 'required',
                'day' => 'required',
                'program_date' => 'required',
    
            ]);

            $programmasters = new Programmaster($request->input());
            }
            $programmasters->save() ;
            return redirect()->route('programmasters.index')
                           ->with('success','Program Added successfully');
                           return view('admin.views.programmasterIndex');
    }
    
    public function edit(Programmaster $programmaster)
    {
        return view('admin.views.programmasterEdit',compact('programmaster'));
    }
  
   
    public function update(Request $request, Programmaster $programmaster)
    {
        $request->validate([
            'event_id' => 'required',
            'program_title' => 'required',
            'day' => 'required',
            'program_date' => 'required',
        ]);
  
        $programmaster->update($request->all());
  
         return redirect()->route('programmasters.index')->with('success','Program updated successfully');
    }  

    
    public function destroy($id)
    {
        $programmaster = Programmaster::find($id);
		$programmaster = DB::select("UPDATE evn_program_master SET active = 0 WHERE id = $id");
		return redirect('/programmasters')->with('success','Speaker deleted successfully');
    }
  

}
