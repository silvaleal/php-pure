<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Criar Usuário</title>
  </head>

  <body class="bg-zinc-950 text-zinc-100">
    <div class="flex h-screen overflow-hidden">
      <?php include "components/ui/sidebar.php"; ?>

      <main class="w-full overflow-y-auto">
        <header
          class="h-20 border-b border-zinc-800 bg-zinc-900/70 backdrop-blur flex items-center justify-between px-8">
          <div>
            <h1 class="text-2xl font-bold">Criar Usuário</h1>
          </div>
        </header>

        <?php include "components/alerts.php"; ?>

        <section class="p-8">
          <div
            class="max-w-4xl mx-auto bg-zinc-900 border border-zinc-800 rounded-3xl p-8"
          >
            <form method="POST" action="/admin/users/create" class="space-y-8">
              <div>
                <label class="block mb-3 text-sm font-medium text-zinc-300">
                  Nome
                </label>

                <input
                  type="text"
                  name="name"
                  placeholder="Ex: Maria"
                  class="w-full bg-zinc-950 border border-zinc-800 focus:border-violet-500 outline-none rounded-2xl px-5 py-4 transition"
                />
              </div>

              <div>
                <label class="block mb-3 text-sm font-medium text-zinc-300">
                  Email
                </label>

                <input
                  type="email"
                  name="email"
                  placeholder="maria@exemplo.com"
                  class="w-full bg-zinc-950 border border-zinc-800 focus:border-violet-500 outline-none rounded-2xl px-5 py-4 transition"
                />
              </div>

              <div>
                <label class="block mb-3 text-sm font-medium text-zinc-300">
                  Role
                </label>

                <input
                  type="text"
                  name="role"
                  placeholder="admin"
                  class="w-full bg-zinc-950 border border-zinc-800 focus:border-violet-500 outline-none rounded-2xl px-5 py-4 transition"
                />
              </div>

              <div>
                <label class="block mb-3 text-sm font-medium text-zinc-300">
                  Senha
                </label>

                <input
                  type="password"
                  name="password"
                  placeholder="Mínimo 6 caracteres"
                  class="w-full bg-zinc-950 border border-zinc-800 focus:border-violet-500 outline-none rounded-2xl px-5 py-4 transition"
                />
              </div>

              <div
                class="flex items-center justify-end gap-4 pt-6 border-t border-zinc-800">
                <button
                  type="submit"
                  class="bg-violet-600 hover:bg-violet-500 transition px-6 py-3 rounded-2xl font-medium">
                  Criar Usuário
                </button>
              </div>
            </form>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>
