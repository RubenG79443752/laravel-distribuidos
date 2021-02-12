<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    //
}
public function store(Request $request)
{
    $idioma = new Idioma;
    $idioma->nombre = $request->nombre;
    $idioma->sigla = $request->sigla;
    $idioma->save();
    return redirect(route('idioma.index'));
    
}