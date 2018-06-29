<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;
use App\Denuncia;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
       
        $marcador= array('Drogas'=> '../assets/img/drogas.png',
                        'Robo'   => '../assets/img/robo.png',
                        'Violencia' => '../assets/img/violencia.png',
                        'Vandalismo' => '../assets/img/vandalismo.png',
                        'Desechos' => '../assets/img/desechos.png',
                        'Homicidio' => '../assets/img/asesinato.png',
                        'Acoso' => '../assets/img/acoso.png',
                        'Incendio' => '../assets/img/incendio.png',
                        'Accidente' => '../assets/img/accidente.png',
                         );
        $denuncias=Denuncia::all();
        
        foreach ($denuncias as $denuncia) {

            $contenido="
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12'>
                        <h6>Fecha : <span>".$denuncia->fecha."</span></h6>
                        <h6>Lugar :</h6>
                        <h6>Descripcion : ".$denuncia->descripcion."</h6>
                    </div>
                </div>
            </div>
            ";
            

            \Mapper::informationWindow($denuncia->latitud, $denuncia->longitud, $contenido,['icon' => $marcador[$denuncia->tipoIncidente]]);
        }




        return view('principal');
    }

}
