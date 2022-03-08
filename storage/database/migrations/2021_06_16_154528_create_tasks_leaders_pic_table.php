<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksLeadersPicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_leaders_pic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('task_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->text('pic_id')->nullable();
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
        Schema::dropIfExists('tasks_leaders_pic');
    }
}
