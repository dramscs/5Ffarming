<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller {

   public function index(){

     // Fetch departments
     $departmentData['data'] = Page::getDepartment();

     // Load index view
     return view('index')->with("departmentData",$departmentData);
   }

  
}