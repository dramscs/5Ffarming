<?php

namespace App\model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Program extends Model {

   // Fetch departments
   public static function getDepartment(){

     $value=DB::table('evn_program_master')->orderBy('id', 'asc')->get(); 

     return $value;
   }

   // Fetch employee by department id
   public static function getdepartmentEmployee($id=0){

     $value=DB::table('evn_program_master')->where('evn_program_master', $id)->get();

     return $value;
   }

}
