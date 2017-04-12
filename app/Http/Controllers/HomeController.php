<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getCreateUser()
    {
        return view('crearusuarios');
    }

    public function postCreateUser(Request $request)
    {
        $nuevo_usuario = new User;
        $nuevo_usuario->id = $request->id;
        $nuevo_usuario->nickname = $request->nickname;
        $nuevo_usuario->type = $request->type;
        $nuevo_usuario->email = $request->email;
        $nuevo_usuario->password = $request->password;
        $nuevo_usuario->save();

        return 'Usuario guardado!';
    }

    public function getListUser()
    {
        return view('listuser');
    }
}
