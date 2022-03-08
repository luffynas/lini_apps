<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectPurchaseRequisitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_purchase_requisition', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('department_id');
            $table->integer('category_id');
            $table->integer('project_id');
            $table->integer('task_id');
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
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('project_purchase_requisition');
    }
}
