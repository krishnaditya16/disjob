<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('lokasi_job');
            $table->string('kategori_job');
            $table->string('perusahaan_job');
            $table->string('alamat');
            $table->string('deskripsi');
            $table->string('kemampuan');
            $table->string('pengalaman');
            $table->string('jumlah_lowongan');
            $table->string('tipe_job');
            $table->string('gaji');
            $table->date('deadline');
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
        Schema::drop('jobs');
    }
}
