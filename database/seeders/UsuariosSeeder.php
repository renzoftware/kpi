<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuarios;
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

        Usuarios::create([
            "usuario_username"=>"sistemas",
            "usuario_nombre"=>"sistemas", 
            "usuario_email"=>"email@email.com", 
            "usuario_clave"=>Hash::make("sistemas"),
            "usuario_estado"=>1
        ]);
        
        for ($i=0; $i < 10; $i++) { 
            $userName = $faker->userName;
            Usuarios::create([
            "usuario_username"=>$userName,
            "usuario_nombre"=>$faker->name, 
            "usuario_email"=>$faker->email, 
            "usuario_clave"=>Hash::make($userName),
            "usuario_estado"=>1
            ]);        
        }



    }
}
