<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corrals extends Model
{
    protected $fillable = [
        'capacidad',
    ];

    public function Animals() {
        return $this->hasMany('App\Animals','corral_id');
    }
}
