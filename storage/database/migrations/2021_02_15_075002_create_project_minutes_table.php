<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectMinutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_minutes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pwo_id');
            $table->integer('publisher_id');
            $table->string('publisher_type');
            $table->integer('department_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->default('default.png');
            $table->integer('status')->default(0);
            $table->integer('percentage')->nullable();
            $table->string('event_start')->nullable();
            $table->string('event_end')->nullable();
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('project_minutes');
    }
}
