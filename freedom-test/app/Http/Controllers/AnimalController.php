<?php

namespace App\Http\Controllers;

use App\Animals;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    public function index() {
        $animals = Animals::all();
        return $animals;
    }
    public function store(Request $request) {
        $animal = new Animals();
        $animal->nombre = $request->get('nombre');
    	$animal->edad = $request->get('edad');
    	$animal->peligrosidad = $request->get('peligrosidad');
    	$animal->corral_id = $request->get('corral_id');
        $animal->save();
        
        return ['created' => true];
    }

    public function show(Corral $Corral) {
        $animals = Animals::where('corral_id',$corral)->get();
    }
}
