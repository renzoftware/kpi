<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = "empresas";
    protected $primaryKey = "empresa_id";

    protected $fillable = [
        "empresa_nombre",
        "empresa_estado"
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
    protected $casts = [
        "empresa_estado"=>"boolean"
    ];    

    use HasFactory;
}
