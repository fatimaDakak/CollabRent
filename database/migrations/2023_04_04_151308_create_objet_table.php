<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('objet', function (Blueprint $table) {

            $table->increments('id_objet');
            $table->string('nom_objet');
            $table->string('description');
            $table->string('etat_objet');
            $table->string('image');
            $table->integer('id_categorie')->unsigned();
            $table->integer('id_partenaire')->unsigned();
            $table->foreign('id_partenaire')->references('id_partenaire')->on('partenaire');
            $table->foreign('id_categorie')->references('id_categorie')->on('categorie');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objet');
    }
};
