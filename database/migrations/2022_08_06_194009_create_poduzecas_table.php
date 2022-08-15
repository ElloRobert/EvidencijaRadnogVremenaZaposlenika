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
        Schema::create('poduzecas', function (Blueprint $table) {
            $table->id();
            $table->string('nazivPoduzeca');
            $table->date('datumOsnutka');
            $table->string('vlasnik');
            $table->string('OIB');
            $table->string('kontakt');
            $table->string('email');
            $table->string('ulica');
            $table->string('kucniBroj');
            $table->string('mjesto');
            $table->string('status');
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
        Schema::dropIfExists('poduzecas');
    }
};
