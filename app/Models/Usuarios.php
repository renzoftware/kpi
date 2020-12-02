<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "usuario_id";
    protected $fillable = [
        "usuario_username",
        "usuario_nombre", 
        "usuario_email", 
        "usuario_clave", 
        "usuario_estado"];
    protected $hidden = [
        "usuario_clave",
        "created_at",
        "updated_at"
    ];
    protected $casts = [
        "usuario_estado"=>"boolean"
    ];    

    use HasFactory;
}
