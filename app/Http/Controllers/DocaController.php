<?php

namespace App\Http\Controllers;

use App\Models\Doca;
use Illuminate\Http\Request;

class DocaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docas = Doca::all();

        return \view('admin.docas.index', ['docas' => $docas]);
    }

    public function indexUpdateDoca($id)
    {
        $doca = Doca::findOrFail($id);

        return \view('admin.docas.indexUpdate', ['doca' => $doca]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request){

        Doca::findOrFail($request->id)->update($request->all());

        return redirect(route('doca'))->with('msg', 'Doca Atualizada Com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){

        Doca::findOrFail($id)->delete();

        return redirect(route('doca'))->with('msg', 'Doca Deletada Com Sucesso!');
    }
}
