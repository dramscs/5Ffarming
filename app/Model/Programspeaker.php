<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Programspeaker extends Model
{
    protected $table = 'evn_program_speaker'; 

    protected $fillable = [
        
    'program_details_id', 'speaker_id'
];
} 