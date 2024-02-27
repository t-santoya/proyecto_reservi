<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserviController extends Controller
{
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
    return view("pages.inicio");
  }
}
