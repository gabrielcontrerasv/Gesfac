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

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EscuadronTableSeeder::class);
        $this->call(TipoDocumentoTableSeeder::class);
        $this->call(NovedadesSeeder::class);
        $this->call(AlumnosTableSeeder::class);
        $this->call(TipoFusilTableSeeder::class);
        $this->call(ArmerilloSeeder::class);
        $this->call(AlumnoArmerilloTableSeeder::class);
        $this->call(VisitanteTableSeeder::class);
        $this->call(DoctorTableSeeder::class);
        $this->call(TipoCitaTableSeeder::class);
        $this->call(SanidadTableSeeder::class);
        $this->call(TipoFamiliarSeeder::class);
        $this->call(ArticuloIntendenciaSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');



    }
}
