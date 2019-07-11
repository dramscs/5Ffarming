<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\model\Eventfetch;

class EventFetchSpeakerController extends Controller {

   public function index(){

     $departmentData['data'] = Eventfetch::getDepartment();

     return view('admin.views.programspeakerCreate')->with("departmentData",$departmentData);
   }

   public function getEmployees($eventid=0){

     $userData['data'] = Eventfetch::getdepartmentEmployee($eventid);

     echo json_encode($userData);
     exit;
   }
}
