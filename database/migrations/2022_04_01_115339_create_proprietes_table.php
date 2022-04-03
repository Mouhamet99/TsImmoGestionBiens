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
            $table->string('nom')->default('');

            $table->boolean("status")->default(false);
            $table->integer("nombre_etages");
            $table->integer("superficie");
            $table->string("adresse");
            $table->integer("montant");
            $table->foreignId('type_propriete_id')->constrained('type_proprietes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('quartier_id')->constrained('quartiers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('proprietaire_id')->constrained('proprietaires')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
