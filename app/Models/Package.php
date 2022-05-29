<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public $table = 'packages';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name','details','price','service_id'
    ];

    public $timestamps = true;

    public function services(){
        return $this->belongsTo(Service::class);
    }
}

