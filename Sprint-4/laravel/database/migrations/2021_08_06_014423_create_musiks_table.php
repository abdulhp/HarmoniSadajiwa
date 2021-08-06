<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musiks', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('pencipta');
            $table->string('daerah');
            $table->string('lirik');
            $table->string('gambar');
            $table->string('audio');
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
        Schema::dropIfExists('musiks');
    }
}
