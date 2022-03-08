<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlashMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flash_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message');
            $table->integer('receiver_id')->nullable();
            $table->string('receiver_type')->nullable();
            $table->string('receiver_department')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('publisher_type')->nullable();
            $table->string('publisher_department')->nullable();
            $table->integer('level')->nullable();
            $table->integer('view')->nullable()->default(0);
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
        Schema::dropIfExists('flash_messages');
    }
}
