<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectReportTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_report_template', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('cat_id')->nullable();
            $table->text('subcat_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('pwo_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->integer('publisher_id');
            $table->string('publisher_type');
            $table->integer('department_id')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('project_report_template');
    }
}
