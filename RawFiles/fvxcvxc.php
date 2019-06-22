<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::latest()->paginate(5);
  
        return view('views.registration',compact('registrations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
