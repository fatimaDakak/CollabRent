<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {

            $table->increments('id_client');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('CIN');
            $table->string('mot_de_passe');
            $table->string('role');
           
          

            // $table->foreignId('user_id')->constrained('users');

            // $table->primary('id_client');
            // $table->timestamps();




        });


    }

    public function down()
    {
        Schema::dropIfExists('client');
    }
}
;

