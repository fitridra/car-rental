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
        Schema::create('tb_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mobil');
            $table->integer('id_user');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('jumlah_biaya');
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
        Schema::dropIfExists('tb_peminjaman');
    }
};
