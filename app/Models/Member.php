<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nom', 'prenom', 'tele', 'civilite', 'email', 'adresse', 'siteweb', 'quartier', 'domaine', 
        'autre_domaine', 'biographie', 'principaux', 'suggestions', 'dejamemebre', 'lesquelles',
        'marraine', 'cotisation'
    ];
}
