<?php

namespace App\Http\Controllers\admin;
use DB;
use App\model\Programdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramdetailController extends Controller
{
    
    public function index()
    {
        $programdetails = Programdetail::latest()->paginate(5);

        $programdetails = DB::select("SELECT *, (SELECT program_title FROM evn_program_master WHERE id=evn_program_details.program_id AND active = 1) As program_id FROM evn_program_details WHERE active = 1 ORDER BY id DESC");
        
                return view('admin.views.programdetailIndex',compact('programdetails'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                   
    }
    
    public function create()
    {
        return view('admin.views.programdetailCreate');
    }

    
    public function store(Request $request)
    {
        {
            $request->validate([
                'program_id' => 'required',
                'title' => 'required',
                'starttime' => 'required',
                'endtime' => 'required',
                'description' => 'required',
                
                ]);

            $programmasters = new Programdetail($request->input());
            }
            $programmasters->save() ;
            return redirect()->route('programdetails.index')
                           ->with('success','Program detail Added successfully');
                           return view('admin.views.programdetailIndex');
    }
    
    public function edit(Programdetail $programdetail)
    {
        return view('admin.views.programdetailEdit',compact('programdetail'));
    }
  
    public function update(Request $request, Programdetail $programdetail)
    {
        $request->validate([
            'program_id' => 'required',
            'title' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'description' => 'required',

        ]);

        $programdetail->update($request->all());
  
         return redirect()->route('programdetails.index')->with('success','Program detail updated successfully');
    }  

    
    public function destroy($id)
    {
       
        $programdetail = Programdetail::find($id);
		$programdetail = DB::select("UPDATE evn_program_details SET active = 0 WHERE id = $id");
		return redirect('/programdetails')->with('success','Program detail deleted successfully');
    }
}
