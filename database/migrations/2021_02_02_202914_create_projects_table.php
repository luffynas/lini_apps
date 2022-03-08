<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id')->nullable();
            $table->integer('partner_id')->nullable();
            $table->integer('pm_id')->nullable();
            $table->integer('pc_id')->nullable();
            $table->integer('qcd_id')->nullable();
            $table->integer('qct_id')->nullable();
            $table->integer('ad_id')->nullable();
            $table->integer('tech_id')->nullable();
            $table->string('name');
            $table->string('number');
            $table->bigInteger('amount')->default(0);
            $table->integer('budget')->default(0);
            $table->integer('status')->default(1);
            $table->string('location')->nullable();
            $table->timestamp('date')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
