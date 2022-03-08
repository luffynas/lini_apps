<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_leaders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_id')->nullable();
            $table->integer('coadmin_id')->nullable();
            $table->string('title');
            $table->text('description');
            $table->integer('status')->default(0);
            $table->integer('level')->nullable();
            $table->integer('category')->nullable();
            $table->string('receiver_department')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('publisher_type')->nullable();
            $table->integer('publisher_department')->nullable();
            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_end')->nullable();
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
        Schema::dropIfExists('tasks_leaders');
    }
}
