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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
	        $table->timestamps();
            $table->date('tanggal');
            $table->dateTime('jam_masuk');
            $table->dateTime('jam_pulang');
            $table->string('image_masuk');
            $table->string('image_pulang');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('keterangan'); //cuti,absen keluar,pulang cepat,masuk siang dll
            $table->unsignedBigInteger('id_karyawan');
            $table->foreign('id_karyawan')->references('id')->on('karyawans')->onDelete('cascade');            
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensis');
    }
};
