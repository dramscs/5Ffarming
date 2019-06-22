<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = [
        'name', 'designation'
    ];

protected $table = 'speakers';
	
// primary key

public $primarykey = 'id';

// Timestamps

public $timestamps = true;
}