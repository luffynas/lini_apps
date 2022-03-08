<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectReportAllCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_report_all_comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->integer('pra_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('publisher_type')->nullable();
            $table->string('receiver_type')->nullable();
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
        Schema::dropIfExists('project_report_all_comments');
    }
}
