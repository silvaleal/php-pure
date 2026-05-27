<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Planos - Painel Admin</title>
  </head>

  <body class="bg-zinc-950 text-zinc-100">
    <div class="flex h-screen overflow-hidden">
      <aside
        class="w-72 bg-zinc-900 border-r border-zinc-800 flex flex-col"
      >
        <div class="h-20 flex items-center px-6 border-b border-zinc-800">
          <div>
            <h1 class="text-2xl font-bold"><?= $_ENV['APP_NAME'] ?></h1>
          </div>
        </div>

        <nav class="flex-1 p-4 space-y-2">
          <a
            href="/admin"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-zinc-800 transition">
            Dashboard
          </a>

          <a
            href="/admin/users"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-zinc-800 transition">
            Usuários
          </a>

          <a
            href="/admin/subscriptions"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-zinc-800 transition">
            Assinaturas
          </a>

          <a
            href="/admin/plans"
            class="flex items-center gap-3 px-4 py-3 rounded-xl bg-zinc-800 text-white font-medium">
            Planos
          </a>

          <a
            href="/admin/settings"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-zinc-800 transition">
            Configurações
          </a>
        </nav>

        <div class="p-4 border-t border-zinc-800">
          <div
            class="bg-zinc-800 rounded-2xl p-4 flex items-center gap-3">
            <div>
              <h2 class="font-semibold">José</h2>
              <a class="text-sm text-zinc-400" href="/admin/logout">Desconectar</a>
            </div>
          </div>
        </div>
      </aside>

      <main class="flex-1 overflow-y-auto">
        <header
          class="h-20 border-b border-zinc-800 bg-zinc-900/70 backdrop-blur flex items-center justify-between px-8">
          <div>
            <h2 class="text-2xl font-bold">Planos</h2>
          </div>
        </header>

        <section class="p-8 space-y-8">
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6">
              <div class="flex items-center justify-between">
                <div>
                  <h3 class="text-xl font-semibold">Basic</h3>
                  <p class="text-zinc-400 text-sm mt-1">$9/mês</p>
                </div>
                <button class="text-blue-400 hover:text-blue-300">Editar</button>
              </div>

              <div class="mt-4 space-y-2 text-sm text-zinc-400">
                <p>✓ 10 projetos</p>
                <p>✓ 1GB armazenamento</p>
                <p>✗ Suporte prioritário</p>
              </div>

              <button class="w-full mt-4 bg-zinc-800 hover:bg-zinc-700 transition px-4 py-2 rounded-xl">
                Deletar
              </button>
            </div>

            <div class="bg-zinc-900 border border-blue-600/50 rounded-2xl p-6">
              <div class="flex items-center justify-between">
                <div>
                  <h3 class="text-xl font-semibold">PRO</h3>
                  <p class="text-zinc-400 text-sm mt-1">$29/mês</p>
                </div>
                <button class="text-blue-400 hover:text-blue-300">Editar</button>
              </div>

              <div class="mt-4 space-y-2 text-sm text-zinc-400">
                <p>✓ 100 projetos</p>
                <p>✓ 100GB armazenamento</p>
                <p>✓ Suporte prioritário</p>
              </div>

              <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 transition px-4 py-2 rounded-xl font-medium">
                Mais Popular
              </button>
            </div>

            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6">
              <div class="flex items-center justify-between">
                <div>
                  <h3 class="text-xl font-semibold">Enterprise</h3>
                  <p class="text-zinc-400 text-sm mt-1">Personalizado</p>
                </div>
                <button class="text-blue-400 hover:text-blue-300">Editar</button>
              </div>

              <div class="mt-4 space-y-2 text-sm text-zinc-400">
                <p>✓ Projetos ilimitados</p>
                <p>✓ Armazenamento ilimitado</p>
                <p>✓ Suporte 24/7</p>
              </div>

              <button class="w-full mt-4 bg-zinc-800 hover:bg-zinc-700 transition px-4 py-2 rounded-xl">
                Deletar
              </button>
            </div>
          </div>

          <div class="flex justify-end">
            <button class="bg-blue-600 hover:bg-blue-700 transition px-6 py-2 rounded-xl font-medium">
              + Novo Plano
            </button>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>