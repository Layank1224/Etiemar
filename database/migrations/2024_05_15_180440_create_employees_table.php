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
        Schema::create('employees', function (Blueprint $table) {//5th table
            $table->id();////fnam, lname and password later we will add it to users table
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('manager_id')->constrained()->onDelete('cascade');
            $table->string('emp_position');
            $table->foreignId('position_id')->constrained()->onDelete('cascade');
            $table->foreignId('department_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
