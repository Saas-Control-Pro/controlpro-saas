@extends('layouts.admin')

@section('title', isset($producto) ? 'Editar Producto' : 'Nuevo Producto')

@section('content')

    <div
        class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm rounded-2xl p-6 max-w-2xl mx-auto">

        <h2 class="text-xl font-semibold mb-6">{{ isset($producto) ? 'Editar Producto' : 'Crear Producto' }}</h2>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 dark:bg-red-900/40 text-red-700 dark:text-red-400 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ isset($producto) ? route('productos.update', $producto) : route('productos.store') }}"
            enctype="multipart/form-data" class="space-y-5">
            @csrf
            @if (isset($producto))
                @method('PUT')
            @endif

            <!-- Nombre -->
            <div>
                <label class="block text-sm font-medium mb-2" for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $producto->nombre ?? '') }}"
                    required
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
            </div>

            <!-- Descripción -->
            <div>
                <label class="block text-sm font-medium mb-2" for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" rows="3"
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">{{ old('descripcion', $producto->descripcion ?? '') }}</textarea>
            </div>

            <!-- Precio Compra -->
            <div>
                <label class="block text-sm font-medium mb-2" for="precio_compra">Precio Compra</label>
                <input type="number" step="0.01" name="precio_compra" id="precio_compra"
                    value="{{ old('precio_compra', $producto->precio_compra ?? 0) }}"
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
            </div>

            <!-- Precio Venta -->
            <div>
                <label class="block text-sm font-medium mb-2" for="precio_venta">Precio Venta</label>
                <input type="number" step="0.01" name="precio_venta" id="precio_venta"
                    value="{{ old('precio_venta', $producto->precio_venta ?? '') }}" required
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
            </div>

            <!-- Unidad -->
            <div>
                <label class="block text-sm font-medium mb-2" for="unidad">Unidad</label>
                <input type="text" name="unidad" id="unidad"
                    value="{{ old('unidad', $producto->unidad ?? 'unidad') }}"
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
            </div>

            <!-- Estado -->
            <div>
                <label class="block text-sm font-medium mb-2" for="estado">Estado</label>
                <select name="estado" id="estado"
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
                    <option value="activo" {{ old('estado', $producto->estado ?? '') == 'activo' ? 'selected' : '' }}>Activo
                    </option>
                    <option value="inactivo" {{ old('estado', $producto->estado ?? '') == 'inactivo' ? 'selected' : '' }}>
                        Inactivo</option>
                </select>
            </div>

            <!-- Imagen -->
            <div>
                <label class="block text-sm font-medium mb-2" for="imagen">Imagen</label>
                <input type="file" name="imagen" id="imagen" accept="image/*"
                    class="w-full text-sm text-slate-500 dark:text-slate-400 file:border-0 file:bg-primary file:text-white file:px-4 file:py-2 file:rounded-lg file:cursor-pointer">

                @if (isset($producto) && $producto->imagen)
                    <div class="mt-2">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Imagen actual:</span>
                        <img src="{{ asset('storage/' . $producto->imagen) }}" alt="Imagen Producto"
                            class="w-32 h-32 object-cover mt-2 rounded">
                    </div>
                @endif
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-primary hover:bg-opacity-90 text-white font-semibold py-3 rounded-lg shadow-lg shadow-primary/20 transition-all">
                {{ isset($producto) ? 'Actualizar Producto' : 'Crear Producto' }}
            </button>

        </form>
    </div>

@endsection
