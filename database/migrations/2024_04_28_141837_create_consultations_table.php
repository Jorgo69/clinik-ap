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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('medecin_id')->nullable();
                $table->foreign('patient_id')
                        ->references('id')
                        ->on('patients')
                        ->onDelete('cascade');
                $table->foreign('medecin_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('set null');

            $table->string('pattern')->comment('motif');

            $table->string('weight')->comment('Le poid');
            $table->string('pulse')->comment('Le poul');
            $table->string('size')->nullable()->comment('Le poul');
            $table->string('stetoscopy')->comment('prendre la tension artérielle et détecter les bruits internes');
            $table->string('temperature')->comment('');


            $table->mediumText('diagnostic');
            $table->mediumText('observation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
