<x-guest-layout>

    <div class="w-full max-w-md mx-auto bg-white shadow-xl rounded-2xl p-8">

        <!-- Título -->
        <div class="mb-6 text-center">
            <h2 class="text-2xl font-bold text-gray-800">
                Recuperar contraseña
            </h2>
            <p class="text-sm text-gray-500 mt-2">
                Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu acceso.
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" value="Correo electrónico" />
                <x-text-input id="email" class="block mt-1 w-full rounded-lg" type="email" name="email"
                    :value="old('email')" required autofocus placeholder="ejemplo@empresa.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Botones -->
            <div class="mt-6 flex items-center justify-between">
                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                    Volver al inicio
                </a>

                <button type="submit"
                    class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
                    Enviar enlace
                </button>
            </div>
        </form>

    </div>

</x-guest-layout>
