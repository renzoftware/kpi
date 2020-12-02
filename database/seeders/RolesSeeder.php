<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Roles;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {          
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
