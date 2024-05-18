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
        Schema::create('requestts', function (Blueprint $table) {
            $table->id();//request_id (pk)
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('request_type');
            $table->string('state_type');
            $table->date('request_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requestts');
    }
};
