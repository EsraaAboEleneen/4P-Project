<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Benefit extends Model
{
    public $table = 'benefits';

    protected $fillable = [
      'title','attachment'
    ];

    public $timestamps = true;

}
