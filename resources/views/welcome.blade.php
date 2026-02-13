<!DOCTYPE html>

<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ControlPro ERP | Controla tu negocio en El Salvador</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1919e6",
                        "background-light": "#f6f6f8",
                        "background-dark": "#0a0a0f",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        .glass {
            background: rgba(10, 10, 15, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .hero-gradient {
            background: radial-gradient(circle at 50% 50%, rgba(25, 25, 230, 0.15) 0%, rgba(10, 10, 15, 0) 70%);
        }

        .card-glow:hover {
            border-color: rgba(25, 25, 230, 0.4);
            box-shadow: 0 0 20px rgba(25, 25, 230, 0.1);
        }

        .mesh-bg {
            background-image:
                radial-gradient(at 0% 0%, rgba(25, 25, 230, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(25, 25, 230, 0.03) 0px, transparent 50%);
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display selection:bg-primary/30">
    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 glass">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-primary rounded flex items-center justify-center">
                    <span class="text-white font-bold text-xl">C</span>
                </div>
                <span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">ControlPro</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-500 dark:text-slate-400">
                <a class="hover:text-primary transition-colors" href="#solucion">Características</a>
                <a class="hover:text-primary transition-colors" href="#kpis">Dashboard</a>
                <a class="hover:text-primary transition-colors" href="#precios">Precios</a>
                <a class="hover:text-primary transition-colors" href="#">Soporte</a>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}"
                    class="text-sm font-medium hover:text-primary transition-colors px-4 py-2">Iniciar
                    Sesión</a>
                <a href="{{ route('register') }}"
                    class="bg-primary text-white text-sm font-semibold px-5 py-2.5 rounded hover:bg-opacity-90 transition-all shadow-lg shadow-primary/20">
                    Crear Cuenta
                </a>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 px-6 overflow-hidden mesh-bg">
        <div class="hero-gradient absolute inset-0 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center relative z-10">
            <div>
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-wider mb-6">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    Hecho para PYMES en El Salvador
                </div>
                <h1 class="text-5xl lg:text-7xl font-extrabold tracking-tight mb-6 leading-[1.1]">
                    Controla tu negocio <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">sin
                        complicaciones.</span>
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 mb-8 max-w-xl leading-relaxed">
                    La plataforma todo-en-uno que digitaliza tu inventario, ventas y facturación. Diseñada para
                    emprendedores salvadoreños que buscan crecer con orden y claridad.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button
                        class="bg-primary text-white px-8 py-4 rounded-lg font-bold text-lg hover:scale-[1.02] transition-transform flex items-center justify-center gap-2">
                        Empezar gratis <span class="material-icons-round">arrow_forward</span>
                    </button>
                    <button
                        class="bg-white/5 dark:bg-white/5 border border-slate-200 dark:border-white/10 px-8 py-4 rounded-lg font-bold text-lg hover:bg-white/10 transition-colors">
                        Ver Demo
                    </button>
                </div>
                <div class="mt-10 flex items-center gap-4 text-slate-500 text-sm">
                    <div class="flex -space-x-2">
                        <div
                            class="w-8 h-8 rounded-full border-2 border-background-dark bg-slate-800 flex items-center justify-center overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="Portrait of a satisfied business owner"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD74dwyD6QOp1qOMxvT5KS7f1v2i75CqVMolH_lLi-vkmdmm9MMXp-id0Xyi5oPvZKJwF3AdbyucJMFBAOYdasXefJ096GuH9JqWgYZ_9NxJPUq9xcNlAWPh73F80yimMUotYvkuR7UznOjfLJQZQncAiP6rBKC9bZ07PlxA3K3_1Qif8aH-Wqbdchn0e3zHd7rPNAVEuxskZ-ZOwhyoajLAw-PxO4mL92KLPYa1KNnLnck-WYs0U2mj5LDdvZ1M3LBG1r7opclx0U" />
                        </div>
                        <div
                            class="w-8 h-8 rounded-full border-2 border-background-dark bg-slate-800 flex items-center justify-center overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="Portrait of a female entrepreneur"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8H7sMBqW5i07RWbozBxtMBzU-ljCpZFLxOO4sRiPLvvCuJjxy3z8IPSiJx2REiLlrL3cXxYGnwQedqht0jQu9KrKfx3hOAInZm-wDP2BPVlE1M30kv5E4zTCLm8iAcyigc0YKCe--g8GWCtxzkDZcIfUH0-MeMeQjGX3njW8JEY-zVCeuwRDedjQQ1TxgoCWE0_ByO5ck3uvCgFxIa2solOVOb9037uMuskLx7TFdFQqLVQYr7kegb52KZ3n_DQ4f-j1tOvsXh5o" />
                        </div>
                        <div
                            class="w-8 h-8 rounded-full border-2 border-background-dark bg-slate-800 flex items-center justify-center overflow-hidden text-[10px] font-bold">
                            +500
                        </div>
                    </div>
                    <span>Confianza de negocios locales en SS, Santa Ana y San Miguel</span>
                </div>
            </div>
            <div class="relative group">
                <div
                    class="absolute -inset-4 bg-primary/20 rounded-xl blur-3xl group-hover:bg-primary/30 transition-all">
                </div>
                <div
                    class="relative bg-slate-900 border border-white/10 rounded-xl shadow-2xl overflow-hidden transform lg:rotate-2 hover:rotate-0 transition-transform duration-700">
                    <div class="bg-slate-800/50 border-b border-white/5 p-3 flex items-center gap-2">
                        <div class="flex gap-1.5">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-500/20"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-500/20"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-green-500/20"></div>
                        </div>
                        <div class="flex-1 bg-white/5 rounded py-1 px-3 text-[10px] text-slate-500 text-center">
                            app.controlpro.sv/dashboard</div>
                    </div>
                    <img class="w-full opacity-90 group-hover:opacity-100 transition-opacity"
                        data-alt="Modern dark mode ERP dashboard interface"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCL3CIAXdHNkv95V6i4VkydOVmXcxAJCfnfK5i5v4ygw-TLMBktD_Q0bZzdI5giFicEguM00T4rp32B-LNdKLNW6sRqbDHSeb-EihMp-q_JdZVHL7sGOIZuKyI0AJvVmCNSoxX9CdzUIonaOpDsEqp5RD_lWOnhBUnS2uhq8sgyEwNPw-EQwjK6MCM6eR0MJFVm_6DT1NyNSoZosGU9aCav8D63WIt9Y8j-mDBp1ONLBQR53fRHxrllI36rYoBep8JRWDXgKg386EQ" />
                </div>
            </div>
        </div>
    </section>
    <!-- Problem Section -->
    <section class="py-24 px-6 bg-slate-50 dark:bg-white/[0.02]">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-bold mb-4">¿Tu negocio se siente fuera de control?</h2>
                <p class="text-slate-500">Administrar una empresa no debería ser una tortura de hojas de cálculo.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="p-8 rounded-xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/5 card-glow transition-all">
                    <div class="w-12 h-12 bg-red-500/10 text-red-500 rounded-lg flex items-center justify-center mb-6">
                        <span class="material-icons-round">grid_off</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Dependencia de Excel</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Fórmulas rotas, archivos duplicados y pérdida de
                        tiempo actualizando tablas manualmente cada noche.</p>
                </div>
                <div
                    class="p-8 rounded-xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/5 card-glow transition-all">
                    <div
                        class="w-12 h-12 bg-amber-500/10 text-amber-500 rounded-lg flex items-center justify-center mb-6">
                        <span class="material-icons-round">inventory_2</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Stock "A Ojo"</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">¿Cuánto tienes realmente? Pierde ventas por falta
                        de stock o dinero por exceso de productos estancados.</p>
                </div>
                <div
                    class="p-8 rounded-xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/5 card-glow transition-all">
                    <div
                        class="w-12 h-12 bg-orange-500/10 text-orange-500 rounded-lg flex items-center justify-center mb-6">
                        <span class="material-icons-round">trending_down</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Fugas de Dinero</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Sin reportes claros, es imposible saber dónde se
                        va el efectivo o cuáles son tus productos más rentables.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Solution Section -->
    <section class="py-24 px-6 border-y border-white/5" id="solucion">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="lg:w-1/2">
                    <h2 class="text-4xl font-extrabold mb-8 leading-tight">Diseñado para la agilidad de hoy</h2>
                    <div class="space-y-8">
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white">
                                <span class="material-icons-round">shopping_cart</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Punto de Venta (POS)</h4>
                                <p class="text-slate-500 text-sm">Vende en segundos desde cualquier dispositivo.
                                    Compatible con impresoras térmicas y lectores de barras.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white">
                                <span class="material-icons-round">precision_manufacturing</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Inventario Inteligente</h4>
                                <p class="text-slate-500 text-sm">Alertas automáticas de stock bajo y trazabilidad
                                    completa de entradas y salidas.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white">
                                <span class="material-icons-round">analytics</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Reportes en Tiempo Real</h4>
                                <p class="text-slate-500 text-sm">Visualiza tus márgenes de ganancia y rendimiento
                                    diario sin esperar al cierre de mes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                    <div class="space-y-4 pt-12">
                        <div class="bg-white/5 border border-white/10 p-6 rounded-xl">
                            <img class="rounded-lg mb-4 opacity-80"
                                data-alt="Customer paying with a card at a modern retail shop"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgR6Bq_U1JyHNjs80K7OGjFDFOJMni__YSm_iN4geV2wplf8y4vvQvlDKlGDES4NaylYCt7iWYK2bcGTAcaovee-W4QEZf-knJbR1m1BdtOLetg8SLN7p8_cuJOgbPwMXAFUeubiFn4UDf6EXPwQzuSz-uqJvypeXbJzZOGafqVIdtrYcr4bXWQwY3huujw2Fzr1gABHqhMA8_U8qMf1yKY7ZGYBEliMXKCdArLoygAo894YTkORA5KPID6d5nTiOXQUsGlXwjPMI" />
                            <p class="font-bold text-sm">Ventas Rápidas</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-6 rounded-xl">
                            <div class="h-2 w-full bg-white/10 rounded-full mb-2">
                                <div class="h-full bg-primary w-3/4 rounded-full"></div>
                            </div>
                            <p class="text-xs text-slate-500">Nivel de Stock: 75%</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-primary/20 border border-primary/30 p-6 rounded-xl">
                            <span class="text-2xl font-bold">$12,450</span>
                            <p class="text-xs opacity-70">Ingresos del Mes</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-6 rounded-xl">
                            <img class="rounded-lg mb-4 opacity-80"
                                data-alt="Organized warehouse shelves with products"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_lWqmHAWxziF8X_WFsolqONtzhsy6bPwNCgnSzNwpXF0Yaw7CGwCzJ-O125iCaz7sawDen9DGO4F6SyOeVYU6lVbeVMkx9ga25sp0ACqyKRZyLy9DlRI6V4uV5rhFDIi-zm8h9L7y9W-Vl7CjNJmhoAHs2HlLAvPsnaqz_XzGHLhM6IgmsXtgFWwp5yqcvTtw0m0ENrlwvK6BxqjoatH4Qtj9xl_R-n677WXQbEDOfblPQB6R-H2FjyRMOtIFLXP6dT34LV31BX0" />
                            <p class="font-bold text-sm">Control Total</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Preview Section (KPIs) -->
    <section class="py-24 px-6 bg-slate-900 overflow-hidden" id="kpis">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-primary font-bold text-sm uppercase tracking-widest mb-4 block">Visibilidad
                    total</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Tu negocio en un solo
                    vistazo</h2>
            </div>
            <div class="bg-[#050508] border border-white/10 rounded-2xl p-4 md:p-8 shadow-2xl relative">
                <div class="absolute top-0 right-0 p-8 opacity-10">
                    <span class="material-icons-round text-9xl">insights</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                    <div class="bg-white/5 p-6 rounded-xl border border-white/5">
                        <p class="text-slate-400 text-xs mb-1">Ventas Hoy</p>
                        <h3 class="text-3xl font-bold text-white">$1,420.50</h3>
                        <p class="text-emerald-400 text-xs mt-2 flex items-center gap-1">
                            <span class="material-icons-round text-sm">trending_up</span> +12% vs ayer
                        </p>
                    </div>
                    <div class="bg-white/5 p-6 rounded-xl border border-white/5">
                        <p class="text-slate-400 text-xs mb-1">Órdenes Pendientes</p>
                        <h3 class="text-3xl font-bold text-white">24</h3>
                        <p class="text-slate-400 text-xs mt-2 italic">8 listas para envío</p>
                    </div>
                    <div class="bg-white/5 p-6 rounded-xl border border-white/5">
                        <p class="text-slate-400 text-xs mb-1">Productos Bajo Stock</p>
                        <h3 class="text-3xl font-bold text-amber-500">3</h3>
                        <p class="text-amber-500/80 text-xs mt-2 flex items-center gap-1 underline cursor-pointer">
                            Revisar alertas</p>
                    </div>
                    <div class="bg-white/5 p-6 rounded-xl border border-white/5">
                        <p class="text-slate-400 text-xs mb-1">Clientes Nuevos</p>
                        <h3 class="text-3xl font-bold text-white">12</h3>
                        <p class="text-primary text-xs mt-2">Ver programa lealtad</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white/5 rounded-xl p-6 border border-white/5">
                        <div class="flex justify-between items-center mb-6">
                            <h4 class="font-bold text-white">Flujo de Caja (Últimos 7 días)</h4>
                            <span class="text-xs text-slate-500">Ver reporte</span>
                        </div>
                        <div class="h-48 flex items-end gap-3 justify-between">
                            <div class="w-full bg-primary/20 rounded-t h-[40%]"></div>
                            <div class="w-full bg-primary/20 rounded-t h-[60%]"></div>
                            <div class="w-full bg-primary/20 rounded-t h-[35%]"></div>
                            <div class="w-full bg-primary rounded-t h-[85%]"></div>
                            <div class="w-full bg-primary/20 rounded-t h-[50%]"></div>
                            <div class="w-full bg-primary/20 rounded-t h-[70%]"></div>
                            <div class="w-full bg-primary/20 rounded-t h-[45%]"></div>
                        </div>
                    </div>
                    <div class="bg-white/5 rounded-xl p-6 border border-white/5">
                        <h4 class="font-bold text-white mb-6">Últimas Transacciones</h4>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between pb-4 border-b border-white/5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-500">
                                        <span class="material-icons-round text-sm">person</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Juan Pérez</p>
                                        <p class="text-[10px] text-slate-500">Hace 5 min • POS #1</p>
                                    </div>
                                </div>
                                <span class="font-bold">$45.00</span>
                            </div>
                            <div class="flex items-center justify-between pb-4 border-b border-white/5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-purple-500/20 flex items-center justify-center text-purple-500">
                                        <span class="material-icons-round text-sm">store</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Restaurante El Sol</p>
                                        <p class="text-[10px] text-slate-500">Hace 12 min • Factura #A-23</p>
                                    </div>
                                </div>
                                <span class="font-bold">$125.20</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-orange-500/20 flex items-center justify-center text-orange-500">
                                        <span class="material-icons-round text-sm">inventory</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Proveedor ABC</p>
                                        <p class="text-[10px] text-slate-500">Hace 45 min • Gasto</p>
                                    </div>
                                </div>
                                <span class="font-bold text-red-400">-$210.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits Checklist -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16">
                <div>
                    <h2 class="text-3xl font-bold mb-6">¿Por qué elegir ControlPro?</h2>
                    <p class="text-slate-500 mb-8">No solo es software, es la ventaja competitiva que tu negocio
                        necesita para escalar.</p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="text-primary"><span class="material-icons-round">check_circle</span></div>
                            <span class="font-medium">100% en la Nube: Accede desde casa, oficina o móvil.</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="text-primary"><span class="material-icons-round">check_circle</span></div>
                            <span class="font-medium">Soporte Local en Español: Ayuda inmediata por WhatsApp.</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="text-primary"><span class="material-icons-round">check_circle</span></div>
                            <span class="font-medium">Seguridad Bancaria: Tus datos siempre encriptados.</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="text-primary"><span class="material-icons-round">check_circle</span></div>
                            <span class="font-medium">Migración Fácil: Importamos tus datos desde Excel gratis.</span>
                        </div>
                    </div>
                </div>
                <div class="bg-primary/5 rounded-2xl p-8 border border-primary/10">
                    <blockquote class="text-xl italic text-slate-700 dark:text-slate-300 leading-relaxed">
                        "Antes pasaba 3 horas diarias cerrando caja. Con ControlPro, lo hago en 5 minutos y ahora sé
                        exactamente cuánto estoy ganando."
                    </blockquote>
                    <div class="mt-8 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden bg-slate-800">
                            <img class="w-full h-full object-cover"
                                data-alt="Portrait of a smiling local business owner"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSbZQFyNuyHr_2wchCJ5ku9vyk25MB_EeYmH7yUws-sI8LIrPgIXfETnn8-RsJAxEKigsatE6gNKoqwmCunFYKjv4THAhGKKvgtwFssqVYUcEAk44UJTN04KMCp-tdncJVQ4-RD3-GtiG2trfF7gtRb5qCNOJBUFwOcBmYSRO7ff6CZWRN9SNyGc9wVuaHQCOxV2eGi8n9rH9g_o09pPlje34m3IyZQPoNwLAdZ8O9CnivfNzq4zJ7rOFTOpABSf1VS23kemqptbI" />
                        </div>
                        <div>
                            <p class="font-bold">María Rodríguez</p>
                            <p class="text-sm text-slate-500">Dueña de "Boutique Elegance", San Salvador</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section -->
    <section class="py-24 px-6 bg-slate-50 dark:bg-transparent" id="precios">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold mb-4">Planes que crecen contigo</h2>
                <p class="text-slate-500">Precios transparentes, sin cargos ocultos.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Basic Plan -->
                <div
                    class="bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-2xl p-8 card-glow transition-all">
                    <h3 class="text-xl font-bold mb-2">Básico</h3>
                    <p class="text-slate-500 text-sm mb-6">Ideal para emprendimientos que inician.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold">$15</span>
                        <span class="text-slate-500">/ mes</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-sm">
                            <span class="material-icons-round text-primary text-sm">done</span> 1 Usuario
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <span class="material-icons-round text-primary text-sm">done</span> Hasta 200 Productos
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <span class="material-icons-round text-primary text-sm">done</span> Reportes de ventas
                            básicos
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <span class="material-icons-round text-primary text-sm">done</span> Punto de Venta (POS)
                        </li>
                    </ul>
                    <button
                        class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold hover:bg-primary hover:text-white transition-all">Seleccionar
                        Plan</button>
                </div>
                <!-- Pro Plan -->
                <div
                    class="bg-slate-900 border-2 border-primary rounded-2xl p-8 shadow-2xl shadow-primary/10 relative overflow-hidden">
                    <div
                        class="absolute top-4 right-4 bg-primary text-white text-[10px] font-bold px-2 py-1 rounded uppercase tracking-tighter">
                        Más Popular</div>
                    <h3 class="text-xl font-bold mb-2 text-white">Profesional</h3>
                    <p class="text-slate-400 text-sm mb-6">Para negocios en expansión.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-white">$25</span>
                        <span class="text-slate-400">/ mes</span>
                    </div>
                    <ul class="space-y-4 mb-8 text-white">
                        <li class="flex items-center gap-3 text-sm">
                            <span class="material-icons-round text-primary text-sm">done</span> Usuarios Ilimitados
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <span class="material-icons-round text-primary text-sm">done</span> Productos Ilimitados
                        </li>

                        <li class="flex items-center gap-3 text-sm">
                            <span class="material-icons-round text-primary text-sm">done</span> Control de múltiples
                            sucursales
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <span class="material-icons-round text-primary text-sm">done</span> Soporte prioritario
                            24/7
                        </li>
                    </ul>
                    <button
                        class="w-full py-3 rounded-lg bg-primary text-white font-bold hover:scale-[1.02] transition-transform">Probar
                        14 días gratis</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Final CTA -->
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute inset-0 bg-primary/10 opacity-50"></div>
        <div
            class="max-w-4xl mx-auto relative z-10 bg-gradient-to-br from-primary to-blue-700 rounded-3xl p-12 text-center text-white shadow-2xl">
            <h2 class="text-4xl font-extrabold mb-6">¿Listo para transformar tu negocio?</h2>
            <p class="text-blue-100 mb-10 text-lg">Únete a cientos de negocios salvadoreños que ya profesionalizaron su
                operación.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="bg-white text-primary px-10 py-4 rounded-xl font-extrabold text-lg hover:bg-slate-100 transition-colors">Empezar
                    Ahora</button>
                <button
                    class="bg-primary-dark/20 border border-white/30 backdrop-blur px-10 py-4 rounded-xl font-bold text-lg hover:bg-white/10 transition-colors">Solicitar
                    Demo</button>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="py-16 px-6 border-t border-white/5 bg-background-dark">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-6 h-6 bg-primary rounded flex items-center justify-center">
                            <span class="text-white font-bold text-sm">C</span>
                        </div>
                        <span class="text-lg font-bold tracking-tight text-white">ControlPro</span>
                    </div>
                    <p class="text-slate-500 text-sm max-w-sm mb-6">La solución ERP definitiva para las pequeñas y
                        medianas empresas de El Salvador. Simplicidad, potencia y soporte local.</p>
                    <div class="flex gap-4">
                        <a class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary transition-colors"
                            href="#"><span class="material-icons-round text-sm">facebook</span></a>
                        <a class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary transition-colors"
                            href="#">
                            <svg class="w-4 h-4 fill-current" viewbox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Producto</h4>
                    <ul class="space-y-4 text-sm text-slate-500">
                        <li><a class="hover:text-primary transition-colors" href="#">Inventario</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Ventas POS</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Reportes</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Facturación</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Compañía</h4>
                    <ul class="space-y-4 text-sm text-slate-500">
                        <li><a class="hover:text-primary transition-colors" href="#">Sobre Nosotros</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Blog</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Términos</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="pt-8 border-t border-white/5 flex flex-col md:row items-center justify-between gap-4 text-slate-600 text-[10px] uppercase tracking-widest font-bold">
                <p>© 2024 ControlPro ERP El Salvador. Todos los derechos reservados.</p>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    Sistemas Operativos
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
