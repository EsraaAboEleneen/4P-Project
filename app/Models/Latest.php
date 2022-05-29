<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
    public $table = 'latest';

    protected $fillable = [
        'title','attach'
    ];

    public $timestamps = true;
}
