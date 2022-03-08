<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcTestCompetencyResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_test_competency_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tech_id')->nullable();
            $table->text('question_id')->nullable();
            $table->text('answer')->nullable();
            $table->integer('result')->nullable()->default(0);
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
        Schema::dropIfExists('proc_test_competency_results');
    }
}
