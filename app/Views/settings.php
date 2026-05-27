<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Configurações - Painel Admin</title>
  </head>

  <body class="bg-zinc-950 text-zinc-100">
    <div class="flex h-screen overflow-hidden">
      <?php include "components/ui/sidebar.php"; ?>

      <main class="flex-1 overflow-y-auto">
        <header
          class="h-20 border-b border-zinc-800 bg-zinc-900/70 backdrop-blur flex items-center justify-between px-8">
          <div>
            <h2 class="text-2xl font-bold">Configurações</h2>
          </div>
        </header>
        <?php include "components/alerts.php"; ?>

        <section class="p-8 space-y-8">
          <div class="max-w-2xl space-y-6">
            <!-- Configurações Gerais -->
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl">
              <div class="p-6 border-b border-zinc-800">
                <h3 class="text-xl font-semibold">Configurações Gerais</h3>
              </div>

              <div class="p-6 space-y-6">
                <div>
                  <label class="block text-sm font-medium mb-2">Nome da Aplicação</label>
                  <input type="text" placeholder="Nome da aplicação" 
                    class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-2 text-zinc-100 focus:outline-none focus:border-blue-600" />
                </div>

                <div>
                  <label class="block text-sm font-medium mb-2">Email de Suporte</label>
                  <input type="email" placeholder="suporte@example.com" 
                    class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-2 text-zinc-100 focus:outline-none focus:border-blue-600" />
                </div>

                <div>
                  <label class="block text-sm font-medium mb-2">Descrição</label>
                  <textarea placeholder="Descrição da aplicação" 
                    class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-2 text-zinc-100 focus:outline-none focus:border-blue-600 resize-none h-24"></textarea>
                </div>

                <button class="bg-blue-600 hover:bg-blue-700 transition px-6 py-2 rounded-xl font-medium">
                  Salvar Alterações
                </button>
              </div>
            </div>

            <!-- Segurança -->
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl">
              <div class="p-6 border-b border-zinc-800">
                <h3 class="text-xl font-semibold">Segurança</h3>
              </div>

              <div class="p-6 space-y-6">
                <div>
                  <label class="flex items-center justify-between">
                    <span class="text-sm font-medium">Autenticação de Dois Fatores</span>
                    <input type="checkbox" class="w-5 h-5 rounded" />
                  </label>
                  <p class="text-xs text-zinc-400 mt-1">Exigir autenticação de dois fatores para todos os usuários</p>
                </div>

                <div class="border-t border-zinc-800 pt-6">
                  <label class="flex items-center justify-between">
                    <span class="text-sm font-medium">Modo Manutenção</span>
                    <input type="checkbox" class="w-5 h-5 rounded" />
                  </label>
                  <p class="text-xs text-zinc-400 mt-1">Ativar modo de manutenção para todos os usuários</p>
                </div>

                <div class="border-t border-zinc-800 pt-6">
                  <label class="flex items-center justify-between">
                    <span class="text-sm font-medium">Backups Automáticos</span>
                    <input type="checkbox" class="w-5 h-5 rounded" checked />
                  </label>
                  <p class="text-xs text-zinc-400 mt-1">Realizar backups automáticos diariamente</p>
                </div>

                <button class="w-full bg-zinc-800 hover:bg-zinc-700 transition px-6 py-2 rounded-xl font-medium border border-zinc-700 mt-4">
                  Salvar Alterações
                </button>
              </div>
            </div>

            <!-- Integração -->
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl">
              <div class="p-6 border-b border-zinc-800">
                <h3 class="text-xl font-semibold">Integração</h3>
              </div>

              <div class="p-6 space-y-6">
                <div>
                  <label class="block text-sm font-medium mb-2">Chave da API</label>
                  <div class="flex gap-2">
                    <input type="password" value="sk_live_51234567890" readonly
                      class="flex-1 bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-2 text-zinc-100 focus:outline-none" />
                    <button class="bg-zinc-800 hover:bg-zinc-700 transition px-4 py-2 rounded-xl">
                      Copiar
                    </button>
                  </div>
                </div>

                <div>
                  <label class="block text-sm font-medium mb-2">Webhook URL</label>
                  <input type="url" placeholder="https://seu-dominio.com/webhook" 
                    class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-2 text-zinc-100 focus:outline-none focus:border-blue-600" />
                </div>

                <button class="bg-blue-600 hover:bg-blue-700 transition px-6 py-2 rounded-xl font-medium">
                  Salvar Alterações
                </button>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>