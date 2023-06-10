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
        Schema::create('reclamation', function (Blueprint $table) {
            $table->increments('id');
            $table->text('reclamation_de');
            $table->text('reclamation_sur');
            // $table->string('sujet');
            $table->text('description');
            $table->integer('id_client')->unsigned();
            $table->integer('id_annonce')->unsigned();
            $table->integer('id_partenaire')->unsigned();
            $table->timestamps();

            $table->foreign('id_client')->references('id_client')->on('client');
            $table->foreign('id_partenaire')->references('id_partenaire')->on('partenaire');
            $table->foreign('id_annonce')->references('id_annonce')->on('annonce');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamation');
    }
};
