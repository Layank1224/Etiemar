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
        Schema::create('positions', function (Blueprint $table) {//2nd table
            $table->id();//job_id
            $table->text('job_description');//string
            $table->string('job_name')->nullable();//can't be null
            $table->double('job_salaries');
            $table->text('requierments')->nullable();//string
            $table->foreignId('department_id')->constrained()->onDelete('cascade');//(fk)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
