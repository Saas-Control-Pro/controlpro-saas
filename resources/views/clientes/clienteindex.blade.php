@extends('layouts.admin')

@section('title', 'Clientes')

@section('content')

    <div class="space-y-8">

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">



            <a href="{{ route('paquetes.create') }}"
                class="inline-flex items-center gap-2
          bg-orange-500 hover:bg-orange-600

          px-5 py-2.5 rounded-xl shadow-md transition font-semibold">

                <span class="material-icons-outlined text-sm">add</span>
                Nuevo Paquete
            </a>
        </div>


        <!-- BUSCADOR Y FILTROS -->
        <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl shadow border border-slate-200 dark:border-slate-700">

            <form method="GET" action="{{ route('paquetes.index') }}" class="flex flex-col md:flex-row gap-4">

                <!-- Buscador -->
                <div class="flex-1">
                    <input type="text" name="search" placeholder="Buscar por cliente" value="{{ request('search') }}"
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-300
                              dark:border-slate-700 dark:bg-slate-900
                              dark:text-slate-100 focus:ring-2 focus:ring-orange-500 focus:outline-none">
                </div>

                <!-- Filtro Estado -->
                <div>
                    <select name="estado"
                        class="px-4 py-2.5 rounded-xl border border-slate-300
                               dark:border-slate-700 dark:bg-slate-900
                               dark:text-slate-100 focus:ring-2 focus:ring-orange-500">
                        <option value="">Todos los estados</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="en_ruta">En ruta</option>
                        <option value="entregado">Entregado</option>
                        <option value="incidencia">Incidencia</option>
                    </select>
                </div>
                <button type="submit"
                    class="inline-flex items-center justify-center
           bg-orange-500 hover:bg-orange-600
            font-semibold text-sm
           px-4 py-2
           rounded-lg
           shadow-md hover:shadow-lg
           ring-1 ring-orange-400/30
           transition-all duration-200">
                    Buscar
                </button>

            </form>

        </div>



        <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
            <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-100 mb-4">Listado de Clientes</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-800 text-sm">
                    <thead>
                        <tr
                            class="text-left text-slate-600 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">
                            <th class="pb-3">Nombre</th>
                            <th class="pb-3">Correo</th>
                            <th class="pb-3">Teléfono</th>
                            <th class="pb-3">Paquetes activos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="block md:hidden space-y-3">
                            @foreach ($vendedores as $vendedor)
                                <tr class="border-b border-slate-100 dark:border-slate-800">
                                    <td>{{ $vendedor->name }}</td>
                                    <td>{{ $vendedor->email }}</td>
                                    <td>{{ $vendedor->telefono }}</td>
                                    <a href="http://" class="text-black">
                                        Ver</a>
                                </tr>
                            @endforeach


                        </div>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
