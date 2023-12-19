<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

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
            "telephone"=>"required|max:9"
        ]);
    Apprenant::create($request->all());
    $apprenants=Apprenant::all();
    return view('apprenants.listeApprenants',compact("apprenants")); 
}
    public function delete($id){
        $apprenant=Apprenant::find($id);
        $apprenant->delete();
        return redirect('/apprenants')->with('status','Apprenant supprimé avec success');
    }
    public function update($id)
    {
        $apprenant=Apprenant::find($id);
        return view('apprenants.update',compact('apprenant'));
    }
    public function update_traitement(Request $request){
        $request->validate([
            "prenom"=>"required",
            "nom"=>"required",
            "matricule"=>"required",
            "telephone"=>"required"
        ]);
        $apprenant=Apprenant::find($request->id);
        $apprenant->nom=$request->nom;
        $apprenant->prenom=$request->prenom;
        $apprenant->matricule=$request->matricule;
        $apprenant->telephone=$request->telephone;
        $apprenant->update();
        return redirect('/apprenants')->with('status','Apprenant modifié avec success');
    }
    ///NOTES////////////
        //Apprenant::create($request->all());//Request all va nous donner le tableau avec les donnees
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
