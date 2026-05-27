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