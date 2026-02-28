@extends('layouts.admin')

@section('title', 'crear Paquete')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 rounded shadow">

        <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">
            Registrar Nuevo Paquete
        </h2>

        <form action="{{ route('paquetes.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Vendedor</label>
                    <select name="vendedor_id" id="vendedor_id"
                        class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                        @foreach ($vendedores as $vendedor)
                            <option value="">{{ $vendedor->name }}</option>
                        @endforeach




                </div>

                <div>
                    <label class="block text-sm font-medium">Descripción</label>
                    <input type="text" name="descripcion"
                        class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white" required>
                </div>

                <div>
                    <label class="block text-sm font-medium">Precio</label>
                    <input type="number" step="0.01" name="precio"
                        class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white" required>
                </div>

                <div>
                    <label class="block text-sm font-medium">Nombre Destinatario</label>
                    <input type="text" name="nombre_destinatario"
                        class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white" required>
                </div>

                <div>
                    <label class="block text-sm font-medium">Teléfono Destinatario</label>
                    <input type="text" name="telefono_destinatario"
                        class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white" required>
                </div>

                <div class="col-span-2">
                    <label class="block text-sm font-medium">Dirección Destino</label>
                    <textarea name="direccion_destino" class="w-full mt-1 rounded border-gray-300 dark:bg-gray-700 dark:text-white"
                        required></textarea>
                </div>

            </div>

            <div class="mt-6 flex justify-end gap-3">
                <a href="{{ route('paquetes.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded">
                    Cancelar
                </a>

                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Guardar Paquete
                </button>
            </div>

        </form>

    </div>
@endsection
