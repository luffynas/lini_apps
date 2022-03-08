<?php

use Illuminate\Database\Seeder;

class PurchaseRequisitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchase_requisition_status')->insert([
            [ 'id'   => 1, 'name' => 'draft'],
            [ 'id'   => 2, 'name' => 'reviewed'],
            [ 'id'   => 3, 'name' => 'approved'],
        ]);
    }
}
