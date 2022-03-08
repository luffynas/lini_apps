<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_comments', function (Blueprint $table) {
            $table->bigIncrements('tc_id');
            $table->text('tc_comment');
            $table->integer('tc_task_id');
            $table->integer('tc_publisher_id');
            $table->string('publisher_type');
            $table->integer('tc_receiver_id');
            $table->string('receiver_type');
            $table->timestamp('tc_date')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('tasks_comments');
    }
}
