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
        Schema::create('medical_information', function (Blueprint $table) {
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
                    
            $table->string('blood_group');
            $table->string('facteur_rhesus');
            $table->string('allergies');
            $table->mediumText('other_informations')->nullable()->comment('Le champs pour prise de note manuelle pour apporter des clarification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_information');
    }
};
