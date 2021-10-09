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
    public function index(Request $request)
    {
        //$rut = Ruta::paginate(10);
        //$rutas = Ruta::orderBy('id','desc')->paginate(10);
        $texto = trim($request->get('texto'));
        $rutas = Ruta::orderBy('nombre')->paginate(10);
        $rut=Ruta::where('nombre','LIKE','%'.$texto.'%')->get();

        return view('verRuta.index', compact('rut','texto','rutas'));
        //return ($rut);
    }

    
}
