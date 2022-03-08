<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLacakPengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lacak_pengiriman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('layanan_id')->nullable();
            $table->integer('pengiriman_id')->nullable();
            $table->integer('status')->nullable();
            $table->string('note')->nullable();
            $table->timestamp('date')->nullable();
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
        Schema::dropIfExists('lacak_pengiriman');
    }
}
