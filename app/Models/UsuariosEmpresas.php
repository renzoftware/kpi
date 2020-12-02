<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosEmpresas extends Model
{
    protected $table = "usuarios_empresas";
    protected $primaryKey = "usuario_empresa_id";
    protected $fillable = [ 
        "usuario_empresa_estado"];
        
    protected $hidden = [
        "created_at",
        "updated_at"
    ];
    protected $casts = [
        "usuario_estado"=>"boolean"
    ];    

    use HasFactory;
}
