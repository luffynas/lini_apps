<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcTechPersonalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_tech_personal_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tech_id');
            $table->string('date_of_birth')->nullable();
            $table->integer('gender')->nullable();
            $table->integer('religion')->nullable();
            $table->integer('marital_status')->nullable();
            $table->string('ktp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('bpjs_health')->nullable();
            $table->string('bpjs_ketenagakerjaan')->nullable();
            $table->text('ktp_address')->nullable();
            $table->text('current_address')->unique();
            $table->integer('province')->nullable();
            $table->integer('city')->nullable();
            $table->string('emergency_call')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('recitation_place')->nullable();
            $table->string('ustad')->nullable();
            $table->string('book_title')->nullable();
            $table->timestamp('last_book_read')->nullable();
            $table->text('book_summary')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proc_tech_personal_data');
    }
}
