<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index() {
        $apprenants=Apprenant::all();
        return view('apprenants/listeApprenants',compact("apprenants")); 
    }
}
