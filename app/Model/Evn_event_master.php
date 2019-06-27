<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Evn_event_master extends Model
{
    //
    protected $table = 'evn_event_master';
    protected $fillable = [

        'eventname','description','startdate','enddate','venue'
    
    ];
}
