<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Evn_program_detail extends Model
{
    protected $fillable = [
        'program_id', 'title', 'starttime', 'endtime', 'description'
    ];
}