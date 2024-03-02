<?php
namespace App\Resource\Reservi;

use App\Models\Reservi;

class Manager
{
    public function listarIntegrantesDelCurso()
    {
        return Reservi::all();
    }
}