<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectReportAllFormatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_report_all_format', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('task_id');
            $table->integer('template_id')->nullable();
            $table->integer('pra_id');
            $table->integer('title_id')->nullable();
            $table->integer('subtitle_id')->nullable();
            $table->integer('type')->nullable();
            $table->integer('sort_order')->default(0)->nullable();
            $table->string('title')->nullable();
            $table->integer('text_count')->default(0)->nullable();
            $table->integer('image_count')->default(0)->nullable();
            $table->integer('video_count')->default(0)->nullable();
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
        Schema::dropIfExists('project_report_all_format');
    }
}
