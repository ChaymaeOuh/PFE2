<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;
use App\Models\User;

class Order extends Model
{
    use HasFactory;
    protected $table = 'commandes';
    protected $primaryKey = 'id_commande';
    protected $fillable = [
        'id_commande',
        'num_suivi',
        'reference',
        'date_commande',
        'etat',
        'total_TTC',
        'total',
        'id_cli',
        'frais_livraison',
        'id_type_paiement',
        'id_liv',
        
    ];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_cli','id');
    }

    public function lignecommande()
    {
        return $this->hasMany(OrderItem::class);

    }
}
