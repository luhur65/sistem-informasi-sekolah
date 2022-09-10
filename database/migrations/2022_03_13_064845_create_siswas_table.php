<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->integer('nis')->primary();
            $table->string('nama', 50);
            $table->string('tempatlahir', 100);
            $table->string('tgllahir', 100);
            $table->text('alamat');
            $table->string('nohp', 20);
            $table->string('namaayah', 255);
            $table->string('namaibu', 255);
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
        Schema::dropIfExists('siswas');
    }
}
