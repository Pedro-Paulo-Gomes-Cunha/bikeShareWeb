<?php

namespace App\Http\Controllers;

use App\Models\Bicleta;
use Illuminate\Http\Request;

class BicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.bicicletas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $bicicleta = new Bicleta;

        $bicicleta->modelo = $request->modelo;
        $bicicleta->status = "Close";

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requstImage = $request->image;

            $extension = $requstImage->extension();

            $imageName = md5($requstImage-> getClientOriginalName(). strtotime("now")).".".$extension;

            /*Aqui adiccionamos a imagem na pasta*/
            $requstImage->move(public_path('assets/img/added_bike'), $imageName);


            //Aqui adiccionamos a imagem no banco
            $bicicleta->image = $imageName;

        }

        $bicicleta->save();

        /* Redicionar o usuário para uma página, usando a flash Messages*/
        return redirect(route('bicicleta'))->with('msg', 'Bicicleta Criada Com Sucesso!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bicleta $bicleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bicleta $bicleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicleta $bicleta)
    {
        //
    }
}
