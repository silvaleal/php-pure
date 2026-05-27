<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Editar Usuário</title>
  </head>

  <body class="bg-zinc-950 text-zinc-100">
    <div class="flex h-screen overflow-hidden">
      <?php include "components/ui/sidebar.php"; ?>

      <main class="w-full overflow-y-auto">
        <header
          class="h-20 border-b border-zinc-800 bg-zinc-900/70 backdrop-blur flex items-center justify-between px-8">
          <div>
            <h1 class="text-2xl font-bold">Editar Usuário</h1>
          </div>
          <form class="py-8" method="POST" action="/admin/user/<?=$user["uuid"]?>">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="bg-violet-500 text-white px-5 py-3 rounded-2xl">
              Excluir
            </button>
          </form>
        </header>

        <?php include "components/alerts.php"; ?>

        <section class="p-8">
          <div class="mx-auto bg-zinc-900 border border-zinc-800 rounded-3xl p-8">
            <form method="POST" action="/admin/user/<?=$user["uuid"]?>" class="space-y-8">
              <input type="hidden" name="_method" value="PATCH">

              <div>
                <label class="block mb-3 text-sm font-medium text-zinc-300">
                  Nome
                </label>

                <input
                  type="text"
                  name="name"
                  value="<?=$user["name"] ?? ""?>"
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
                  value="<?=$user["email"] ?? ""?>"
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
                  value="<?=$user["role"] ?? ""?>"
                  class="w-full bg-zinc-950 border border-zinc-800 focus:border-violet-500 outline-none rounded-2xl px-5 py-4 transition"
                />
              </div>

              <div>
                <label class="block mb-3 text-sm font-medium text-zinc-300">
                  Senha (opcional)
                </label>

                <input
                  type="password"
                  name="password"
                  placeholder="Deixe em branco para manter"
                  class="w-full bg-zinc-950 border border-zinc-800 focus:border-violet-500 outline-none rounded-2xl px-5 py-4 transition"
                />
              </div>

              <div
                class="flex items-center justify-end gap-4 pt-6 border-t border-zinc-800">
                <button
                  type="submit"
                  class="bg-violet-600 hover:bg-violet-500 transition px-6 py-3 rounded-2xl font-medium">
                  Salvar
                </button>
              </div>
            </form>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>
