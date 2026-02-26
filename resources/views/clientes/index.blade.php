@extends('layouts.admin')

@section('title', 'Clientes')

@section('content')

    <div class="space-y-8">

        <div>
            <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">Clientes</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Clientes registrados y sus paquetes</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="bg-slate-50 dark:bg-slate-900 p-6 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">Total de clientes</h3>
                <p class="text-3xl font-bold text-primary mt-2">0</p>
            </div>
            <div
                class="bg-slate-50 dark:bg-slate-900 p-6 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">Con paquetes activos</h3>
                <p class="text-3xl font-bold text-orange-500 mt-2">0</p>
            </div>
            <div
                class="bg-slate-50 dark:bg-slate-900 p-6 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">Sin incidencias</h3>
                <p class="text-3xl font-bold text-green-500 mt-2">0</p>
            </div>
        </div>

        <div class="bg-slate-50 dark:bg-slate-900 p-6 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
            <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-100 mb-4">Listado de Clientes</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
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
                        <tr class="border-b border-slate-100 dark:border-slate-800">
                            <td class="py-3 font-semibold text-primary">Juan Pérez</td>
                            <td>juan@example.com</td>
                            <td>+503 6000 0000</td>
                            <td>2</td>
                        </tr>
                        <tr class="border-b border-slate-100 dark:border-slate-800">
                            <td class="py-3 font-semibold text-primary">Ana Martínez</td>
                            <td>ana@example.com</td>
                            <td>+503 7000 0000</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
