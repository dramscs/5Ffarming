<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbstactSubmissionController extends Controller
{
    public function index()
    {
        return view('user.views.abstractsub');
    }
}
