<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registros;
class RegistrosController extends Controller
{

  public function index()
     {
         $registro = Registros::orderBy('datalimite', 'asc')->paginate(10);
         return view('indexRegistros',['registro' =>'oi']);
     }

  public function store(Registros $request)
  {
      $registro = new Registros;
      $registro->equipamento_id  = $request->equipamento_id;
      $registro->descricao       = $request->descricao;
      $registro->tipo            = $request->tipo;
      $registro->save();
  }





}
