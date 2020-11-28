<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CustomerStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Customer Status Data
        DB::table('Customerstatus')->insert([
            'CustomerStatusId' => '1',
            'Code' => 'AC',
            'Name' => 'Active',
        ]);

        DB::table('Customerstatus')->insert([
            'CustomerStatusId' => '2',
            'Code' => 'RE',
            'Name' => 'Removed',
        ]);
    }
}
