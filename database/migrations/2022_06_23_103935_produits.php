<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id_prod')->unique('id_prod_UNIQUE');
            $table->text('nom_prod', 15)->nullable();
            $table->text('description_prod')->nullable();
            $table->float('prix_prod', 10, 2)->nullable();
            $table->integer('quantite_prod')->nullable();
            $table->string('image', 45)->nullable();
            $table->text('descriptions_prod')->nullable();
            $table->tinyInteger('public')->default(0);
            $table->integer('id_cat')->nullable()->index('fk_Produits_Categories1_idx');
            $table->integer('id_admin')->nullable()->index('fk_Produits_Administrateur1_idx');
            $table->integer('id_vendeur')->nullable()->index('fk_Produits_Vendeur1_idx');
            $table->integer('id_marque')->nullable()->index('fk_Produits_Marque1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
