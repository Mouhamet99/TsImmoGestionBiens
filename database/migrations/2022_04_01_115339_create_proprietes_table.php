<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->boolean("status");
            $table->integer("nombre_etages");
            $table->string("superficie");
            $table->string("adresse");
            $table->integer("montant");
            $table->foreignId('type_propriete_id')->constrained('type_proprietes');
            $table->foreignId('contrat_id')->constrained('contrats');
            $table->foreignId('quartier_id')->constrained('quartiers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proprietes');
    }
};
