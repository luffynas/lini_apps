<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsDevelopmentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps_development_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('programmer_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('name');
            $table->text('note')->nullable();
            $table->integer('status')->default(0);
            $table->string('percentage')->default(0);
            $table->string('event_start')->nullable();
            $table->string('event_end')->nullable();
            $table->timestamp('date')->nullable();
            $table->timestamp('done_date')->nullable();
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
        Schema::dropIfExists('apps_development_logs');
    }
}
