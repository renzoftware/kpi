<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\UsuariosEmpresas;
use App\Models\Usuarios;
use App\Models\Empresas;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class UsuariosEmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        UsuariosEmpresas::truncate();
        $faker = Faker::create();
        $usuarios = Usuarios::all()->pluck('usuario_id')->toArray();
        $empresas = Empresas::all()->pluck('empresa_id')->toArray();

        UsuariosEmpresas::create([
            "usuario_id"=> 1,
            "empresa_id"=> 1, 
            "usuario_empresa_estado"=> 1
        ]);

        for ($i=0; $i < 10; $i++) { 
            $usuario_id = $faker->randomElement($usuarios);
            $empresa_id = $faker->randomElement($empresas);
            
            UsuariosEmpresas::create([
                "usuario_id"=> $usuario_id,
                "empresa_id"=> $empresa_id, 
                "usuario_empresa_estado"=> 1
            ]);        
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
