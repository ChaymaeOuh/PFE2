<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    use HasFactory;
    protected $table = 'panier';
    protected $fillable = [
        'user_id',
        'prod_id',
        'prod_qty',
    ];
    public $timestamps = false;

    public function products()
    { 
        return $this->belongsTo(Product::class, 'prod_id','id_prod');
    }
}
