<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){

        User::findOrFail($id)->delete();

        return redirect(route('user'))->with('msg', 'User Deletado Com Sucesso!');
    }

}
