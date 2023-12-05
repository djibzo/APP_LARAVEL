<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function index() {
        $matieres=Matiere::all();
        return view('matieres/listeMatiere',compact("matieres")); 
    }
}
