<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuariosempresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_empresas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('usuario_empresa_id')->unsigned();
            $table->boolean("usuario_empresa_estado");
            
            $table->bigInteger("usuario_id")->unsigned();
            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios')->onDelete('cascade');
            
            $table->bigInteger("empresa_id")->unsigned();
            $table->foreign('empresa_id')->references('empresa_id')->on('empresas')->onDelete('cascade');
                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('usuarios_empresas');
    }
}
