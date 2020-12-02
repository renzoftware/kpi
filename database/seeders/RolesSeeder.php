<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;
use Faker\Factory as Faker;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::truncate();
        $faker = Faker::create();

        $roles_lista = ["sistemas", "asesor", "operativo", "jefatura", "directivo"];

        foreach ($roles_lista as $rol) {
            # code...
            Roles::create([
            "rol_nombre"=>$rol,
            "rol_estado"=>1
            ]);        
        }
    }
}
