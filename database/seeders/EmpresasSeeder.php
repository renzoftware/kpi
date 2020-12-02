<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresas;
use Faker\Factory as Faker;
class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresas::truncate();
        $faker = Faker::create();

        Empresas::create([
            "empresa_nombre"=>"Hardtech",
            "empresa_estado"=>1
        ]);
        
        for ($i=0; $i < 10; $i++) { 
            Empresas::create([
            "empresa_nombre"=>$faker->company,
            "empresa_estado"=>1
            ]);        
        }
    }
}
