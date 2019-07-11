<?php

namespace App\Http\Controllers\user;
use DB;
//use App\model\EventRegistration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\data;

class EventRegistrationController extends Controller
{
    public function index()
    {
        return view('user.views.EventRegistration');
    }
    
    public function getEventRegistration($EventID){   
        
         $EventRegistration = DB::select("CALL Fetch_Event_Enrollment(1,'$EventID',0)");        
         echo json_encode($EventRegistration);
        
     exit;
   }
    
    public function bindDropDown(){   
        
             $bindDropDown = DB::select("CALL Fetch_Event_Enrollment(3,0,0)");        
             echo json_encode($bindDropDown);

     exit;
   }
      
    
    public function EventFee(Request $Data)
    {   
        $EventFee = DB::select("CALL Fetch_Event_Enrollment(4,'$Data->EventID','$Data->RegistrationType')");        
         echo json_encode($EventFee);
        
        exit;
    }
    
   /* public function EventFee($Data){   
         print_r($Data);
         $bindDropDown = DB::select("CALL Fetch_Event_Enrollment(4,'$Data->EventID','$Data->RegistrationType')");        
         echo json_encode($bindDropDown);
        
     exit;
   }*/
}
