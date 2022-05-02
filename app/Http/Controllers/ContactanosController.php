<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;



class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.formulario');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo =  new ContactanosMailable($request->all());
        Mail::to('pagina@pcsoluciones.cl')->send($correo);        //Para quien vá dirigido
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado'); //crea una variable de SESSION
    }
}
