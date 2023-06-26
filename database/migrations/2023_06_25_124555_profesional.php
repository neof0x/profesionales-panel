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
        Schema::create('profesional', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido');
            $table->integer('dni');
            $table->string('email')->unique();
            $table->string('profesion');
            $table->string('programas');
            $table->date('fecha'); 
            $table->binary('archivos');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        {
            Schema::dropIfExists('profesional');
        }
    }
};
