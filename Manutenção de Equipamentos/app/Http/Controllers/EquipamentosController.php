<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipamentos;
class EquipamentosController extends Controller
{


  public function index()
     {
         $equipamentos = Equipamentos::all();
         return view('indexEquipamentos',compact("equipamentos"));
     }



  public function store(Registros $request)
  {
      $equipamentos = new Equipamentos;
      $equipamentos->nome  = $request->nome;
      $registro->save();
  }

}
