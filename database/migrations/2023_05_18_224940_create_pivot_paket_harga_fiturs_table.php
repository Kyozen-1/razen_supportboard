<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotPaketHargaFitursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_paket_harga_fiturs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paket_harga_id')->nullable();
            $table->foreign('paket_harga_id')->references('id')->on('paket_hargas')->onDelete('cascade');
            $table->string('deskripsi')->nullable();
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
        Schema::dropIfExists('pivot_paket_harga_fiturs');
    }
}
