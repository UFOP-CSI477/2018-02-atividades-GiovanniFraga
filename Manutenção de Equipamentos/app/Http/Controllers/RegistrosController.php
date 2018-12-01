<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registros;
class RegistrosController extends Controller
{

  public function index()
     {
         $registros = Registros::orderBy('datalimite', 'asc')->paginate(100);
         return view('indexRegistros',compact("registros"));
     }

     public function pesquisa(Request $request)
        {

          $registros = Registros::where('equipamento_id','=',$request->equipamento_id)->get();
          return view('indexRegistros',compact("registros"));

        }



  public function store(Request $request)
  {
      $registro = new Registros;
      $registro->equipamento_id  = $request->equipamento_id;
      $registro->descricao       = $request->descricao;
      $registro->tipo            = $request->tipo;
      $registro->datalimite      = $request->datalimite;
      $registro->save();
      return redirect('registro/index');
  }





}
