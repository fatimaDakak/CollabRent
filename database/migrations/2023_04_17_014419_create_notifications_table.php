<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type');
            $table->json('data');
            $table->timestamp('read_at')->nullable();
            $table->unsignedBigInteger('notifiable_id');
            $table->string('notifiable_type');
            $table->timestamps();

            $table->index(['notifiable_id', 'notifiable_type']);

        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}


