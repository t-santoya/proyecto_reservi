<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservi extends Model
{
    use HasFactory;

    protected $table="reservi";
    protected $fillable=["id", "nombre", "edad", "telefono",		"id_jefe"];

    public function empleados()
    {
        return $this->hasMany(Reservi::class, "id_jefe", "id");
    }

    public function jefe()
    {
        return $this->belongsTo(Reservi::class, "id_jefe", "id");
    }
}
