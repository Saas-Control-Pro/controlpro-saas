<!DOCTYPE html>
<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión | ControlPro Delivery</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#1e3a8a", // Azul profesional
                        accent: "#f97316", // Naranja acción
                        "background-light": "#f8fafc",
                        "background-dark": "#0f172a",
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .bg-glow {
            background: radial-gradient(circle at 50% -20%, rgba(30, 58, 138, 0.25), transparent 70%);
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex items-center justify-center font-display antialiased">

    <!-- Glow decorativo -->
    <div class="fixed inset-0 z-0 bg-glow pointer-events-none"></div>

    <main class="relative z-10 w-full max-w-md px-6 py-12">

        <!-- Header -->
        <div class="flex flex-col items-center mb-10">

            <div
                class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-primary/30">
                <span class="material-icons-round text-white text-3xl">inventory_2</span>
            </div>

            <h1 class="text-3xl font-bold tracking-tight mb-2">
                Bienvenido de nuevo
            </h1>

            <p class="text-slate-500 dark:text-slate-400 text-center">
                Accede al panel de ControlPro Delivery
            </p>
        </div>

        <!-- Card -->
        <div
            class="bg-white dark:bg-[#111827] border border-slate-200 dark:border-slate-800 p-8 rounded-2xl shadow-2xl">

            @if (session('status'))
                <div class="mb-4 text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium mb-2">Correo electrónico</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-[#1f2937] border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/30 focus:border-primary outline-none transition-all">

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium mb-2">Contraseña</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 bg-slate-50 dark:bg-[#1f2937] border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/30 focus:border-primary outline-none transition-all">

                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember"
                            class="rounded border-slate-300 text-primary focus:ring-primary mr-2">
                        Recordarme
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-primary hover:text-accent transition">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>



                <!-- Submit (ACCIÓN EN NARANJA) -->
                <button type="submit"
                    class="w-full bg-accent hover:opacity-90 text-white font-semibold py-3 rounded-lg shadow-lg shadow-accent/30 active:scale-[0.98] transition-all">
                    Iniciar sesión
                </button>

            </form>
        </div>

        <!-- Footer -->
        <p class="mt-8 text-center text-sm text-slate-500 dark:text-slate-400">
            ¿No tienes acceso?
            <a href="https://wa.me/50300000000" class="font-semibold text-accent hover:opacity-80 ml-1 transition">
                Solicitar acceso
            </a>
        </p>

    </main>

</body>

</html>
