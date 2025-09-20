<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mascota;

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

    public function login(Request $request) {
        $usuario  = user::where('usuario', request('usuario'))->first();
        if ($usuario && \Hash::check(request('password'), $usuario->password)) {
            session(['usuario' => $usuario]);
            return redirect()->route('administrador');
        }
        return view('welcome', ['error' => 'Credenciales incorrectas']);
    }

    public function indexMascotas() {
        $mascotas = Mascota::all();
        $usuarios = User::all();
        return view('mascotas', ['mascotas' => $mascotas, 'usuarios' => $usuarios, 'usuario' => session('usuario')]);
    }

    public function creaMascota(Request $request) {
        $mascota = new Mascota();
        $mascota->nombre = $request->input('nombre');
        $mascota->tipo = $request->input('tipo');
        $mascota->raza = $request->input('raza');
        $mascota->edad = $request->input('edad');
        $mascota->idDueno = $request->input('dueno');
        $mascota->save();
        return redirect()->back();
    }

    public function eliminaMascota($id) {
        $mascota = Mascota::find($id);
        $mascota->delete();
        return redirect()->back();
    }

    public function modificaMascota(Request $request, $id) {
        $mascota = Mascota::find($id);
        $mascota->nombre = $request->input('nombre');
        $mascota->tipo = $request->input('tipo');
        $mascota->raza = $request->input('raza');
        $mascota->dueno_id = $request->input('dueno');
        $mascota->save();
        return redirect()->back();
    }


}
