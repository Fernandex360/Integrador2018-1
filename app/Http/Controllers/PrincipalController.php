<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;
use App\Denuncia;

class PrincipalController extends Controller
{
   public function PintarMapa(){

    

   	\Mapper::map(-12.033543499999999, -76.9361618, [
   		'zoom'=>13
   	] );

	/*Mapper::marker(53.381128999999990000, -1.470085000000040000, ['draggable' => true,'title'=>'marcador 1','eventMouseOver' => 'console.log("mouse over");']);
	Mapper::informationWindow(53.481128999999990000, -1.470085000000040000, 'sakdjasjkdkakd <br>jsadjaskjdhsajkdhksjahdkjas');*/

	$markers = array(['lat' => -12.23543499999999,'lng' => -76.5361618],
					['lat' => -12.23543499999989,'lng' => -76.5361628],
					['lat' => -12.23543499999979,'lng' => -76.5361638],
					['lat' => -12.23543499999969,'lng' => -76.5361618],
                    ['lat' => -12.28543499999999,'lng' => -76.9361618],
                    ['lat' => -12.21543499999999,'lng' => -76.7361618],
                    ['lat' => -12.43543499999999,'lng' => -76.4361618],
                            );

          foreach ($markers as $marker) {
   
              \Mapper::marker($marker['lat'], $marker['lng']);

          }

    $denuncia=Denuncia::all();
    return view('principal',['denuncias'=>$denuncia]);

   }
}
