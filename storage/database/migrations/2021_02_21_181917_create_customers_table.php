<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_type')->default('cust');
            $table->string('name');
            $table->string('title')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->integer('publisher_type')->nullable();
            $table->integer('publisher_department')->nullable();
            $table->string('mobile')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->integer('city')->nullable();
            $table->integer('province')->nullable();
            $table->text('note')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->default('default.png');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verification_code')->nullable();
            $table->integer('is_verified')->default(0)->nullable();
            $table->integer('active')->default(0)->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
