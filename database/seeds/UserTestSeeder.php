<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UserTestSeeder extends Seeder
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

        $users = DB::table('user')->get();
        
        if ($users->isEmpty()) {
           DB::table('user')->insert([	'password'   => Hash::make('1234'),
                                       	'first_name' => 'Pamela',
                                       	'last_name'  => 'Palma',
                                       	'phone'		 => '977975875',
                                       	'dni'  	 	 => '12345678',
                                        'email'      => '2bpalmapamela@gmail.com',
                                        'status'     => '1',]);  

        }         
    }
}
