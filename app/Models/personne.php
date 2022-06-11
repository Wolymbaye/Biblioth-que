<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personne extends Model
{
    //use HasFactory;
    protected $table = 'utilisateur';
    protected $fillable = ['nom','prenom','sexe','telephone','adress','login','password','profil'];
}
