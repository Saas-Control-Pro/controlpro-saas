@extends('layouts.admin')

@section('title', 'Motoristas')

@section('content')

    <div class="space-y-8">

        <div>
            <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">Motoristas</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Estado de motoristas y paquetes asignados</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">Motoristas activos</h3>
                <p class="text-2xl font-bold text-orange-500 mt-2">0</p>
            </div>
            <div
                class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">En ruta</h3>
                <p class="text-2xl font-bold text-orange-500 mt-2">0</p>
            </div>
            <div
                class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">Disponibles</h3>
                <p class="text-2xl font-bold text-green-500 mt-2">0</p>
            </div>
        </div>

        <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
            <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-100 mb-4">Listado de Motoristas</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-800 text-sm">
                    <thead>
                        <tr
                            class="text-left text-slate-600 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">
                            <th class="pb-3">Nombre</th>
                            <th class="pb-3">Paquetes asignados</th>
                            <th class="pb-3">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-slate-100 dark:border-slate-800">
                            <td class="py-3 font-semibold text-primary">Mario López</td>
                            <td>3</td>
                            <td class="text-orange-500 font-semibold">En ruta</td>
                        </tr>
                        <tr class="border-b border-slate-100 dark:border-slate-800">
                            <td class="py-3 font-semibold text-primary">Carlos Ruiz</td>
                            <td>2</td>
                            <td class="text-green-500 font-semibold">Disponible</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
