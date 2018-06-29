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

            \Mapper::location($request->buscar)->map(['zoom' => 13,'center' => true, 'marker' => false,]);

            }else{

            \Mapper::location('peru lima ate')->map(['zoom' => 13,'center' => true, 'marker' => false,]);
            }
        }
       
        
        $denuncias=Denuncia::all();

        foreach ($denuncias as $denuncia) {


            \Mapper::marker($denuncia->latitud, $denuncia->longitud,['icon' => 'https://d2hlvggafz1wn0.cloudfront.net/2c100855-fc25-4e8e-8eb1-62c515c4cccf/photo-1-tiny.jpeg','animation' => 'DROP',
            ]);
         
           
            
            
   
           

        }


        return view('principal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Mapper::location($request->busqueda)->map(['zoom' => 13,'center' => true, 'marker' => false,]);
        
        $denuncias=Denuncia::all();

        foreach ($denuncias as $denuncia) {
   
            \Mapper::informationWindow($denuncia->latitud, $denuncia->longitud,
             'Content', ['open' => false, 'maxWidth'=> 300, 'markers' => ['title' => 'Hola' ,'content'=>'msadsad']]
            );

        }
       


        return view('principal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
