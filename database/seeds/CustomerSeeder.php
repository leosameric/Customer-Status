<?php

use Illuminate\Database\Seeder;
use App\CustomerStatus;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Customer::class, 10)->create();
    }
}
