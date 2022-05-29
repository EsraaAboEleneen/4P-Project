<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contacts';

    protected $fillable= [
        'username','email','phone','address','body'
    ];

    public $timestamps = true;
}
