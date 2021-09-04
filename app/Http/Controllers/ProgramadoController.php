<?php

namespace App\Http\Controllers;

use App\Models\Programado;
use Illuminate\Http\Request;

/**
 * Class ProgramadoController
 * @package App\Http\Controllers
 */
class ProgramadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programados = Programado::paginate(10);

        return view('programado.index', compact('programados'))
            ->with('i', (request()->input('page', 1) - 1) * $programados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programado = new Programado();
        return view('programado.create', compact('programado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Programado::$rules);

        $programado = Programado::create($request->all());

        return redirect()->route('programados.index')
            ->with('success', 'Programado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programado = Programado::find($id);

        return view('programado.show', compact('programado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programado = Programado::find($id);

        return view('programado.edit', compact('programado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Programado $programado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programado $programado)
    {
        request()->validate(Programado::$rules);

        $programado->update($request->all());

        return redirect()->route('programados.index')
            ->with('success', 'Programado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $programado = Programado::find($id)->delete();

        return redirect()->route('programados.index')
            ->with('success', 'Programado deleted successfully');
    }
}
