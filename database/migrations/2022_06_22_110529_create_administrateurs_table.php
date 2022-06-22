<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->integer('id_admin', true)->unique('id_admin');
            $table->string('nom_admin', 10)->nullable();
            $table->string('prenom_admin', 10)->nullable();
            $table->string('email_admin', 15)->nullable();
            $table->string('password_admin', 8)->nullable();
            $table->integer('tel_admin')->nullable();
            $table->string('adresse_admin', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrateurs');
    }
}
