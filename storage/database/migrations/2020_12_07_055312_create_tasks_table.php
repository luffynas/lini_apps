<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('task_id');
            $table->string('task_title');
            $table->text('task_desc');
            $table->integer('task_status')->default(0);
            $table->integer('task_level')->nullable();
            $table->integer('grade')->default(0);
            $table->integer('percentage')->default(0);
            $table->integer('category')->nullable();
            $table->integer('task_receiver_id')->nullable();
            $table->string('receiver_type')->nullable();
            $table->string('receiver_department')->nullable();
            $table->integer('task_publisher_id')->nullable();
            $table->string('publisher_type')->nullable();
            $table->string('publisher_department')->nullable();
            $table->timestamp('task_date')->nullable();
            $table->timestamp('task_due_date')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
