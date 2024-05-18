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
        Schema::create('notifications', function (Blueprint $table) { //6th table
            $table->id();//notificaion_id (pk)
            $table->string('sender');
            $table->string('viewers');
            $table->string('content_type');
            $table->string('viewers_count');
            $table->date('date');
            $table->timestamps();//date
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
