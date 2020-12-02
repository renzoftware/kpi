<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('usuario_id')->unsigned();
            $table->string("usuario_username", 150);
            $table->string("usuario_nombre", 150);
            $table->string("usuario_email", 100);
            $table->string("usuario_clave", 64);
            $table->boolean("usuario_estado");
            
            $table->bigInteger("rol_id")->unsigned();
            $table->foreign('rol_id')->references('rol_id')->on('roles')->onDelete('cascade');
                        
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
        Schema::dropIfExists('usuarios');
        
        //$table->dropForeign('usuarios_rol_id_foreign');
    }
}
