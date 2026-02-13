<!DOCTYPE html>
<html lang="es" class="{{ auth()->user()->theme === 'dark' ? 'dark' : '' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | ERP</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">




</head>

<body
    class="bg-slate-50 dark:bg-slate-950
             text-slate-900 dark:text-slate-100
             font-sans transition-colors duration-300">

    <div class="flex h-screen overflow-hidden">

        {{-- SIDEBAR --}}
        <aside
            class="w-20 lg:w-64
                  border-r border-slate-200 dark:border-slate-800
                  bg-white/70 dark:bg-slate-900/60
                  backdrop-blur-xl
                  flex flex-col items-center lg:items-stretch py-8 transition-all duration-300">

            <div class="px-6 mb-12 flex items-center gap-3">
                <div class="w-9 h-9 bg-indigo-600 rounded-xl flex items-center justify-center text-white">
                    <span class="material-icons-outlined text-lg">bolt</span>
                </div>
                <span class="hidden lg:block font-bold text-xl tracking-tight">

                    {{ auth()->user()->empresa->nombre ?? '' }}
                    <span class="text-indigo-600">.</span>
                </span>
            </div>

            <nav class="flex-1 px-4 space-y-2 text-sm">

                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-4 px-4 py-3 rounded-xl
                      hover:bg-indigo-600/10 hover:text-indigo-600 transition">
                    <span class="material-icons-outlined">dashboard</span>
                    <span class="hidden lg:block">Dashboard</span>
                </a>

                <a href="{{ route('productos.index') }}"
                    class="flex items-center gap-4 px-4 py-3 rounded-xl
                      hover:bg-indigo-600/10 hover:text-indigo-600 transition">
                    <span class="material-icons-outlined">inventory_2</span>
                    <span class="hidden lg:block">Productos</span>
                </a>

            </nav>

            {{-- Usuario --}}
            <div class="px-4 mt-auto">

                <div class="mt-6 flex items-center gap-3 px-2">

                    <div
                        class="w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>

                    <div class="hidden lg:block overflow-hidden">
                        <p class="text-sm font-semibold truncate">
                            {{ auth()->user()->name }}
                        </p>
                        <p class="text-xs text-slate-500 truncate">
                            {{ auth()->user()->empresa->nombre ?? '' }}
                        </p>
                    </div>

                </div>

            </div>

        </aside>


        {{-- MAIN --}}
        <main class="flex-1 flex flex-col overflow-y-auto">

            {{-- HEADER --}}
            <header
                class="h-20 border-b border-slate-200 dark:border-slate-800
                       flex items-center justify-between px-8
                       bg-white/70 dark:bg-slate-900/60
                       backdrop-blur-xl sticky top-0 z-10">

                <h1 class="text-lg font-semibold">
                    @yield('title')
                </h1>

                <div class="flex items-center gap-6">

                    {{-- Theme Switch --}}
                    <form method="POST" action="{{ route('cambiar.tema') }}">
                        @csrf
                        <input type="hidden" name="theme"
                            value="{{ auth()->user()->theme === 'dark' ? 'light' : 'dark' }}">
                        <button type="submit"
                            class="w-10 h-10 rounded-xl flex items-center justify-center
                               hover:bg-indigo-600/10 transition">
                            <span class="material-icons-outlined">
                                {{ auth()->user()->theme === 'dark' ? 'light_mode' : 'dark_mode' }}
                            </span>
                        </button>
                    </form>

                    {{-- Logout --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="px-4 py-2 text-sm text-red-500 hover:bg-red-500/10 rounded-xl transition">
                            Cerrar sesión
                        </button>
                    </form>

                </div>

            </header>


            {{-- CONTENT --}}
            <div class="p-8 space-y-8">
                @yield('content')
            </div>

        </main>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')

</body>

</html>
