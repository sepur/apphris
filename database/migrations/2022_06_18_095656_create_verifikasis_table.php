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
        Schema::create('verifikasis', function (Blueprint $table) {
		$table->id();
		$table->unsignedBigInteger('fk_apply');
                $table->foreign('fk_apply')->references('id')->on('apllylokers');
                $table->date('waktu');
		$table->string('status');
		$table->string('note');
		$table->unsignedBigInteger('maker');
                $table->foreign('maker')->references('id')->on('users');
                $table->string('progres');
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
        Schema::dropIfExists('verifikasis');
    }
};
