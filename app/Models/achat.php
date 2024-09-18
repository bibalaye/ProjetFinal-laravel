<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class achat extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'produits_id'];

   // Relation avec le produit
    public function produits(){
        return $this->belongsTo(produits::class,'produits_id','id');
    }
    // Relation avec l'utilisateur
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
