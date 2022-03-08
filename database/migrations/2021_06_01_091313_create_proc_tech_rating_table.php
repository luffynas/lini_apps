<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcTechRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_tech_rating', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tech_id')->nullable();
            $table->integer('giver_id')->nullable();
            $table->string('giver_type')->nullable();
            $table->integer('giver_department')->nullable();
            $table->text('giver_note')->nullable();
            $table->string('one')->nullable()->default(0);
            $table->string('two')->nullable()->default(0);
            $table->string('three')->nullable()->default(0);
            $table->string('four')->nullable()->default(0);
            $table->string('five')->nullable()->default(0);
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
        Schema::dropIfExists('proc_tech_rating');
    }
}
