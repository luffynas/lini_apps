<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('project_id')->nullable();
            $table->integer('pwo_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('publisher_type')->nullable();
            $table->string('name');
            $table->integer('status');
            $table->string('code')->nullable();
            $table->timestamp('request_submitted')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('request_approved')->nullable();
            $table->integer('request_approver_id')->nullable();
            $table->string('request_approver_type')->nullable();
            $table->timestamp('report_submitted')->nullable();
            $table->timestamp('report_approved')->nullable();
            $table->integer('report_approver_id')->nullable();
            $table->string('report_approver_type')->nullable();
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
        Schema::dropIfExists('project_tools');
    }
}
