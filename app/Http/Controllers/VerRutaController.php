<?php

namespace App\Http\Controllers;

use App\Models\Ruta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class RutaController
 * @package App\Http\Controllers
 */
class VerRutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rut = Ruta::paginate(10);
        //$rutas = Ruta::orderBy('id','desc')->paginate(10);
        $rutas = Ruta::orderBy('nombre')->paginate(10);

        return view('verRuta.index', compact('rut','rutas'));
        //return ($rutas);
    }

    
}
