<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use App\Models\Role;
use App\Models\Estacao;
use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bikeStations = Estacao::all();
        return \view('cliente.home', compact('bikeStations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        d("fjhjhv");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {
            //Criar novo usuário
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password); //Aqui vamos criptografar a senha
            $user->image = $request->image;
            $user->id_role = $request->id_role;
                //Image Upload

               
            if($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage-> getClientOriginalName(). strtotime("now")).".".$extension;
                /*Aqui adiccionamos a imagem na pasta*/
                $requestImage->move(public_path('images/usersUpload'), $imageName);
                //Aqui adiccionamos a imagem no banco
                $user->image = $imageName;
            }

            

            // $regra01 = [
            //     'name' => 'required|alpha',
            // ];

            // $regra02 = [
            //     'email' => 'required|alpha',
            // ];

            // $mensagemnome = [
            //     'name.alpha' => 'Erro!! O campo nome so aceita letras',
            // ];

            // $mensagememail = [
            //     'email.alpha' => 'Erro!! O campo email so aceita letras',
            // ];

            // $validarnome = Validator::make($request->all(),  $regra01,  $mensagemnome);

            // $validaremail = Validator::make($request->all(),  $regra02,  $mensagememail);

            // if($validarnome->fails()){
            //     return redirect()->back()->with('error', $mensagemnome['name.alpha']);
            // }

            // if($validaremail->fails()){
            //     return redirect()->back()->with('error', $mensagememail['demo1.alpha']);
            // }

            $user->save();//Salva-se os Dados do usuário que será associado ao secretario

            //Criar novo secretario associado ao usuário recem criado....

            
            $cliente = new Cliente();
            $cliente->id_user = $user->id;

            $cliente->saldo = $request->saldo;
            $cliente->username = $user->name;
            $cliente->genero = $request->genero;
           
            $cliente->save();//Dados salvos no BD
           
            DB::commit();
          
           return redirect(route('login.logar'))->with('msg', 'Parabéns a sua conta foi criada com sucesso!');
        } catch (\Exception $th) {
            //throw $th;
            DB::rollBack();
            return redirect(route('login.create'))->with('error', 'Não Foi Possível Salvar Sua Conta!! '.$th->__tostring());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
