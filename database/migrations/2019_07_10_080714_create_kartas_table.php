<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartas', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('letter')->nullable();
            $table->string('owner')->nullable();
            $table->string('obszar')->nullable();
            $table->string('dzial')->nullable();
            $table->string('rodzaj')->nullable();
            $table->text('temat')->nullable();
            $table->text('opis_zmian')->nullable();
            $table->string('tester')->nullable();
            $table->date('data_end')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('kartas');
    }
}
