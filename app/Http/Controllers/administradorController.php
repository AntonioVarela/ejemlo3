<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class administradorController extends Controller
{
    //
    public function index() {
        $usuarios = User::all();
        return view('home', compact('usuarios'));
    }

    public function creaUsuario(Request $request) {
        $user = new User();
        $user->nombre = $request->input('nombre');
        $user->usuario = $request->input('usuario');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->back();
    }

    public function modificaUsuario(Request $request, $id) {
        $user = User::find($id);
        $user->nombre = $request->input('nombre');
        $user->usuario = $request->input('usuario');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->back();
    } 

    public function eliminaUsuario($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
