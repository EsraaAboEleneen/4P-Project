<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $table = 'about-us';

    protected $fillable = [
        'title','content','image'
    ];

    public $timestamps = true;
}
