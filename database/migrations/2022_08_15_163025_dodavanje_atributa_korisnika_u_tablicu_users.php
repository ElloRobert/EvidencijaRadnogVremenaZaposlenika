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
        Schema::table('users', function (Blueprint $table) {
            $table->string('ime')->nullable();;
            $table->string('prezime')->nullable();;
            $table->string('spol')->nullable();;
            $table->date('datumRodenja')->nullable();;
            $table->string('OIB')->nullable();;
            $table->string('kontakt')->nullable();;
            $table->string('ulica')->nullable();;
            $table->string('kucniBroj')->nullable();;
            $table->string('mjestoStanovanja')->nullable();;
            $table->string('radnoMjesto')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
