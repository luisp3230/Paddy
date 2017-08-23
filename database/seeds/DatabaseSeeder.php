<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('AdminSeeder');
        $this->call('CourierTestSeeder');
        $this->call('PartnerTestSeeder');
        $this->call('UserTestSeeder');
        $this->call('PlaceSeeder');
    }
}