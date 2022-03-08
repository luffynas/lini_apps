<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCovidTestRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_test_request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('nik')->nullable();
            $table->integer('requester_id')->nullable();
            $table->string('requester_name')->nullable();
            $table->string('requester_type')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('title')->nullable();
            $table->integer('status')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->string('project_name')->nullable();
            $table->string('partner_name')->nullable();
            $table->string('destination')->nullable();
            $table->timestamp('date');
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
        Schema::dropIfExists('covid_test_request');
    }
}
