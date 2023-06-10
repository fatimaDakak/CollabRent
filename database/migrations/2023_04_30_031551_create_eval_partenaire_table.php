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
        Schema::create('eval_partenaire', function (Blueprint $table) {
            $table->increments('id_eval_partenaire');
            $table->integer('note');
            $table->string('sympathie');
            $table->integer('id_client')->unsigned();
            // $table->integer('id_objet')->unsigned();
            $table->integer('id_annonce')->unsigned();
            $table->integer('id_partenaire')->unsigned();
            $table->string('comment_part', 50);
            $table->string('etat_objet', 50);
            $table->string('type_comment', 10);
            $table->string('comment_objet', 50);

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
        Schema::dropIfExists('eval_partenaire');
    }
}
;