<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('site_id');
            $table->integer('project_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->integer('pwo_id')->nullable();
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('bts_name')->nullable();
            $table->string('config')->nullable();
            $table->integer('sector')->nullable();
            $table->string('userlabel')->nullable();
            $table->integer('mcc')->nullable();
            $table->integer('mnc')->nullable();
            $table->integer('lac')->nullable();
            $table->integer('ci')->nullable();
            $table->string('bccharfcn')->nullable();
            $table->integer('trxnumber')->nullable();
            $table->integer('caarfcnlist')->nullable();
            $table->timestamp('on_air')->nullable();
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
        Schema::dropIfExists('site_information');
    }
}
