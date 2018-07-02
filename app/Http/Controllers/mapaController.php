<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;

class mapaController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->longitud)){
        $longitud=$request->longitud; 
        $latitud=$request->latitud; 


        \Mapper::map($latitud, $longitud, ['zoom' => 15, 'markers' => ['title' => 'My Location', 'animation' => 'DROP'], 'clusters' => ['size' => 10, 'center' => true, 'zoom' => 20]]);
        }else{

            if(isset($request->buscar)){

            \Mapper::location('peru '.$request->buscar)->map(['zoom' => 13,'center' => true, 'marker' => false,]);

            }else{

            \Mapper::location('peru lima ate')->map(['zoom' => 13,'center' => true, 'marker' => false,]);
            }
        }
       
        return view('mapa');
    }
}
