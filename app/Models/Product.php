<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $primaryKey = 'id_prod';
    protected $fillable = [
        'id_prod',
        'nom_prod',
        'description_prod',
        'prix_prod',
        'quantite_prod',
        'image',
        'descriptions_prod',
        'public',
        'id_cat',
        'id_admin',
        'id_vendeur',
        'date',
    ];
    public $timestamps = false;

    public function categorie()
    {
        return $this->belongsTo(Category::class, 'id_cat','id_cat');
    }
}
