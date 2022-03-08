<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesTechTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutes_tech', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('publisher_id');
            $table->string('publisher_type');
            $table->integer('project_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('event_start')->nullable();
            $table->string('event_end')->nullable();
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('minutes_tech');
    }
}
