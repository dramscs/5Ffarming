<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Program extends Model {

   public static function getProgram(){

     $value=DB::table('evn_program_master')->orderBy('id', 'asc')->get(); 

     return $value;
   }

   public static function getProgramDetails($id=0){

     $value=DB::table('evn_program_details')->where('program_id', $id)->get();

     return $value;
   }
    
    public static function getProgramSpeaker($id=0){

     $value=DB::table('evn_program_speaker');

     return $value;
   }
    

}
