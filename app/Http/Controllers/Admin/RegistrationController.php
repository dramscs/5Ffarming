<?php

namespace App\Http\Controllers\Admin;
use App\model\Registration;
use DB;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {

        // $registrations = DB::select("SELECT * FROM evn_registration WHERE active = 1 order by created_at DESC");
		
        // return view('views.registration')->with('registrations', $registrations);

        $registrations = Registration::latest()->paginate(5);
  
        $registrations = DB::select("SELECT * FROM evn_registration WHERE active = 1 order by created_at DESC");
            
        return view('admin.views.registration',compact('registrations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
}
