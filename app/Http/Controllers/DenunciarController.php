<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Denuncia;
use App\User;
use App\Distrito;
class DenunciarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        \Mapper::location('peru lima ')->map(['center' => true ,'zoom' => 10,'marker' => true,'draggable' => true,
        'eventDragEnd' => 
        'var latitud=event.latLng.lat();
        var longitud=event.latLng.lng();
        document.getElementById("latitud").value =latitud;
        document.getElementById("longitud").value =longitud;']);
     
        $distritos=Distrito::select('id','distrito')->orderBy('distrito')->get();


        return view('denunciar',compact('distritos'));
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
          
            if($request->hasFile('evidencia')){
                $file = $request->file('evidencia');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/evidencias/',$name);
            }else{
                $name="";
            }
            $this->validate($request,['tipoIncidente'=>'required','fecha'=>'required',
            'descripcion'=>'required','evidencia'=>'image','latitud'=>'required','longitud' => 'required']);
        
            
             $denuncia = new Denuncia();
             $denuncia->tipoIncidente=$request->input('tipoIncidente');
             $denuncia->fecha=$request->input('fecha');
             $denuncia->descripcion=$request->input('descripcion');
             $denuncia->evidencia= $name;
             $denuncia->latitud=$request->input('latitud');
             $denuncia->longitud=$request->input('longitud');
             $denuncia->id_distrito=$request->input('id_distrito');
             $denuncia->id_denunciante=auth()->id();
             $denuncia->save();   
             return redirect('/');
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
