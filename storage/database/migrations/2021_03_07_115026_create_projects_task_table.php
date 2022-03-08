<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('project_id');
            $table->integer('publisher_id');
            $table->string('publisher_type');
            $table->integer('pm_id')->nullable();
            $table->integer('pc_id')->nullable();
            $table->integer('qct_id')->nullable();
            $table->integer('qcd_id')->nullable();
            $table->integer('tech_id')->nullable();
            $table->string('name');
            $table->string('number')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('budget')->nullable();
            $table->integer('status')->default('0');
            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_end')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('projects_task');
    }
}
