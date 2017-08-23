<?php

use Illuminate\Database\Seeder;
use App\Model\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admins = DB::table('admin')->get();
        
        if ($admins->isEmpty()) {
           DB::table('admin')->insert([	'password'   => Hash::make('y4p5G1G1'),
                                       	'first_name' => 'Judith',
                                       	'last_name'  => 'Cristobal',                                               
                                        'email'      => 'judith.cristobal.g@uni.pe']);       
        }        
    }
}
