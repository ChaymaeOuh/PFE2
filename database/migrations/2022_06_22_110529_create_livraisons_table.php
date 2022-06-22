<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->increments('id_liv')->unique('id_liv_UNIQUE');
            $table->date('date_liv')->nullable();
            $table->string('adresse_liv', 45)->nullable();
            $table->integer('tel_livreur')->nullable();
            $table->double('frais')->nullable();
            $table->integer('Num-suivi')->nullable();
            $table->double('poids')->nullable();
            $table->string('id_etat_liv', 45)->nullable()->index('fk_Livraison_Etat-livraison1_idx');
            $table->integer('id_type_liv')->nullable()->index('fk_Livraison_type_livraison1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livraisons');
    }
}
