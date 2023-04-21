<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrador')->insert([
            
            [
                'id'=>'1',
                'email' => 'admin@mail.com',
                'password' => Hash::make('12345678'),
                ],
          
        ]);

        DB::table('negocio')->insert([
            
            [
                'id'=>'1',
                'nombre'=>'Yeliko',
                'imagen'=>'/estudios/1.jpg',
                'nit'=>'134654',
                'telefono'=>'3668957',
                'correo'=>'yeliko@gmail.com',
                'direccion'=>'calle las pavas N°12',
                'mision'=>'mejor calidad a buen precio',
                'vision'=>'darle al cliente la satisfaccion que merece'
                ],
                        [
                'id'=>'2',
                'nombre'=>'Art Factory',
                'imagen'=>'/estudios/2.jpg',
                'nit'=>'849002',
                'telefono'=>'3842099',
                'correo'=>'factory@gmail.com',
                'direccion'=>'Av las Liras',
                'mision'=>'presencia, perseverancia y buen angulo',
                'vision'=>'buen servicio de alta calidad'
                ],

                [
                'id'=>'3',
                'nombre'=>'Gabb Productions',
                'imagen'=>'/estudios/3.jpg',
                'nit'=>'700846',
                'telefono'=>'3706901',
                'correo'=>'gabb@gmail.com',
                'direccion'=>'calle los tordos radial 26',
                'mision'=>'el cliente siempre tiene la razon',
                'vision'=>'escuchar la sugerencia de los clientes para mejorar'
                ],
                [
                'id'=>'4',
                'nombre'=>'Camera Eye',
                'imagen'=>'/estudios/4.jpg',
                'nit'=>'743682',
                'telefono'=>'3995184',
                'correo'=>'camera@gmail.com',
                'direccion'=>'barrio watsson',
                'mision'=>'donde se nececite camaras, ahi estaremos',
                'vision'=>'estar presente en los eventos más importantes de tu vida'
                ],         
              
          
        ]);

        
    }
}
