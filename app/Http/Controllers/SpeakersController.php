<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpeakersController extends Controller
{
    public function index()
    {
        return view('user.views.speakers');
    }
}
