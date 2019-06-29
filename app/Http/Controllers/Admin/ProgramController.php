<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\model\Program;

class ProgramController extends Controller {

   public function index(){

     // Fetch departments
     $departmentData['data'] = Program::getDepartment();

     // Load index view
     return view('admin.views.programdetailCreate')->with("departmentData",$departmentData);
   }

   // Fetch records
   public function getEmployees($departmentid=0){

     // Fetch Employees by Departmentid
     $userData['data'] = Program::getdepartmentEmployee($departmentid);

     echo json_encode($userData);
     exit;
   }
}

