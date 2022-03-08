<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectReportCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_report_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('publisher_id')->nullable();
            $table->string('publisher_type')->nullable();
            $table->integer('approver_id')->nullable();
            $table->string('approver_type')->nullable();
            $table->string('name');
            $table->integer('status')->default(1);
            $table->integer('type')->default(1);
            $table->timestamp('date_submitted')->nullable();
            $table->timestamp('date_approved')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_report_category');
    }
}
