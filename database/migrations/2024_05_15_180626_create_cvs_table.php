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
        Schema::create('cvs', function (Blueprint $table) {//13 table
            $table->id();//cv_id
            $table->foreignId('candidate_id')->constrained()->onDelete('cascade');
            $table->string('fname');
            $table->string('lname');
            $table->string('skills');
            $table->string('experince');
            $table->string('qualifications');
            $table->integer('phone_no');
            $table->string('email');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
