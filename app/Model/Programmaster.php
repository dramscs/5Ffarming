<?php

namespace App\model;
use DB;
use Illuminate\Database\Eloquent\Model;

class Programmaster extends Model
{
    
    protected $table = 'evn_program_master';
    
    protected $fillable = [
        'event_id', 'program_title', 'day', 'program_date'
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