<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuarios;
use App\Models\Roles;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Usuarios::truncate();
        $faker = Faker::create();
        $roles = Roles::all()->pluck('rol_id')->toArray();

        Usuarios::create([
            "usuario_username"=>"sistemas",
            "usuario_nombre"=>"sistemas", 
            "usuario_email"=>"email@email.com", 
            "usuario_clave"=>Hash::make("sistemas"),
            "usuario_estado"=> 1,
            "rol_id"=>1
        ]);

        for ($i=0; $i < 10; $i++) { 
            $rol_id = $faker->randomElement($roles);
            $userName = $faker->userName;
            
            Usuarios::create([
            "usuario_username"=>$userName,
            "usuario_nombre"=>$faker->name, 
            "usuario_email"=>$faker->email, 
            "usuario_clave"=>Hash::make($userName),
            "usuario_estado"=>1,
            "rol_id"=>$rol_id
            ]);        
        }



    }
}
