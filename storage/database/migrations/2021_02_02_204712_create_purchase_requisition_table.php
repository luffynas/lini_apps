<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseRequisitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_requisition', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('department_id');
            $table->integer('category_id');
            $table->integer('project_id');
            $table->integer('publisher_id');
            $table->string('publisher_type');
            $table->integer('approver_id')->nullable();
            $table->string('approver_type')->nullable();
            $table->string('number');
            $table->string('name');
            $table->string('unit');
            $table->string('amount');
            $table->integer('budget');
            $table->integer('status')->default(1);
            $table->text('note')->nullable();
            $table->text('alasan')->nullable();
            $table->timestamp('date')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_requisition');
    }
}
