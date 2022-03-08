<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectExpensesFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_expenses_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('task_id')->nullable();
            $table->integer('tech_id')->nullable();
            $table->integer('expense_id')->nullable();
            $table->string('image')->nullable()->default('default.png');
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
        Schema::dropIfExists('project_expenses_files');
    }
}
