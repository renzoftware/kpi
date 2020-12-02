<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = "roles";
    protected $primaryKey = "rol_id";

    protected $fillable = [
        "rol_nombre",
        "rol_estado"
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
    protected $casts = [
        "rol_estado"=>"boolean"
    ];    

    use HasFactory;
}
