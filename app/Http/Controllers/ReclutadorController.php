<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reclutador;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

class ReclutadorController extends Controller
{
        use RegistersUsers;

    public function index()
    {
       $reclutador = Reclutador::all();

       return view('reclutadores.reclutadores_index', compact('reclutador'));
    }

      public function create()
    {
          $reclutador = new Reclutador();
          $user = User::all();
          return view('reclutadores.reclutadores_create', compact('reclutador', 'user'));
    }

       public function store(Request $request)
    {

        $user = new User();
        $user->empresa = $request->get('empresa');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make('password');
        $user->assignRole('reclutador');
        $user->save();
        /*
         $user = new User();
         $user->empresa = $data['empresa'];
         $user->name=$data['name'];
         $user->email=$data['email'];
         $user->password = Hash::make($data['password']);
         $user->assignRole('usuario');
         $user->save();*/

        return redirect()->route('reclutador.index');
    }
}
