<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->integer('id_cli', true)->unique('id_cli_UNIQUE');
            $table->string('nomCli', 45)->nullable();
            $table->string('prenomCli', 45)->nullable();
            $table->char('sexe', 1)->nullable();
            $table->string('adresseCli', 45)->nullable();
            $table->integer('telCli')->nullable();
            $table->string('emailCli', 20)->nullable();
            $table->string('passwordCli', 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
