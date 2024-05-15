<?php

namespace App\Http\Controllers;

class EjemploController extends Controller{
  public function index($id){
    return "Creando controller con paramentro: " . $id ;
  }
}