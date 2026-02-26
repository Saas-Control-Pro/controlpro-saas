<!DOCTYPE html>
<html lang="es" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ControlPro Delivery | Sistema Profesional para Paqueterías</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#1e3a8a', // Azul profesional
                        accent: '#f97316', // Naranja acción
                        darkbg: '#0f172a'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white dark:bg-darkbg text-slate-900 dark:text-white font-[Inter]">

    <!-- NAVBAR -->
    <nav
        class="fixed top-0 w-full bg-white/80 dark:bg-darkbg/80 backdrop-blur border-b border-slate-200 dark:border-white/10 z-50">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-primary rounded flex items-center justify-center text-white font-bold">
                    C
                </div>
                <span class="font-bold text-lg">ControlPro Delivery</span>
            </div>

            <div class="hidden md:flex gap-8 text-sm font-medium">
                <a href="#flujo" class="hover:text-accent transition">Flujo</a>
                <a href="#dashboard" class="hover:text-accent transition">Dashboard</a>
                <a href="#precios" class="hover:text-accent transition">Planes</a>
            </div>



            <!-- BOTÓN ACCIÓN -->

            <a href="/login" class="text-sm font-semibold hover:text-accent transition">
                Iniciar sesión
            </a>
            <a href="#demo" class="bg-accent text-white px-5 py-2 rounded font-semibold hover:scale-105 transition">
                Solicitar Demo
            </a>

        </div>
    </nav>


    <!-- HERO -->
    <section class="pt-32 pb-24 px-6 bg-gradient-to-b from-primary/20 to-transparent">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h1 class="text-5xl md:text-6xl font-black leading-tight mb-6">
                    El control total de tu
                    <span class="text-primary">empresa de paquetería</span>
                </h1>

                <p class="text-lg text-slate-600 dark:text-slate-400 mb-10">
                    Crea paquetes, imprime códigos únicos, asigna motoristas,
                    rastrea rutas y confirma entregas en tiempo real.
                </p>

                <div class="flex gap-4 flex-wrap">
                    <!-- CTA PRINCIPAL -->
                    <a href="#demo"
                        class="bg-accent text-white px-8 py-4 rounded-lg font-bold text-lg hover:scale-105 transition">
                        Ver demostración
                    </a>

                    <a href="#precios"
                        class="border-2 border-primary text-primary px-8 py-4 rounded-lg font-bold text-lg hover:bg-primary hover:text-white transition">
                        Ver Plan $29/mes
                    </a>
                </div>
            </div>

            <!-- TARJETA VISUAL -->
            <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-2xl p-8 border border-white/10">
                <div class="text-6xl text-center mb-4">📦</div>
                <p class="text-center font-bold text-lg">CPD-1048</p>
                <p class="text-center text-sm text-accent font-semibold mt-2">
                    En ruta 🚚
                </p>
            </div>

        </div>
    </section>


    <!-- PROBLEMA -->
    <section class="py-24 px-6 bg-slate-50 dark:bg-white/5">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">
                ¿Te pasa esto todos los días?
            </h2>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-white dark:bg-slate-900 p-8 rounded-xl shadow">
                    <h3 class="font-bold mb-3">Clientes llamando todo el día</h3>
                    <p class="text-sm text-slate-500">
                        “¿Ya salió mi paquete?”
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-900 p-8 rounded-xl shadow">
                    <h3 class="font-bold mb-3">No sabes quién entregó qué</h3>
                    <p class="text-sm text-slate-500">
                        Sin historial claro.
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-900 p-8 rounded-xl shadow">
                    <h3 class="font-bold mb-3">Paquetes perdidos</h3>
                    <p class="text-sm text-slate-500">
                        Y nadie sabe qué pasó.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- FLUJO -->
    <section id="flujo" class="py-24 px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black">
                Así funciona ControlPro
            </h2>
        </div>

        <div class="grid md:grid-cols-5 gap-6 text-center max-w-6xl mx-auto">

            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow">
                <div class="text-4xl mb-3 text-primary">1</div>
                <h3 class="font-bold">Crear paquete</h3>
            </div>

            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow">
                <div class="text-4xl mb-3 text-primary">2</div>
                <h3 class="font-bold">Imprimir código</h3>
            </div>

            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow">
                <div class="text-4xl mb-3 text-primary">3</div>
                <h3 class="font-bold">Asignar motorista</h3>
            </div>

            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow">
                <div class="text-4xl mb-3 text-primary">4</div>
                <h3 class="font-bold">Seguimiento en ruta</h3>
            </div>

            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow">
                <div class="text-4xl mb-3 text-primary">5</div>
                <h3 class="font-bold">Confirmar entrega</h3>
            </div>

        </div>
    </section>


    <!-- DASHBOARD -->
    <section id="dashboard" class="py-24 px-6 bg-slate-50 dark:bg-white/5">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black">
                Dashboard en tiempo real
            </h2>
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

            <div class="bg-white dark:bg-slate-900 p-8 rounded-xl shadow">
                <p class="text-sm text-slate-500">Paquetes hoy</p>
                <p class="text-4xl font-black text-primary">150</p>
            </div>

            <div class="bg-white dark:bg-slate-900 p-8 rounded-xl shadow">
                <p class="text-sm text-slate-500">Entregados</p>
                <p class="text-4xl font-black text-green-500">132</p>
            </div>

            <div class="bg-white dark:bg-slate-900 p-8 rounded-xl shadow">
                <p class="text-sm text-slate-500">Pendientes</p>
                <p class="text-4xl font-black text-accent">18</p>
            </div>

        </div>
    </section>


    <!-- PRECIO -->
    <section id="precios" class="py-24 px-6 text-center bg-primary text-white">
        <h2 class="text-4xl font-black mb-6">
            Plan Profesional
        </h2>

        <div class="text-6xl font-black mb-4">
            $29
        </div>

        <p class="mb-8">
            por mes
        </p>

        <a href="#demo"
            class="bg-accent text-white px-10 py-4 rounded-xl font-bold text-lg hover:scale-105 transition">
            Iniciar prueba piloto
        </a>
    </section>


    <!-- CTA FINAL -->
    <section id="demo" class="py-24 px-6 text-center">
        <h2 class="text-4xl font-black mb-6">
            Profesionaliza tu paquetería hoy
        </h2>

        <a href="https://wa.me/50300000000"
            class="bg-accent text-white px-10 py-4 rounded-xl font-extrabold text-lg hover:scale-105 transition">
            Solicitar Demo por WhatsApp
        </a>
    </section>


    <footer class="py-10 text-center text-sm text-slate-500 border-t border-slate-200 dark:border-white/10">
        © {{ date('Y') }} ControlPro Delivery.
    </footer>

</body>

</html>
