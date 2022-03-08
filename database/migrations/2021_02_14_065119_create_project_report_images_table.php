<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectReportImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_report_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('project_id')->nullable();
            $table->integer('pwo_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->integer('template_id')->nullable();
            $table->integer('publisher_id');
            $table->string('publisher_type');
            $table->integer('approver_id')->nullable();
            $table->string('approver_type')->nullable();
            $table->integer('subcat_id')->nullable();
            $table->integer('subcatcustom_id')->nullable();
            $table->string('image');
            $table->string('selected_image')->default(0);
            $table->integer('status')->default(0);
            $table->integer('shared')->default(0);
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('approved_by_pm_at')->nullable();
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
        Schema::dropIfExists('project_report_images');
    }
}
