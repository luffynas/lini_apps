<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('publisher_id');
            $table->string('publisher_type');
            $table->integer('publisher_department')->nullable();
            $table->integer('publisher_company')->nullable();
            $table->integer('minute_cat')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('status')->default(0);
            $table->integer('published')->default(1);
            $table->integer('grade')->default(0);
            $table->integer('percentage')->default(0);
            $table->timestamp('date')->nullable();
            $table->timestamp('done_date')->nullable();
            $table->string('event_start')->nullable();
            $table->string('event_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minutes');
    }
}
