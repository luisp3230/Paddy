<?php

use Illuminate\Database\Seeder;
use App\Model\Courier;

class CourierTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Status
          //Inactivo: 0
          //Activo  : 1

        $couriers = DB::table('courier')->get();
        
        if ($couriers->isEmpty()) {
           DB::table('courier')->insert([	'password'   => Hash::make('1234'),
                                       	  'first_name' => 'Luis',
                                       	  'last_name'  => 'Palma',
                                       	  'phone'  	   => '969680119',
                                          'address'    => 'Av. Morales Duarez Pasaje A 171',
                                          'email'      => 'luisp3230@gmail.com',
                                       	  'dni'  	 	   => '47935258',
                                          'status'	   => '1']);  

        }
    }
}
