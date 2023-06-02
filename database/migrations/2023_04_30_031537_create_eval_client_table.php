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
        Schema::create('eval_client', function (Blueprint $table) {
            $table->increments('id_eval_client');
            $table->double('note');
            $table->string('sympathie', 100);
            $table->integer('id_partenaire')->unsigned();
            $table->integer('id_client')->unsigned();
            $table->integer('id_annonce')->unsigned();
            $table->string('comment', 50);

            $table->foreign('id_partenaire')->references('id_partenaire')->on('partenaire');
            $table->foreign('id_client')->references('id_client')->on('client');
            $table->foreign('id_annonce')->references('id_annonce')->on('annonce');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eval_client');
    }
};
