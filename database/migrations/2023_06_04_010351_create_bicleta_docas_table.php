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
        Schema::create('bicleta_docas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_bicleta');
            $table->foreign('id_bicleta')->references('id')->on('bicletas')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_doca');
            $table->foreign('id_doca')->references('id')->on('docas')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bicleta_docas');
    }
};
