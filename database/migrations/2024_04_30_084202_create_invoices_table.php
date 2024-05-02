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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payer_id')->nullable();
                $table->foreign('payer_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('set null');
            $table->string('invoice_number');
            $table->string('montant')->nullable();
            $table->string('left')->default(0);
            $table->string('pay')->nullable();
            $table->string('kind')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
