<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['empleados'] = empleado::paginate(5);
        return view('empleados.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$DatosEmpleado = request()->all();*/
        $DatosEmpleado = request()->except('_token');
        empleado::insert($DatosEmpleado);

        /* para q la foto no sea temporal en la DB*/
        if ($request->hasFile('foto')) {
            $DatosEmpleado['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        return response()->json($DatosEmpleado);
    }

    /**
     * Display the specified resource.
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empleado = empleado::findOrFail($id);
        return view('empleados.editar', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $DatosEmpleado = request()->except('_token', '_method');
        empleado::where('id', '=', $id)->update($DatosEmpleado);
        return redirect('empleados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        empleado::destroy($id);
        return redirect('empleados');
    }
}
