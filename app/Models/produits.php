<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'prix', 'image', 'categories_id'];

    // Relation avec la catégorie
    public function categorie()
    {
        return $this->belongsTo(Categories::class, 'categories_id', 'id');
    }
    // Relation avec l'achat
    public function achat()
    {
        return $this->hasMany(achat::class);
    }

}
