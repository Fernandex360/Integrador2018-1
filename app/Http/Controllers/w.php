<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class w extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    

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
        //
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
