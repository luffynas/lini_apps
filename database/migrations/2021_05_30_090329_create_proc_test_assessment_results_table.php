<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcTestAssessmentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_test_assessment_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tech_id')->nullable();
            $table->text('question_id')->nullable();
            $table->integer('question_cat')->nullable();
            $table->text('answer')->nullable();
            $table->integer('result')->nullable();
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
        Schema::dropIfExists('proc_test_assessment_results');
    }
}
