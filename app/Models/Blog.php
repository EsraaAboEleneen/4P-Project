<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = 'blogs';

    protected $fillable = [
        'name',
        'content',
        'image',
    ];

    public $timestamp = true;

}
