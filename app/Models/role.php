<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    /*// Relation avec l'utilisateur
    public function user()
    {
        return $this->hasMany(user::class);
    }*/
}
