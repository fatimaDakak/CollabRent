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
        Schema::create('contrat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_client')->unsigned();
            $table->integer('id_partenaire')->unsigned();
            $table->integer('id_annonce')->unsigned();
            $table->string('signature_client')->nullable();
            $table->string('signature_partenaire')->nullable();
            $table->foreign('id_client')->references('id_client')->on('client');
            $table->foreign('id_partenaire')->references('id_partenaire')->on('partenaire');
            $table->foreign('id_annonce')->references('id_annonce')->on('annonce');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrat');
    }
};
