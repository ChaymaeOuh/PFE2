<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->string('id_commande')->unique('id_commande_UNIQUE');
            $table->string('num_suivi')->nullable();
            $table->integer('reference')->nullable();
            $table->date('date_commande')->nullable();
            $table->integer('etat',)->default('0');
            $table->double('total_TTC')->nullable();
            $table->double('total')->nullable();
            $table->integer('id_cli')->nullable()->index('fk_Commandes_Users1_idx');
            $table->double('frais_livraison')->nullable();
            $table->integer('id_type_paiement')->nullable()->index('fk_Commande_Type-paiement1_idx');
            $table->integer('id_liv')->nullable()->index('fk_Commande_Livraison1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
