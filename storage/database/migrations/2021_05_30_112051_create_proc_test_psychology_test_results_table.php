<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcTestPsychologyTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_test_psychology_test_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tech_id')->nullable();
            $table->text('question_id')->nullable();
            $table->text('answer_id')->nullable();
            $table->integer('e')->nullable()->default(0);
            $table->integer('i')->nullable()->default(0);
            $table->integer('s')->nullable()->default(0);
            $table->integer('n')->nullable()->default(0);
            $table->integer('t')->nullable()->default(0);
            $table->integer('f')->nullable()->default(0);
            $table->integer('j')->nullable()->default(0);
            $table->integer('p')->nullable()->default(0);
            $table->string('result')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->integer('assessor_id')->nullable();
            $table->string('assessor_type')->nullable();
            $table->text('note')->nullable();
            $table->timestamp('assessment_date')->nullable();
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
        Schema::dropIfExists('proc_test_psychology_test_results');
    }
}
