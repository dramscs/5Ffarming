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

}