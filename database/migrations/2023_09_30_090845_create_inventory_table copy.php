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
        Schema::create('pilot', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_de_piloto'); // Pilot's Name
            $table->string('licencia'); // License
            $table->string('codigo_piloto'); // Pilot Code
            $table->string('cabezal'); // Header
            $table->string('placa'); // Plate Number
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilot');
    }
};
