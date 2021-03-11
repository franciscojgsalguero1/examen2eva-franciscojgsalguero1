<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CenDocente;
use App\Http\Requests\CenDocenteRequest;

class CenDocenteController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CenDocenteRequest $request)
    {
        CenDocente::create($request->validated());
        
        return redirect()->route('formulario.create')->with('status', 'El proyecto fué creado con éxito');
    }
}
