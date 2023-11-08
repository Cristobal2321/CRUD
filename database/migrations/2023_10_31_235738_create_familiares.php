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
        Schema::create('familiares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiario_id')->nullable();
            $table->string('nombre_familiar')->nullable();
            $table->string('parentesco_familiar')->nullable();
            $table->integer('edad_familiar')->nullable();
            $table->string('ocupacion_familiar')->nullable();
            $table->integer('ingreso_familiar')->nullable();
            $table->integer('total_ingreso_fam')->nullable();

            $table->timestamps();

            $table->foreign('beneficiario_id')->references('id')->on('beneficiarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familiares');
    }
};
