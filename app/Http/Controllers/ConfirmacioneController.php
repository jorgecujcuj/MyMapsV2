<?php

namespace App\Http\Controllers;

use App\Models\Confirmacione;
use App\Models\Programado;
use Illuminate\Http\Request;

/**
 * Class ConfirmacioneController
 * @package App\Http\Controllers
 */
class ConfirmacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirmaciones = Confirmacione::orderBy('id','desc')->paginate(10);

        return view('confirmacione.index', compact('confirmaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $confirmaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $confirmacione = new Confirmacione();
        $programados = Programado::orderBy('id','desc')->get();

        return view('confirmacione.create', compact('confirmacione','programados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Confirmacione::$rules);

        $confirmacione = Confirmacione::create($request->all());

        return redirect()->route('confirmaciones.index')
            ->with('success', 'Confirmacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $confirmacione = Confirmacione::find($id);

        return view('confirmacione.show', compact('confirmacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $confirmacione = Confirmacione::find($id);
        $programados = Programado::orderBy('id','desc')->get();

        return view('confirmacione.edit', compact('confirmacione','programados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Confirmacione $confirmacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confirmacione $confirmacione)
    {
        request()->validate(Confirmacione::$rules);

        $confirmacione->update($request->all());

        return redirect()->route('confirmaciones.index')
            ->with('success', 'Confirmacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $confirmacione = Confirmacione::find($id)->delete();

        return redirect()->route('confirmaciones.index')
            ->with('success', 'Confirmacione deleted successfully');
    }
}
