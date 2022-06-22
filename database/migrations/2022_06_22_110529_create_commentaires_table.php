<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->increments('id_com')->unique('id_com_UNIQUE');
            $table->string('titre', 10)->nullable();
            $table->text('commentaire')->nullable();
            $table->date('Date_comment')->nullable();
            $table->integer('id_cli')->nullable()->index('fk_Commentaires_Client1_idx');
            $table->integer('id_prod')->nullable()->index('fk_Commentaires_Produits1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
