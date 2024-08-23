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
        Schema::create('docas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('status');

            $table->unsignedBigInteger('id_estacao');
            $table->foreign('id_estacao')->references('id')->on('estacaos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docas');
    }
};
