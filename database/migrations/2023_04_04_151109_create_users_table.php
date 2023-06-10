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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role');//admin:1,user:2
            $table->string('password');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('id_admin')->unsigned()->nullable();
            $table->integer('id_partenaire')->unsigned()->nullable();
            $table->integer('id_client')->unsigned()->nullable();
            $table->foreign('id_admin')->references('id_admin')->on('admin');
            $table->foreign('id_partenaire')->references('id_partenaire')->on('partenaire');
            $table->foreign('id_client')->references('id_client')->on('client');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
