<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectReportTextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_report_text', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->integer('template_id')->nullable();
            $table->integer('publisher_id');
            $table->string('publisher_type');
            $table->integer('approver_id')->nullable();
            $table->string('approver_type')->nullable();
            $table->integer('subcat_id')->nullable();
            $table->integer('subcatcustom_id')->nullable();
            $table->text('text');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('project_report_text');
    }
}
