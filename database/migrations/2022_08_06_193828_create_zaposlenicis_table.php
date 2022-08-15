<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     * 
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaposlenicis', function (Blueprint $table) {
            $table->id();
            $table->string('sifraZaposlenika');
            $table->string('ime');
            $table->string('prezime');
            $table->string('spol');
            $table->date('datumRodenja');
            $table->string('OIB');
            $table->string('kontakt');
            $table->string('email');
            $table->string('ulica');
            $table->string('kucniBroj');
            $table->string('mjestoStanovanja');
            $table->integer('uzdržavaniClanoviKucanstva');
            $table->string('radnoMjesto');
           

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
        Schema::dropIfExists('zaposlenicis');
    }
};
