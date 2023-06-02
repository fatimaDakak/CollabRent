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
        Schema::create('annonce', function (Blueprint $table) {
            $table->increments('id_annonce');

            $table->date('date_debut');
            $table->date('date_fin');
            $table->double('prix_location');
            $table->string('ville', 100);
            $table->integer('nbjour_min');
            $table->boolean('statut_of_on');
            $table->integer('id_categorie')->unsigned();
            $table->string('type_annonce', 50);
            $table->integer('id_partenaire')->unsigned();
            // $table->string('description');
            // $table->string('etat_objet');
            $table->integer('id_objet')->unsigned();
            // $table->string('image');
            $table->integer('lundi')->default(0);
            $table->integer('mardi')->default(0);
            $table->integer('mercredi')->default(0);
            $table->integer('jeudi')->default(0);
            $table->integer('vendredi')->default(0);
            $table->integer('samedi')->default(0);
            $table->integer('dimanche')->default(0);
            $table->foreign('id_partenaire')->references('id_partenaire')->on('partenaire');
            $table->foreign('id_categorie')->references('id_categorie')->on('categorie');
            $table->foreign('id_objet')->references('id_objet')->on('objet');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce');
    }
};


