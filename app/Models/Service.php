<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table = 'services';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title','content','attach'
    ];

    public $timestamps = true;

    public function packages(){
        return $this->hasMany(Package::class,'id');
    }
}
