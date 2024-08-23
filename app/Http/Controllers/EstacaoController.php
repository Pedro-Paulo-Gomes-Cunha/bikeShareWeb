<?php

namespace App\Http\Controllers;
use App\Models\Estacao;
use App\Models\Doca;
use App\Models\Bicleta;
use Illuminate\Http\Request;
use GoogleMaps\GoogleMaps;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator; //Importamos o Validator para validar os campos


class EstacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mapa()
    {

        $bikeStations = Estacao::all();
        return view('cliente.mapa', compact('bikeStations'));
    }

    /**
     * Show the form for index a new resource.
     */
    public function index()
    {

        $bicicletas = Bicleta::all();

        $data = [
            'bicicletas' => $bicicletas
        ];

        return view('admin.estacoes.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $estacao = new Estacao;

        $estacao->name = $request->name;
        $estacao->capacity = $request->capacity;
        $estacao->latitude = $request->demo1;
        $estacao->longitude = $request->demo2;
        $estacao->premio_entrega = $request->premio_entrega;
        $estacao->id_bicicleta = $request->id_bicicleta;

        $regras = [
            'demo1' => 'required|numeric',
            'demo2' => 'required|numeric',
        ];

        $regrasnome = [
            'name' => 'required|alpha',
        ];
        $regras2 = [
            'capacity' => 'required|numeric',
        ];

        $regras3 = [
            'premio_entrega' => 'required|numeric',
        ];
        $mensagemnome = [
            'name.alpha' => 'Erro!! O campo nome so aceita letras',
        ];


        $mensagem = [
            'demo1.numeric' => 'Erro!! Os campos Latitude e Longitude só devem conter números',
        ];

        $mensagem2 = [
            'capacity.numeric' => 'Erro!! O campo Capacidade só deve conter números',
        ];

        $mensagem3 = [
            'premio_entrega.numeric' => 'Erro!! O campo Prémio só deve conter números',
        ];

        $validarnome = Validator::make($request->all(),  $regrasnome,  $mensagemnome);

        $validar = Validator::make($request->all(),  $regras,  $mensagem);
        $validar2 = Validator::make($request->all(),  $regras2,  $mensagem2);
        $validar3 = Validator::make($request->all(),  $regras3,  $mensagem3);


        if($validarnome->fails()){
            return redirect()->back()->with('error', $mensagemnome['name.alpha']);
        }

        if($validar->fails()){
            return redirect()->back()->with('error', $mensagem['demo1.numeric']);
        }

        if($validar2->fails()){
            return redirect()->back()->with('error', $mensagem2['capacity.numeric']);
        }

        if($validar3->fails()){
            return redirect()->back()->with('error', $mensagem3['premio_entrega.numeric']);
        }


        try {
            DB::beginTransaction();
                $estacao->save();

            for($i = 1; $i <=  $estacao->capacity; $i++){
                $doca = new Doca();
                $doca->status = "Open";
                $doca->id_estacao = $estacao->id;
                $doca->save();
            }

            DB::commit();
            return redirect(route('estacao'))->with('msg', 'Estação Salva Com Sucesso!');
        } catch (\Exception $e) {

            DB::rollback();
            return redirect(route('estacao'))->with('msg', 'Não Foi Possível Salvar Estação!!');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Estacao $estacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estacao $estacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estacao $estacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estacao $estacao)
    {
        //
    }
}
