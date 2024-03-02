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
        Schema::create('reservi', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->default("valor por defecto")->nullable();
            $table->integer("edad")->default(10);
            $table->string("telefono");
           
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservi');
    }
};
