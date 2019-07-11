<?php
namespace App\Http\Controllers\User;
use DB;
use App\Model\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FetchProgramController extends Controller {

   public function getPrograms(){

     $programs = Program::getProgram();

     return view('user.views.program')->with("programs",$programs);
   }

   public function getProgramDetails($programid=0){
       
     $programdetails = Program::getProgramDetails($programid);

     echo json_encode($programdetails);
     exit;
   }
    
    public function getProgramSpeaker($programid=0){   
        
         $programdetails = DB::select("SELECT ps.id, ps.program_details_id, ps.speaker_id,sp.name,sp.designation,sp.avatar FROM evn_program_speaker ps LEFT JOIN cmn_speakers sp ON ps.speaker_id = sp.id WHERE ps.active  = 1 AND ps.program_details_id='$programid'");
        
        echo json_encode($programdetails);
     exit;
   }
    
}
