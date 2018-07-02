<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Denuncia;
class estadisticaController extends Controller
{
   public function index(){

   		$consulta=DB::table('denuncias')
                            ->select('denuncias.tipoIncidente',DB::raw('count(*) as incidentes'))
                            ->groupBy('denuncias.tipoIncidente')
                            ->get(); 

   		return view('estadisticas',['consultas' => $consulta]);

   }
}
