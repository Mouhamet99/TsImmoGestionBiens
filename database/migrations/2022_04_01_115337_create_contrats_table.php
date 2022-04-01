<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->int('duree');
            $table->dateTime('date_debut');
            $table->timestamps();
            $table->foreignId('type_contrat_id')->constrained('type_contrats');
            $table->foreignId('proprietaire_id')->constrained('proprietaires');
            $table->foreignId('propriete_id')->constrained('proprietes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrats');
    }
};
