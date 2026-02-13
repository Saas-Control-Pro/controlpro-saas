<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
class ProductoController extends Controller
{
public function index()
{
    $empresaId = auth()->user()->empresa_id;

    $productos = Producto::where('empresa_id', $empresaId)
        ->latest()
        ->paginate(10);

    return view('productos.index', compact('productos'));
}

public function create()
{
    return view('productos.create');
}

public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'precio_venta' => 'required|numeric|min:0',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Generar código automático
    $ultimo = Producto::latest()->first();
    $numero = $ultimo ? intval(substr($ultimo->codigo, -5)) + 1 : 1;
    $codigo = 'PROD-' . str_pad($numero, 5, '0', STR_PAD_LEFT);

    // Crear producto con empresa_id
    $producto = Producto::create([
        'empresa_id' => auth()->user()->empresa_id,
        'codigo' => $codigo,
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'precio_compra' => $request->precio_compra ?? 0,
        'precio_venta' => $request->precio_venta,
        'unidad' => $request->unidad ?? 'unidad',
        'estado' => $request->estado ?? 'activo',
    ]);

    // Si subieron imagen
    if ($request->hasFile('imagen')) {
        $path = $request->file('imagen')->store('productos', 'public');
        $producto->imagen = $path;
        $producto->save();
    }

    return redirect()->route('productos.index')
        ->with('success', 'Producto creado correctamente.');
}

public function edit(Producto $producto)
{
    return view('productos.edit', compact('producto'));
}

public function update(Request $request, Producto $producto)
{
    // Verificar que pertenece a la empresa
    if ($producto->empresa_id != auth()->user()->empresa_id) {
        abort(403);
    }

    $request->validate([
        'nombre' => 'required',
        'precio_venta' => 'required|numeric|min:0',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    $producto->update([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'precio_compra' => $request->precio_compra ?? 0,
        'precio_venta' => $request->precio_venta,
        'unidad' => $request->unidad ?? 'unidad',
        'estado' => $request->estado ?? $producto->estado,
    ]);

    if ($request->hasFile('imagen')) {
        if ($producto->imagen && \Storage::disk('public')->exists($producto->imagen)) {
            \Storage::disk('public')->delete($producto->imagen);
        }
        $path = $request->file('imagen')->store('productos', 'public');
        $producto->imagen = $path;
        $producto->save();
    }

    return redirect()->route('productos.index')->with('success', 'Producto actualizado.');
}



public function destroy(Producto $producto)
{
  $producto->update([
        'estado' => 'inactivo'
    ]);

    return redirect()->route('productos.index')
        ->with('success', 'Producto desactivado correctamente.');
}

}
