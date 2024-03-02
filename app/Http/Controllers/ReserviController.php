<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource\Reservi\Manager;

class ReserviController extends Controller
{
  public $manager;

  function __construct()
  {
    $this->manager = new Manager();
  }

  public function areas()
  {
    return view("pages.areas");
  }


  public function casos()
  {
    return view("pages.casos");
  }

  public function contacto()
  {
    return view("pages.contacto");
  }

  public function equipo()
  {
    return view("pages.equipo");
  }

  public function reservi()
  {
    return view("pages.reservi");
  }

  public function inicio()
  {
    $integrante = $this->manager->listarIntegrantesDelCurso();
    dd($integrante);
    return view("pages.inicio");
  }
}
