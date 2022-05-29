<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $table = 'feedbacks';

    protected $fillable = [
        'title','content','attachment'
    ];

    public $timestamps = true;
}
