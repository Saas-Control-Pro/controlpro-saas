@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white dark:bg-[#111114] p-6 rounded-xl shadow">
            <h3 class="text-sm text-gray-500 dark:text-slate-400">Ventas Hoy</h3>
            <p class="text-3xl font-bold text-green-600 mt-2">$0.00</p>
        </div>

        <div class="bg-white dark:bg-[#111114] p-6 rounded-xl shadow">
            <h3 class="text-sm text-gray-500 dark:text-slate-400">Compras</h3>
            <p class="text-3xl font-bold text-blue-600 mt-2">$0.00</p>
        </div>

        <div class="bg-white dark:bg-[#111114] p-6 rounded-xl shadow">
            <h3 class="text-sm text-gray-500 dark:text-slate-400">Productos en Stock</h3>
            <p class="text-3xl font-bold text-yellow-600 mt-2">0</p>
        </div>

        <div class="bg-white dark:bg-[#111114] p-6 rounded-xl shadow">
            <h3 class="text-sm text-gray-500 dark:text-slate-400">Clientes</h3>
            <p class="text-3xl font-bold text-purple-600 mt-2">0</p>
        </div>


    </div>

@endsection
