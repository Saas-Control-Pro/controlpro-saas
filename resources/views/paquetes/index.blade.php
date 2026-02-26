@extends('layouts.admin')

@section('title', 'Paquetes')

@section('content')

    <div class="space-y-8">

        <!-- HEADER -->
        <div>
            <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">Paquetes</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm">
                Listado completo de paquetes y su estado actual
            </p>
        </div>

        <!-- MÉTRICAS RÁPIDAS -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
                class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">Paquetes creados hoy</h3>
                <p class="text-2xl font-bold text-primary mt-2">0</p>
            </div>
            <div
                class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">En ruta</h3>
                <p class="text-2xl font-bold text-orange-500 mt-2">0</p>
            </div>
            <div
                class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">Entregados</h3>
                <p class="text-2xl font-bold text-green-500 mt-2">0</p>
            </div>
            <div
                class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
                <h3 class="text-sm text-slate-700 dark:text-slate-300">Pendientes / Incidencias</h3>
                <p class="text-2xl font-bold text-red-500 mt-2">0</p>
            </div>
        </div>

        <!-- TABLA DE PAQUETES -->
        <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded-2xl shadow-md border border-slate-200 dark:border-slate-800">
            <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-100 mb-4">Listado de Paquetes</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-800 text-sm">
                    <thead>
                        <tr
                            class="text-left text-slate-600 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">
                            <th class="pb-3">Código</th>
                            <th class="pb-3">Destinatario</th>
                            <th class="pb-3">Motorista</th>
                            <th class="pb-3">Estado</th>
                            <th class="pb-3">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-slate-100 dark:border-slate-800">
                            <td class="py-3 font-semibold text-primary">CPD-0001</td>
                            <td>Juan Pérez</td>
                            <td>Mario López</td>
                            <td class="text-orange-500 font-semibold">En ruta</td>
                            <td>25/02/2026</td>
                        </tr>
                        <tr class="border-b border-slate-100 dark:border-slate-800">
                            <td class="py-3 font-semibold text-primary">CPD-0002</td>
                            <td>Ana Martínez</td>
                            <td>Carlos Ruiz</td>
                            <td class="text-green-500 font-semibold">Entregado</td>
                            <td>25/02/2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
