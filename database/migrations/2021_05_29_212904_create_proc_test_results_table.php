<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_test_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tech_id');
            $table->integer('test_id');
            $table->text('question_id')->nullable();;
            $table->text('answer')->nullable();;
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('proc_test_results');
    }
}
