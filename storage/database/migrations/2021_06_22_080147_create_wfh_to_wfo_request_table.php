<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWfhToWfoRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wfh_to_wfo_request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('leader_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('employee_id')->nullable();
            $table->string('employee_type')->nullable();
            $table->timestamp('date')->nullable();
            $table->time('clock_in')->nullable();
            $table->time('clock_out')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1)->nullable();
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
        Schema::dropIfExists('wfh_to_wfo_request');
    }
}
