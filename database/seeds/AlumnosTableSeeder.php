<?php

use App\Alumno;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i <= 80; $i++) {
            \DB::table('alumnos')->insert(array(
                'nombre' => $faker->name,
                'telefono' => $faker->phoneNumber,
                'correo' => $faker->email,
                'direccion' => $faker->address,
                'numero_documento' => $faker->numberBetween(1000000000,1900000000),
                'escuadron' => $faker-> numberBetween(1,4),
                'tipo_documento' => $faker-> numberBetween(1,3),
                'excusado' => $i>30?$faker-> numberBetween(0,1):1,
                'editable' => $i<=20?0:1,
                'novedad' => $faker-> numberBetween(1,15)
            ));
       }

     /*   Alumno::create([
            'nombre' => "COMANDO",
            'telefono' => NULL,
            'correo' => NULL,
            'direccion' => NULL,
            'numero_documento' => NULL,
            'escuadron' => 1,
            'tipo_documento' => 1,
            'excusado' => 1,
            'editable' => false,
            'novedad' => 1,
        ]);
        */
    }
}
