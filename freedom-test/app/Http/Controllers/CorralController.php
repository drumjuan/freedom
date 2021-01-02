<?php

namespace App\Http\Controllers;

use App\Corrals;
use Illuminate\Http\Request;

class CorralController extends Controller
{

    public function index() {
        $corrals = Corrals::all();
        return $corrals;
    }
    public function store(Request $request) {
        $corral = new Corrals();
        $corral->capacidad = $request->get('capacidad');
    	$corral->save();
    }


}
