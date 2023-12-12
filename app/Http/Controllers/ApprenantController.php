<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index() {
        $apprenants=Apprenant::all();
        return view('apprenants.listeApprenants',compact("apprenants")); 
    }
    public function create(){
        return view('apprenants.create');
    }
    public function store(Request $request){
        $request->validate([
            "prenom"=>"required",
            "nom"=>"required",
            "matricule"=>"required",
            "telephone"=>"required"
        ]);
        Apprenant::create($request->all());//Request all va nous donner le tableau avec les donnees
        // Apprenant::create([
        //     "nom"=>$request->input('nom'),
        //     "prenom"=>$request->input('prenom'),
        //     "telephone"=>$request->input('telephone') ,
        //     "matricule"=>$request->input('matricule')
        // ]);
        // $apprenant =new Apprenant();
        // $apprenant->nom=$request->input('nom');
        //ainsi de suite
    }
}
