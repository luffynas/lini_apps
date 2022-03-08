<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectReportAllFormatCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_report_all_format_code', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->nullable();
            $table->integer('title')->nullable();
            $table->integer('text_count')->default(0)->nullable();
            $table->integer('image_count')->default(0)->nullable();
            $table->integer('video_count')->default(0)->nullable();
            $table->integer('file_count')->default(0)->nullable();
            $table->integer('image')->nullable();
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
        Schema::dropIfExists('project_report_all_format_code');
    }
}
