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
        Schema::create('reserver', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_client')->unsigned();
            $table->integer('id_objet')->unsigned();
            $table->integer('id_annonce')->unsigned();
            // $table->date('date_reservation')->nullable();
            $table->date('date_debut_client');
            $table->date('date_fin_client');
            $table->timestamps();
            $table->string('status')->default('pending');//ou accepted
            $table->foreign('id_client')->references('id_client')->on('client');
            $table->foreign('id_objet')->references('id_objet')->on('objet');
            $table->foreign('id_annonce')->references('id_annonce')->on('annonce');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserver');
    }
};
