<?php

use Illuminate\Database\Seeder;
use App\Model\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $places = DB::table('place')->get();
        
        if ($places->isEmpty()) {
            DB::table('place')->insert(['name'   => 'Áncon',]);
            DB::table('place')->insert(['name'   => 'Ate',]);
            DB::table('place')->insert(['name'   => 'Barranco',]);
            DB::table('place')->insert(['name'   => 'Breña',]);
            DB::table('place')->insert(['name'   => 'Carabayllo',]);
            DB::table('place')->insert(['name'   => 'Chaclacayo',]);
            DB::table('place')->insert(['name'   => 'Chorrillos',]);
            DB::table('place')->insert(['name'   => 'Cieneguilla',]);       
            DB::table('place')->insert(['name'   => 'Comas',]);
            DB::table('place')->insert(['name'   => 'El Agustino',]);
            DB::table('place')->insert(['name'   => 'Independencia',]);
            DB::table('place')->insert(['name'   => 'Jesús María',]);
            DB::table('place')->insert(['name'   => 'La Molina',]);
            DB::table('place')->insert(['name'   => 'La Victoria',]);
            DB::table('place')->insert(['name'   => 'Lima',]);
            DB::table('place')->insert(['name'   => 'Lince',]);
            DB::table('place')->insert(['name'   => 'Los Olivos',]);
            DB::table('place')->insert(['name'   => 'Lurigancho',]);
            DB::table('place')->insert(['name'   => 'Lurín',]);
            DB::table('place')->insert(['name'   => 'Magdalena del Mar',]);
            DB::table('place')->insert(['name'   => 'Miraflores',]);
            DB::table('place')->insert(['name'   => 'Pachacamac',]);
            DB::table('place')->insert(['name'   => 'Pucusana',]);
            DB::table('place')->insert(['name'   => 'Pueblo Libre',]);
            DB::table('place')->insert(['name'   => 'Puente Piedra',]);
            DB::table('place')->insert(['name'   => 'Punta Hermosa',]);
            DB::table('place')->insert(['name'   => 'Punta Negra',]);
            DB::table('place')->insert(['name'   => 'Rímac',]);
            DB::table('place')->insert(['name'   => 'San Bartolo',]);
            DB::table('place')->insert(['name'   => 'San Borja',]);
            DB::table('place')->insert(['name'   => 'San Isidro',]);
            DB::table('place')->insert(['name'   => 'San Juan de Lurigancho',]);
            DB::table('place')->insert(['name'   => 'San Juan de Miraflores',]);
            DB::table('place')->insert(['name'   => 'San Luis',]);
            DB::table('place')->insert(['name'   => 'San Martín de Porres',]);
            DB::table('place')->insert(['name'   => 'San Miguel',]);
            DB::table('place')->insert(['name'   => 'Santa Anita',]);
            DB::table('place')->insert(['name'   => 'Santa María del Mar',]);
            DB::table('place')->insert(['name'   => 'Santa Rosa',]);
            DB::table('place')->insert(['name'   => 'Santiago de Surco',]);
            DB::table('place')->insert(['name'   => 'Surquillo',]);
            DB::table('place')->insert(['name'   => 'Villa El Salvador',]);
            DB::table('place')->insert(['name'   => 'Villa María del Triunfo',]);
        }        
    }
}
