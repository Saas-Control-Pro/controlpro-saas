@extends('layouts.admin')

@section('title', 'Productos')

@section('content')

    <div
        class="bg-white dark:bg-slate-900
            border border-slate-200 dark:border-slate-800
            shadow-sm rounded-2xl transition-colors">

        {{-- Header --}}
        <div class="p-6 flex justify-between items-center
                border-b border-slate-200 dark:border-slate-800">

            <h2 class="text-lg font-semibold">
                Lista de Productos
            </h2>

            <a href="{{ route('productos.create') }}"
                class="bg-indigo-600 text-white px-4 py-2 rounded-xl
                   hover:bg-indigo-700 transition text-sm">
                + Nuevo Producto
            </a>
        </div>

        {{-- Tabla --}}
        <div class="p-6 overflow-x-auto">

            <table class="min-w-full text-sm text-left">

                <thead
                    class="bg-slate-100 dark:bg-slate-800
                           border-b border-slate-200 dark:border-slate-700">

                    <tr>
                        <th class="px-4 py-3 font-medium">Código</th>
                        <th class="px-4 py-3 font-medium">Imagen</th>
                        <th class="px-4 py-3 font-medium">Nombre</th>
                        <th class="px-4 py-3 font-medium">Descripción</th>
                        <th class="px-4 py-3 font-medium">Precio Venta</th>
                        <th class="px-4 py-3 font-medium">Estado</th>
                        <th class="px-4 py-3 text-right font-medium">Acciones</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-200 dark:divide-slate-800">

                    @forelse($productos as $producto)
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">

                            <td class="px-4 py-3">{{ $producto->codigo }}</td>

                            <td class="px-4 py-3">
                                @if ($producto->imagen)
                                    <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}"
                                        class="w-12 h-12 object-cover rounded">
                                @else
                                    <div
                                        class="w-12 h-12 bg-slate-200 dark:bg-slate-700 rounded flex items-center justify-center text-slate-500">
                                        <span class="material-icons-outlined text-lg">image</span>
                                    </div>
                                @endif

                            <td class="px-4 py-3 font-medium">
                                {{ $producto->nombre }}
                            </td>

                            <td class="px-4 py-3 font-medium">
                                {{ $producto->descripcion }}
                            </td>

                            <td class="px-4 py-3">
                                $ {{ number_format($producto->precio_venta, 2) }}
                            </td>

                            <td class="px-4 py-3">

                                <span
                                    class="px-3 py-1 text-xs rounded-full font-medium
                            {{ $producto->estado == 'activo'
                                ? 'bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-400'
                                : 'bg-red-100 text-red-700 dark:bg-red-900/40 dark:text-red-400' }}">
                                    {{ ucfirst($producto->estado) }}
                                </span>

                            </td>

                            <td class="px-4 py-3 text-right space-x-4">

                                <a href="{{ route('productos.edit', $producto) }}"
                                    class="text-indigo-600 dark:text-indigo-400 hover:underline">
                                    Editar
                                </a>

                                <form action="{{ route('productos.destroy', $producto) }}" method="POST"
                                    class="inline form-eliminar">
                                    @csrf
                                    @method('DELETE')

                                    <button type="button"
                                        class="text-red-600 dark:text-red-400 hover:underline btn-eliminar">
                                        Desactivar
                                    </button>
                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="px-4 py-8 text-center text-slate-500 dark:text-slate-400">
                                No hay productos registrados.
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>

            {{-- Paginación --}}
            <div class="mt-6">
                {{ $productos->links() }}
            </div>

        </div>

    </div>

@endsection

@push('scripts')
    <script>
        // tu código SweetAlert aquí
        document.addEventListener('DOMContentLoaded', function() {

            const esDark = document.documentElement.classList.contains('dark');

            document.querySelectorAll('.btn-eliminar').forEach(function(boton) {

                boton.addEventListener('click', function() {

                    const form = this.closest('form');

                    Swal.fire({
                        title: '¿Desactivar producto?',
                        text: "El producto no podrá usarse en nuevas ventas.",
                        icon: 'warning',
                        background: esDark ? '#0f172a' : '#ffffff',
                        color: esDark ? '#e2e8f0' : '#0f172a',
                        showCancelButton: true,
                        confirmButtonColor: '#ef4444',
                        cancelButtonColor: '#64748b',
                        confirmButtonText: 'Sí, desactivar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });

                });

            });

        });
    </script>
@endpush
