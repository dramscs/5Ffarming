<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Programdetail extends Model
{
    protected $table = 'evn_program_details'; 

    protected $fillable = [
        
    'program_id', 'title', 'starttime', 'endtime', 'description'
];
}   