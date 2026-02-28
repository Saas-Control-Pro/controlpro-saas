<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PaqueteController extends Controller
{
    public function index()
    {
        $paquetes = Paquete::where('empresa_id', Auth::user()->empresa_id)
                            ->latest()
                            ->paginate(15);

        return view('paquetes.index', compact('paquetes'));
    }

    public function create()
    {
       $vendedores = User::where('rol','=','cliente')->get();
        return view('paquetes.create',compact('vendedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'nombre_destinatario' => 'required|string|max:255',
            'telefono_destinatario' => 'required|string|max:20',
            'direccion_destino' => 'required|string',
        ]);

        // Generar código automático
        $ultimo = Paquete::latest()->first();
        $numero = $ultimo ? $ultimo->id + 1 : 1;
        $codigo = 'PK-' . str_pad($numero, 5, '0', STR_PAD_LEFT);

        Paquete::create([
            'codigo' => $codigo,
            'empresa_id' => Auth::user()->empresa_id,
            'sucursal_id' => Auth::user()->sucursal_id,
            'usuario_id' => Auth::id(),
            'estado' => 'Nuevo',
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'nombre_destinatario' => $request->nombre_destinatario,
            'telefono_destinatario' => $request->telefono_destinatario,
            'direccion_destino' => $request->direccion_destino,
        ]);

        return redirect()->route('paquetes.index')
                         ->with('success', 'Paquete creado correctamente');
    }

    public function show($id)
    {
        $paquete = Paquete::where('empresa_id', Auth::user()->empresa_id)
                          ->findOrFail($id);

        return view('paquetes.show', compact('paquete'));
    }

    public function edit($id)
    {
        $paquete = Paquete::where('empresa_id', Auth::user()->empresa_id)
                          ->findOrFail($id);

        return view('paquetes.edit', compact('paquete'));
    }

    public function update(Request $request, $id)
    {
        $paquete = Paquete::where('empresa_id', Auth::user()->empresa_id)
                          ->findOrFail($id);

        $request->validate([
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        $paquete->update($request->all());

        return redirect()->route('paquetes.index')
                         ->with('success', 'Paquete actualizado');
    }

    public function destroy($id)
    {
        $paquete = Paquete::where('empresa_id', Auth::user()->empresa_id)
                          ->findOrFail($id);

        $paquete->delete();

        return redirect()->route('paquetes.index')
                         ->with('success', 'Paquete eliminado');
    }
}
