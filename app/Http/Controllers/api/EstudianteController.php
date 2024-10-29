<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Estudiante::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->input();
        $e = Estudiante::create($inputs);
        return response()->json([

            'Data' => $e,
            'Mensaje' => "Datos guardados con exito",
            'Status' => 201,

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $e  = Estudiante::find($id);
        if (isset($e)) {
            return response()->json([

                'Data' => $e,
                'Mensaje' => "Datos encontrados",
                'Status' => 201,

            ]);
        } else {
            return response()->json([

                'error' => true,
                'Mensaje' => "No hay datos para esta busqueda",
                'Status' => 201,

            ]);
        };
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $e  = Estudiante::find($id);
        if (isset($e)) {
            $e->nombre = $request->nombre;
            $e->apellido = $request->apellido;
            $e->foto = $request->foto;

            if ($e->save()) {

                return response()->json([

                    'Data' => $e,
                    'Mensaje' => "Actualizacion exitosa",
                    'Status' => 201,

                ]);
            }
        } else {
            return response()->json([

                'error' => true,
                'Mensaje' => "No existe el estudiante",
                'Status' => 201,

            ]);
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $e  = Estudiante::find($id);

        if (isset($e)) {
            $res = Estudiante::destroy($id);

            if ($res) {
                return response()->json([

                    'Data' => $e,
                    'Mensaje' => "Datos eliminados con exito",
                    'Status' => 201,

                ]);
            }
        } else {
            return response()->json([

                'error' => true,
                'Mensaje' => "No existe el estudiante",
                'Status' => 201,

            ]);
        };
    }
}
