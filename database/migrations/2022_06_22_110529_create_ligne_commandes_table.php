<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_commandes', function (Blueprint $table) {
            $table->increments('id_ligne')->unique('id_ligne_UNIQUE');
            $table->string('nom_prod', 20)->nullable();
            $table->integer('quantite')->nullable();
            $table->double('prix')->nullable();
            $table->integer('id_prod')->nullable()->index('fk_Ligne-Commande_Produits1_idx');
            $table->integer('id_commande')->nullable()->index('fk_Ligne-Commande_Commande1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligne_commandes');
    }
}
