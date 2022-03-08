<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTroubleshootingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troubleshooting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('publisher_type')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('category_id')->default(0);
            $table->text('problem')->nullable();
            $table->text('solution')->nullable();
            $table->integer('status')->default(1);
            $table->string('image')->default('default.png');
            $table->int('view')->default(0);
            $table->string('event_start')->nullable();
            $table->string('event_end')->nullable();
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('troubleshooting');
    }
}
