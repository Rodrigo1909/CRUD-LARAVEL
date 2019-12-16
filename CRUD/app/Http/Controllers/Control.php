<?php

namespace App\Http\Controllers;
use App\BD;

use Illuminate\Http\Request;

class Control extends Controller
{
    /**
     * index
     *
     */
    public function index()
    {

    }

    /**
     * index
     *
     */
    public function store(Request $request)
    {
        BD::create($request->all());

        return redirect()->route('root');
    }

    /**
     * update
     *
     */
    public function actualizar(Request $request, $id)
    {
        $BD  = BD::find($id);
        $BD ->nombre = $request->input('nombre');
        $BD ->apellidoP = $request->input('apellidoP');
        $BD ->apellidoM = $request->input('apellidoM');
        $BD ->telefono = $request->input('telefono');
        $BD ->correo_electronico = $request->input('correo_electronico');
        $BD ->edad = $request->input('edad');
        $BD ->save();

        return redirect()->route('root');
    }

    /**
     * Delete
     *
     */
    public function eliminar(Request $request, $id)
    {
        $BD = BD::find($id);
        $BD->delete();

        return redirect()->route('root');
    }

    /**
     * PDF
     *
     */
    public function pdf(Request $request, $id)
    {
        $niko = Niko::find($id);

        return redirect()->route('root');
    }
}
