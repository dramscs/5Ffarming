<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table = 'cmn_speakers';
    
    protected $fillable = [
        'name', 'designation'
    ];

	
// primary key

public $primarykey = 'id';

// Timestamps

public $timestamps = true;
}