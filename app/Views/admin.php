<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Painel Admin</title>
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
            class="flex items-center gap-3 px-4 py-3 rounded-xl bg-zinc-800 text-white font-medium">
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
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-zinc-800 transition">
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
            <h2 class="text-2xl font-bold">Dashboard</h2>
          </div>
        </header>

        <section class="p-8 space-y-8">
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6">
              <p class="text-zinc-400 text-sm">Usuários</p>
              <h3 class="text-4xl font-bold mt-2">0</h3>
            </div>

            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6">
              <p class="text-zinc-400 text-sm">Assinaturas</p>
              <h3 class="text-4xl font-bold mt-2">0</h3>
            </div>

            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6">
              <p class="text-zinc-400 text-sm">Planos</p>
              <h3 class="text-4xl font-bold mt-2">0</h3>
            </div>
          </div>

          <div class="grid gap-6">
            <div
              class="xl:col-span-2 bg-zinc-900 border border-zinc-800 rounded-2xl">
              <div
                class="p-6 border-b border-zinc-800 flex items-center justify-between">
                <div>
                  <h3 class="text-xl font-semibold">
                    Usuários recentes
                  </h3>
                </div>

                <button
                  class="bg-zinc-800 hover:bg-zinc-700 transition px-4 py-2 rounded-xl">
                  Ver todos
                </button>
              </div>

              <div class="overflow-x-auto">
                <table class="w-full">
                  <thead>
                    <tr class="text-left text-zinc-400 border-b border-zinc-800">
                      <th class="p-4">Nome</th>
                      <th class="p-4">Plano</th>
                      <th class="p-4">Status</th>
                      <th class="p-4">Data</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class="border-b border-zinc-800 hover:bg-zinc-800/40">
                      <td class="p-4">Lucas</td>
                      <td class="p-4">PRO</td>
                      <td class="p-4">
                        <span
                          class="bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-sm"
                        >
                          Ativo
                        </span>
                      </td>
                      <td class="p-4 text-zinc-400">Hoje</td>
                    </tr>

                    <tr class="border-b border-zinc-800 hover:bg-zinc-800/40">
                      <td class="p-4">Amanda</td>
                      <td class="p-4">Basic</td>
                      <td class="p-4">
                        <span
                          class="bg-yellow-500/20 text-yellow-400 px-3 py-1 rounded-full text-sm"
                        >
                          Trial
                        </span>
                      </td>
                      <td class="p-4 text-zinc-400">Ontem</td>
                    </tr>

                    <tr class="hover:bg-zinc-800/40">
                      <td class="p-4">Carlos</td>
                      <td class="p-4">Enterprise</td>
                      <td class="p-4">
                        <span
                          class="bg-red-500/20 text-red-400 px-3 py-1 rounded-full text-sm"
                        >
                          Suspenso
                        </span>
                      </td>
                      <td class="p-4 text-zinc-400">2 dias atrás</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>