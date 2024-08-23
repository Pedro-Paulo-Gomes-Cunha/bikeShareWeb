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
        Schema::create('estacaos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('latitude', 10, 6);
            $table->float('longitude', 10, 6);
            $table->integer('capacity');
            $table->integer('premio_entrega');

            $table->timestamps();
            $table->unsignedBigInteger('id_bicicleta');
            $table->foreign('id_bicicleta')->references('id')->on('bicletas')->onDelete('cascade')->onUpdate('cascade');

           ///$table->unsignedBigInteger('id_bicdoca');
            ///$table->foreign('id_bicdoca')->references('id')->on('bicleta_docas')->onDelete('cascade')->onUpdate('cascade');

             /*$table->unsignedBigInteger('id_gestor');
            $table->foreign('id_gestor')->references('id')->on('gestors')->onDelete('cascade')->onUpdate('cascade');*/

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estacaos');
    }
};
