<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = ['type_realisation','date_realisation', 'description', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
