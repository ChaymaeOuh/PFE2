<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Product;
use App\Http\Models\Order;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_items';
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


    public function products()
    {
        return $this->belongsTo(Product::class, 'id_prod', 'id_prod');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_commande', 'id_commande');
    }
}
