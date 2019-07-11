<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\model\Page;

class PagesController extends Controller {

   public function index(){
    
     $departmentData['data'] = Page::getDepartment();

     return view('admin.views.programmasterCreate')->with("departmentData",$departmentData);
   }

   // Fetch records
   public function getEmployees($departmentid=0){

     // Fetch Employees by Departmentid
     $userData['data'] = Page::getdepartmentEmployee($departmentid);

     echo json_encode($userData);
     exit;
   }
}

