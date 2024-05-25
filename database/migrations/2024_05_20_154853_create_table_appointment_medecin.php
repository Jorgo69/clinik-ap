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
        Schema::create('table_appointment_medecin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medecin_id')->nullable();
            $table->foreign('medecin_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('apointment_id')->nullable();
            $table->foreign('apointment_id')
                    ->references('id')
                    ->on('appointments')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_appointment_medecin');
    }
};
