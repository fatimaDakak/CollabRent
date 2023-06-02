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
        Schema::create('partenaire', function (Blueprint $table) {

            $table->increments('id_partenaire');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('CIN');
            $table->string('mot_de_passe');
            $table->string('role');

        });
    }

    public function down(): void
    {
        Schema::table('partenaire', function (Blueprint $table) {
            $table->dropColumn(['nom', 'prenom', 'email', 'CIN', 'mot_de_passe', 'Role']);
        });
    }
   
  
}
;

