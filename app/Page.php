<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

   public static function getDepartment(){

     $value=DB::table('evn_event_master')->orderBy('id', 'asc')->get(); 

     return $value;
   }

   public static function getdepartmentEmployee($event_id=0){

     $value=DB::table('evn_program_master')->where('event_id', $event_id)->get();

     return $value;
   }

}