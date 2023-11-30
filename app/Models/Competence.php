<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'force',
        'endurance',
        'technique',
        'precision',
        'coordination',
        'concentration',
        'reactivite',
        'strategie_jeu',
        'vitesse',
        'travail_equipe',
        'resilience',
        'gestion_pression',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }


}
