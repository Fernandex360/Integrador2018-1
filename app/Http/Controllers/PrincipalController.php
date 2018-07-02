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
       
        $marcador= array('Venta de Drogas'=> '../assets/img/drogas.png',
                        'Robo'   => '../assets/img/robo.png',
                        'Violencia' => '../assets/img/violencia.png',
                        'Vandalismo' => '../assets/img/vandalismo.png',
                        'Desechos' => '../assets/img/desechos.png',
                        'Homicidio' => '../assets/img/asesinato.png',
                        'Acoso Callejero' => '../assets/img/acoso.png',
                        'Incendio' => '../assets/img/incendio.png',
                        'Accidente de Transito' => '../assets/img/accidente.png',
                         );

        $denuncias=Denuncia::all();

        foreach ($denuncias as $denuncia) {

            $evidencia=$denuncia->evidencia;
            
            if(empty($evidencia)){

                $contenido="
                <div class='container-fluid'>   
                <div class='row'>
                    <div class='col-12'>
                        <h5><b>Fecha : <span>".$denuncia->fecha."</span></h5>
                        <h5><b>Tipo de Incidente : <span>".$denuncia->tipoIncidente."</span></h5>
                        <h5><b>Descripcion : ".$denuncia->descripcion."</h5>
                    </div>
                </div>";


            
            }
            else{
                $imagen="evidencias/".$denuncia->evidencia;

                $contenido="
                <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12'>
                        <h5><b>Fecha : <span>".$denuncia->fecha."</span></h5>
                        <h5><b>Tipo de Incidente : <span>".$denuncia->tipoIncidente."</span></h5>
                        <h5><b>Descripcion : ".$denuncia->descripcion."</h5>
                        <h5><b>Evidencia :<img src='".$imagen."' style='width:140%;'></h5>
                    </div>
                </div>";
            }

            \Mapper::informationWindow($denuncia->latitud, $denuncia->longitud, $contenido,['icon' => $marcador[$denuncia->tipoIncidente]]);
        }

        return view('principal');
    }

}
