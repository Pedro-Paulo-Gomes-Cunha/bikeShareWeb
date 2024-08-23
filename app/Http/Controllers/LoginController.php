<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Aqui fizemos a importanção da Classe de autenticação "Auth"
use Illuminate\Support\Facades\Validator; //Importamos o Validator para validar os campos
use App\Models\Cliente;
use App\Models\User;
use App\Models\Role;




class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('login.logar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('login.create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function auth(Request $request)
    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'id_role' => 1]))
        {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard/login');//O metodo intendend ajuda a verificar se um usuário veio de algum lugar, caso esteja logado

        }elseif(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'id_role' => 2]))
        {
            $request->session()->regenerate();
            return redirect()->intended('/cliente/home');//O metodo intendend ajuda a verificar se um usuário veio de algum lugar, caso esteja logado

        }
        else{
            return redirect()->back()->with('login_error', 'Email ou senha inválidos.');
        }
    }

    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect(route('site.home')); 
    }

}



