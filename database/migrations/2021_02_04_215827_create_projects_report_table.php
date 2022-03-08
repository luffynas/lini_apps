<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_report', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('project_id')->nullable();
            $table->integer('pwo_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('publisher_type')->nullable();
            $table->integer('approver_id')->nullable();
            $table->string('approver_type')->nullable();
            $table->string('cat_id')->nullable();
            $table->string('subcat_id')->nullable();
            $table->string('picture_id')->nullable();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->text('summary')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->timestamp('submitted_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('approved_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_report');
    }
}
