<?php

use Illuminate\Database\Seeder;
use App\Model\Partner;

class PartnerTestSeeder extends Seeder
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

        $partners = DB::table('partner')->get();
        
        if ($partners->isEmpty()) {
           DB::table('partner')->insert([	'password'    => Hash::make('1234'),
                                       	  'description' => 'Starfucks',
                                       	  'ruc'  		    => '10479352581',
                                       	  'phone'  	    => '969680119',
                                          'address'     => 'Av. Tupac Amaru Puerta 5',
                                          'email'       => 'hola@paddy.com',
                                       	  'logo'  	    => 'resources\img\Partners\1\Logo\box.jpg',
                                          'status'	    => '1']);

        }
    }
}
