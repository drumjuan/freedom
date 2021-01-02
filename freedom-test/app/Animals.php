<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $fillable = [
        'nombre', 'edad', 'peligrosidad','corral_id',
    ];

    public function corrals() {
        return $this->belongsTo('App\Corrals');
    }

}
