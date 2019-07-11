<?php

namespace App\model;
use DB;
use Illuminate\Database\Eloquent\Model;

class Eventenrollment extends Model
{
    protected $table = 'evn_event_enrolment';
    
    protected $fillable = [
        'event_id', 'registration_type', 'early', 'early_enddate', 'regular', 'regular_enddate', 'onsite', 'single_day'
    ];

}