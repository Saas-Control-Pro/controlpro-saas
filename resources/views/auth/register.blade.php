<!DOCTYPE html>
<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro | ControlPro</title>

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
                Crea tu cuenta
            </h1>

            <p class="text-slate-500 dark:text-slate-400 text-center">
                Empieza a gestionar tu empresa con ControlPro
            </p>
        </div>

        <!-- Card -->
        <div class="bg-white dark:bg-[#111114] border border-slate-200 dark:border-slate-800 p-8 rounded-xl shadow-2xl">

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Empresa -->
                <div>
                    <label class="block text-sm font-medium mb-2">Empresa</label>
                    <input type="text" name="empresa_nombre" value="{{ old('empresa_nombre') }}" required
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">

                    @error('empresa_nombre')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Nombre -->
                <div>
                    <label class="block text-sm font-medium mb-2">Nombre Completo</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">

                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium mb-2">Correo Electrónico</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
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

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-medium mb-2">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-[#18181b] border border-slate-200 dark:border-slate-800 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-primary hover:bg-opacity-90 text-white font-semibold py-3 rounded-lg shadow-lg shadow-primary/20 active:scale-[0.98] transition-all">
                    Crear mi cuenta
                </button>
            </form>

        </div>

        <!-- Footer -->
        <p class="mt-8 text-center text-sm text-slate-500 dark:text-slate-400">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}" class="font-semibold text-primary hover:text-opacity-80 ml-1">
                Inicia sesión
            </a>
        </p>

    </main>

</body>

</html>
