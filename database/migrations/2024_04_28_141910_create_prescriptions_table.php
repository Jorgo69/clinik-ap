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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('medecin_id')->nullable();
            $table->foreign('medecin_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
            $table->unsignedBigInteger('consultation_id');
            $table->foreign('consultation_id')
                    ->references('id')
                    ->on('consultations')
                    ->onDelete('cascade');
            $table->string('drugs')->comment('Le comprimer');
            $table->string('pace')->comment('La dose');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
