@extends('layouts.admin')

@section('title', 'Editar Producto')

@section('content')

    <div class="max-w-3xl">

        <div
            class="bg-white dark:bg-slate-900
                border border-slate-200 dark:border-slate-800
                rounded-2xl p-8 shadow-sm">

            <form action="{{ route('productos.update', $producto) }}" method="POST" class="space-y-6"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Nombre --}}
                <div>
                    <label class="block text-sm font-medium mb-2">Nombre *</label>
                    <input type="text" name="nombre"
                        class="w-full rounded-xl border border-slate-300 dark:border-slate-700
                           bg-white dark:bg-slate-800
                           px-4 py-2 focus:ring-2 focus:ring-indigo-600 outline-none"
                        value="{{ old('nombre', $producto->nombre) }}" required>
                </div>

                {{-- descripcion --}}

                <div>
                    <label class="block text-sm font-medium mb-2">Descripción</label>
                    <textarea name="descripcion" rows="3"
                        class="w-full rounded-xl border border-slate-300 dark:border-slate-700
                            bg-white dark:bg-slate-800
                            px-4 py-2 focus:ring-2 focus:ring-indigo-600 outline-none">{{ old('descripcion', $producto->descripcion) }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1" for="imagen">Imagen del Producto</label>
                    <input type="file" name="imagen" id="imagen"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-slate-900 dark:text-white">
                </div>

                @if (isset($producto) && $producto->imagen)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}"
                            class="w-32 h-32 object-cover rounded-lg">
                    </div>
                @endif


                {{-- Precio Venta --}}
                <div>
                    <label class="block text-sm font-medium mb-2">Precio Venta *</label>
                    <input type="number" step="0.01" name="precio_venta"
                        class="w-full rounded-xl border border-slate-300 dark:border-slate-700
                           bg-white dark:bg-slate-800
                           px-4 py-2 focus:ring-2 focus:ring-indigo-600 outline-none"
                        value="{{ old('precio_venta', $producto->precio_venta) }}" required>
                </div>

                {{-- Precio Compra --}}
                <div>
                    <label class="block text-sm font-medium mb-2">Precio Compra</label>
                    <input type="number" step="0.01" name="precio_compra"
                        class="w-full rounded-xl border border-slate-300 dark:border-slate-700
                           bg-white dark:bg-slate-800
                           px-4 py-2 focus:ring-2 focus:ring-indigo-600 outline-none"
                        value="{{ old('precio_compra', $producto->precio_compra) }}">
                </div>

                {{-- Unidad --}}
                <div>
                    <label class="block text-sm font-medium mb-2">Unidad</label>
                    <input type="text" name="unidad"
                        class="w-full rounded-xl border border-slate-300 dark:border-slate-700
                           bg-white dark:bg-slate-800
                           px-4 py-2 focus:ring-2 focus:ring-indigo-600 outline-none"
                        value="{{ old('unidad', $producto->unidad) }}">
                </div>

                {{-- Estado --}}
                <div>
                    <label class="block text-sm font-medium mb-2">Estado</label>
                    <select name="estado"
                        class="w-full rounded-xl border border-slate-300 dark:border-slate-700
                           bg-white dark:bg-slate-800
                           px-4 py-2 focus:ring-2 focus:ring-indigo-600 outline-none">
                        <option value="activo" {{ $producto->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                        <option value="inactivo" {{ $producto->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </div>

                {{-- Botones --}}
                <div class="flex justify-end gap-4 pt-4">
                    <a href="{{ route('productos.index') }}"
                        class="px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-700">
                        Cancelar
                    </a>

                    <button type="submit"
                        class="px-6 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 transition">
                        Actualizar
                    </button>
                </div>

            </form>

        </div>

    </div>

@endsection
