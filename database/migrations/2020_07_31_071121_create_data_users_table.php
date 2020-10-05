<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jenis')->references('id')->on('jenis_cicilans');
            $table->string('nama');
            $table->string('nomor_hp');
            $table->string('email');
            $table->integer('sisa_cicilan');
            $table->integer('besar_cicilan');
            $table->integer('sisa_waktu_cicilan');
            $table->string('nama_bank');
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
        Schema::dropIfExists('data_users');
    }
}
