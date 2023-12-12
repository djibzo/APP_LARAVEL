<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    protected $table='apprenant';
    protected $fillable =["nom","prenom","telephone","matricule"];//Colone autorise sur
    //protected $guarded =[]; // Colone non autorise 
}
