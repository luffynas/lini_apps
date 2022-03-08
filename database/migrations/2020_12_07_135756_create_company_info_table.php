<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('rek')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->string('url');
            $table->string('brief');
            $table->string('keywords');
            $table->string('slogan');
            $table->text('address');
            $table->text('map');
            $table->string('logo');
            $table->integer('year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_info');
    }
}
