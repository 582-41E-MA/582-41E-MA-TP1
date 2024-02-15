<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;


    /**
     * Je n'ai pas trop compris pourquoi exactement, mais public $timestamps = false; permet le update que j'ai fait de fonctionner. 
     * De ce que je crois comprendre, c'est parce que Laravel attend des valeurs quand la demande pour un update est faite. 
     * Ceci permet de le faire ignorer ces valeurs et de passer l'update.
     * 
     * Ref:https://stackoverflow.com/questions/28277955/laravel-unknown-column-updated-at
     */
    public $timestamps = false;

    protected $fillable = [
        'titre',
        'prix',
        'quantite',
        'panier'
    ];
}
