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
        Schema::create('containsdps', function (Blueprint $table) {//3d table
            $table->id();//deafult id in each table
            $table->foreignId('department_id')->constrained()->onDelete('cascade');//dap_name(fk)
            $table->foreignId('position_id')->constrained()->onDelete('cascade');//job_id (fk)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('containsdps');
    }
};
