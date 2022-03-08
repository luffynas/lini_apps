<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcTestAssessmentAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_test_assessment_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('question_id')->nullable();
            $table->integer('answer_a')->default(0);
            $table->integer('answer_b')->default(0);
            $table->integer('answer_c')->default(0);
            $table->integer('answer_d')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proc_test_assessment_answers');
    }
}
