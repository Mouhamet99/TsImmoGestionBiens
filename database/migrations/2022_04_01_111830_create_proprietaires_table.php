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
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cni')->unique()->nullable(false);
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique()->nullable(false);
            $table->string('telephone')->unique();
            $table->enum('sexe', ['m', 'f']);

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
        Schema::dropIfExists('proprieataires');
    }
};
