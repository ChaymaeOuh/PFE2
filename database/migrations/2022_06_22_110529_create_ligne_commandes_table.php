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
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id_ligne')->unique('id_ligne_UNIQUE');
            $table->string('nom_prod', 20)->nullable();
            $table->integer('quantite');
            $table->double('prix');
            $table->string('id_prod')->index('fk_Order_Items_Produits1_idx');
            $table->string('id_commande')->index('fk_Order_Items_Commandes1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
