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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')
                        ->references('id')
                        ->on('patients')
                        ->onDelete('cascade');
            $table->unsignedBigInteger('medecin_id')->nullable();
            $table->foreign('medecin_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('set null');
                
            $table->string('type_specialite')->default('generaliste');
            $table->string('date');
            $table->string('hours');
            $table->string('motif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
