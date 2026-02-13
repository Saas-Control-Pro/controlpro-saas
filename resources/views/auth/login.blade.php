<!DOCTYPE html>
<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión | ControlPro</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#1919e6",
                        "background-light": "#f6f6f8",
                        "background-dark": "#0a0a0c",
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
            background: radial-gradient(circle at 50% -20%, rgba(25, 25, 230, 0.15), transparent 70%);
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex items-center justify-center font-display antialiased">

    <div class="fixed inset-0 z-0 bg-glow pointer-events-none"></div>

    <main class="relative z-10 w-full max-w-md px-6 py-12">

        <!-- Header -->
        <div class="flex flex-col items-center mb-10">
            <div
                class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
                <span class="material-icons-round text-white text-3xl">layers</span>
            </div>

            <h1 class="text-3xl font-bold tracking-tight mb-2">
                Bienvenido de nuevo
            </h1>

            <p class="text-slate-500 dark:text-slate-400 text-center">
                Inicia sesión para continuar en ControlPro
            </p>
        </div>

        <!-- Card -->
        <div class="bg-white dark:bg-[#111114] border border-slate-200 dark:border-slate-800 p-8 rounded-xl shadow-2xl">

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium mb-2">Correo Electrónico</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium mb-2">Contraseña</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">

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
                        <a href="{{ route('password.request') }}" class="text-primary hover:underline">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-primary hover:bg-opacity-90 text-white font-semibold py-3 rounded-lg shadow-lg shadow-primary/20 active:scale-[0.98] transition-all">
                    Iniciar sesión
                </button>

            </form>
        </div>

        <!-- Footer -->
        <p class="mt-8 text-center text-sm text-slate-500 dark:text-slate-400">
            ¿No tienes cuenta?
            <a href="{{ route('register') }}" class="font-semibold text-primary hover:text-opacity-80 ml-1">
                Crear cuenta
            </a>
        </p>

    </main>

</body>

</html>
