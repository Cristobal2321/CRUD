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
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string('parroquia');
            $table->string('asunto');
    
            // Datos Personales
            $table->string('expediente');
            $table->string('nombre');
            $table->string('domicilio');
            $table->string('colonia');
            $table->integer('edad');
            $table->string('estado_civil');
            $table->string('ocupacion');
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('telefono_casa');
            $table->string('telefono_movil');

            //Estructura Familiar
            $table->string('nombre_conyuge')->nullable();
            $table->string('otro')->nullable();
            $table->string('parentesco_con')->nullable();
            $table->string('edad_con')->nullable();
            $table->string('ocupacion_con')->nullable();
            $table->string('estado_civil_con')->nullable();
            $table->string('escolaridad')->nullable();
            $table->string('servicio_medico')->nullable();
            
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};