<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Conference2019Controller extends Controller
{
    public function index()
    {
        return view('user.views.conference2019');
    }
}
