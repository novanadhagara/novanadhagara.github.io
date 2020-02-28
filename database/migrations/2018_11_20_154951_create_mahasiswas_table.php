<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaSiswa');
            $table->string('angkatanSiswa');
            $table->string('emailSiswa');
            $table->text('alamatSiswa');
            $table->integer('noHP');
            $table->string('pekerjaan');
            $table->string('jabatan');
            $table->text('saranSekolah');
            $table->text('saranAlumni');
            //$table->string('gambarMahasiswa');
           //$table->string('path');
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
        Schema::dropIfExists('mahasiswas');
    }
}
