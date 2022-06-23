<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Product;
use App\Http\Models\Order;


class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'ligne_commande';
    protected $primaryKey = 'id_ligne';
    protected $fillable = [
        'id_ligne',
        'nom_prod',
        'quantite',
        'prix',
        'id_prod',
        'id_commande',
        
        
    ];

    public $timestamps = false;


    public function produits()
    {
        return $this->belongsTo(Product::class,'id_prod','id_prod');
    }

    public function order()
    {
        return $this->belongsTo(Order::class,'id_commande','id_commande');
    }

    
}
