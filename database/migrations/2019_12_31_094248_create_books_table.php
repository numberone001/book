<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table => création de la table dans MySQL
        // on définit ici la structure de la table que l'on créera
        // la méthode up crée la table 
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100); //type My SQL VARCHAR 100 caractéres max obligatoire
            $table->text('description')->nullable(); //Champ de type text qui peut être null donc pas obligatoire
            $table->dateTime('published_at')->nullable(); //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
