<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_ENV['APP_NAME'] ?? 'PHP Pure' ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@400;500;600;700&display=swap');
        :root {
            --bg: #ffffff;
            --fg: #0b0b0f;
            --muted: #6e6e73;
            --muted-2: #86868b;
            --line: #e5e5ea;
            --line-strong: #0b0b0f;
            --surface: #ffffff;
            --surface-2: #f5f5f7;
        }
        * { font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Display', 'Segoe UI', sans-serif; }
        body { background-color: var(--bg); color: var(--fg); }
        .apple-border { border: 1px solid var(--line); }
        .apple-border-thick { border: 3px solid var(--line-strong); }
        .apple-bg { background-color: var(--surface); }
        .hover-dark:hover { background-color: var(--surface-2); }
        a { transition: background-color 200ms ease, color 200ms ease, border-color 200ms ease, transform 200ms ease; }
        a:focus-visible { outline: 2px solid var(--fg); outline-offset: 4px; border-radius: 12px; }
        .section-divide { border-bottom: 1px solid var(--line); }
    </style>
</head>
<body class="bg-white text-black antialiased">
    <header class="section-divide sticky top-0 z-50 backdrop-blur bg-white/80 supports-[backdrop-filter]:bg-white/70">
        <nav class="max-w-7xl mx-auto px-8 py-6 flex justify-between items-center">
            <div class="text-2xl font-bold tracking-tight">
                <?= $_ENV['APP_NAME'] ?? 'PHP Pure' ?>
            </div>
            <ul class="flex gap-2 sm:gap-4 font-medium text-sm">
                <li><a href="#" class="hover-dark px-4 py-2 rounded-xl transition">Home</a></li>
            </ul>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-8">
        <!-- Hero Section -->
        <section class="py-32 section-divide">
            <div class="max-w-4xl">
                <h1 class="text-7xl md:text-8xl font-bold tracking-tight mb-8 leading-none">
                    <?= $_ENV['APP_NAME'] ?? 'PHP Pure' ?>
                </h1>
                <p class="text-xl md:text-2xl text-black/70 font-light mb-12 leading-relaxed max-w-2xl">
                    Um painel administrativo elegante e funcional. Simples por design.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="#features" class="apple-border px-6 py-4 font-medium text-sm hover-dark rounded-2xl hover:translate-y-[-1px] active:translate-y-[0px] transition">
                        Conhecer Mais
                    </a>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features" class="py-32 section-divide">
            <h2 class="text-5xl md:text-6xl font-bold tracking-tight mb-20">Features</h2>
            <div class="space-y-8">
                <div class="apple-border-thick p-10 rounded-3xl bg-white shadow-[0_1px_0_rgba(11,11,15,0.06)]">
                    <h3 class="text-2xl font-semibold mb-3">Painel Administrativo</h3>
                    <p class="text-black/70 font-light text-lg">Interface intuitiva e clara para gerenciar conteúdo sem complicações.</p>
                </div>
                <div class="apple-border-thick p-10 rounded-3xl bg-white shadow-[0_1px_0_rgba(11,11,15,0.06)]">
                    <h3 class="text-2xl font-semibold mb-3">Arquitetura Limpa</h3>
                    <p class="text-black/70 font-light text-lg">MVC bem estruturado. Controllers, Models, Services organizados logicamente.</p>
                </div>
                <div class="apple-border-thick p-10 rounded-3xl bg-white shadow-[0_1px_0_rgba(11,11,15,0.06)]">
                    <h3 class="text-2xl font-semibold mb-3">Performance</h3>
                    <p class="text-black/70 font-light text-lg">Flight framework otimizado para máxima velocidade e eficiência.</p>
                </div>
            </div>
        </section>

        <!-- Tech Stack -->
        <section class="py-32 section-divide">
            <h2 class="text-5xl md:text-6xl font-bold tracking-tight mb-20">Stack</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="apple-border-thick p-12 text-center rounded-3xl bg-white shadow-[0_1px_0_rgba(11,11,15,0.06)]">
                    <p class="text-sm font-medium text-black/60 mb-4">Linguagem</p>
                    <p class="text-3xl font-bold">PHP 8+</p>
                </div>
                <div class="apple-border-thick p-12 text-center rounded-3xl bg-white shadow-[0_1px_0_rgba(11,11,15,0.06)]">
                    <p class="text-sm font-medium text-black/60 mb-4">Framework</p>
                    <p class="text-3xl font-bold">Flight</p>
                </div>
                <div class="apple-border-thick p-12 text-center rounded-3xl bg-white shadow-[0_1px_0_rgba(11,11,15,0.06)]">
                    <p class="text-sm font-medium text-black/60 mb-4">Banco de Dados</p>
                    <p class="text-3xl font-bold">SQLite</p>
                </div>
                <div class="apple-border-thick p-12 text-center rounded-3xl bg-white shadow-[0_1px_0_rgba(11,11,15,0.06)]">
                    <p class="text-sm font-medium text-black/60 mb-4">Estilos</p>
                    <p class="text-3xl font-bold">Tailwind</p>
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="py-32">
            <div class="max-w-3xl">
                <h2 class="text-5xl md:text-6xl font-bold tracking-tight mb-10">Sobre</h2>
                <p class="text-xl text-black/70 font-light mb-6 leading-relaxed">
                    Desenvolvido para demonstrar boas práticas em desenvolvimento web com PHP.
                </p>
                <p class="text-lg text-black/60 font-light leading-relaxed">
                    Funcionalidade em primeiro lugar. Nada mais, nada menos. Sem distrações, sem excessos — apenas design inteligente e código limpo.
                </p>
            </div>
        </section>
    </main>

    <footer class="border-t border-black/10 bg-white mt-20">
        <div class="max-w-7xl mx-auto px-8 py-12">
            <div class="flex justify-between items-end flex-wrap gap-8 mb-8">
                <div>
                    <p class="text-sm font-semibold mb-1"><?= $_ENV['APP_NAME'] ?? 'PHP Pure' ?></p>
                    <p class="text-xs text-black/60">Elegância no código. Simplicidade no design.</p>
                </div>
                <div class="space-y-2 text-right">
                    <a href="#" class="block text-sm text-black/70 hover:text-black transition">Documentação</a>
                    <a href="/admin" class="block text-sm text-black/70 hover:text-black transition">Painel Admin</a>
                </div>
            </div>
            <div class="border-t border-black/10 pt-6 text-xs text-black/60 text-center">
                <p>&copy; 2024 <?= $_ENV['APP_NAME'] ?? 'PHP Pure' ?></p>
            </div>
        </div>
    </footer>
</body>
</html>
