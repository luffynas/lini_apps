<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectReportTextCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_report_text_comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->integer('template_id')->nullable();
            $table->integer('prt_id')->nullable();
            $table->integer('subcatcustom_id')->nullable();
            $table->integer('subcat_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('publisher_type')->nullable();
            $table->integer('publisher_level')->nullable();
            $table->integer('receiver_id')->nullable();
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
        Schema::dropIfExists('project_report_text_comments');
    }
}
