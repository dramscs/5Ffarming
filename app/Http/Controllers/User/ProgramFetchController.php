<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use DB;
class ProgramFetchController extends Controller
{
    
    function index()
    {
     $programlist = DB::table('evn_program_master')
         ->groupBy('evn_program_master')
         ->get();
     return view('user.views.program')->with('programlist', $programlist);
    }

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
        
     $data = DB::table('evn_program_details')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}

?>