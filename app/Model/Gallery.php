<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //table name i.e cmn_gallery

    protected $table = 'cmn_gallery';

    // fileds name

    protected $fillable = [

        'associatetypeid','associateid','name','imagename'

    ];
}
