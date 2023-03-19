<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacante;
use App\Models\User;
class WelcomeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $welcome = Vacante::all();
          $user = User::all();

          return view('welcome') -> with(compact('welcome')) -> with(compact('user')) ;

    }
}