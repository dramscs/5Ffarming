<?php

namespace App\model;
use DB;
use Illuminate\Database\Eloquent\Model;

class Eventenrollment extends Model
{
    
    protected $table = 'evn_event_enrolment';

    protected $fillable = [
      'event_id', 'registration_type', 'early', 'early_enddate', 'regular', 'regular_enddate', 'onsite', 'single_day',
  ];
    
   public static function getDepartment(){

        $value=DB::table('evn_event_master')->orderBy('id', 'asc')->get(); 
   
        return $value;
      }
   
      // Fetch employee by department id
      public static function getdepartmentEmployee($id=0){
   
        $value=DB::table('evn_event_master')->where('evn_event_master', $id)->get();
   
        return $value;
      }

}