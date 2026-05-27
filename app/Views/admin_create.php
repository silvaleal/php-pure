<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Criar Plano</title>
  </head>

  <body class="bg-zinc-950 text-zinc-100">
    <div class="flex h-screen overflow-hidden">
      <?php include "components/ui/sidebar.php"; ?>

      <main class="w-full overflow-y-auto">
        <header
          class="h-20 border-b border-zinc-800 bg-zinc-900/70 backdrop-blur flex items-center justify-between px-8">
          <div>
            <h1 class="text-2xl font-bold">Criar Plano</h1>
          </div>
        </header>

      <?php include "components/alerts.php"; ?>]
      
        <section class="p-8">
          <div
            class="max-w-4xl mx-auto bg-zinc-900 border border-zinc-800 rounded-3xl p-8"
          >
            <form method="POST" action="/admin/plans/create" class="space-y-8">
              <div>
                <label class="block mb-3 text-sm font-medium text-zinc-300">
                  Nome do Plano
                </label>

                <input
                  type="text"
                  name="name"
                  placeholder="Ex: Plano Premium"
                  class="w-full bg-zinc-950 border border-zinc-800 focus:border-violet-500 outline-none rounded-2xl px-5 py-4 transition"
                />
              </div>

              <div>
                <label class="block mb-3 text-sm font-medium text-zinc-300">
                  Descrição
                </label>

                <textarea
                  name="description"
                  rows="5"
                  placeholder="Descreva o plano..."
                  class="w-full bg-zinc-950 border border-zinc-800 focus:border-violet-500 outline-none rounded-2xl px-5 py-4 transition resize-none"
                ></textarea>
              </div>

                <div>
                  <label class="block mb-3 text-sm font-medium text-zinc-300">
                    Preço Mensal
                  </label>

                  <div class="relative">
                    <span
                      class="absolute left-4 top-1/2 -translate-y-1/2 text-zinc-400"
                    >
                      R$
                    </span>

                    <input
                      type="number"
                      name="price"
                      step="0.01"
                      placeholder="0.00"
                      class="w-full pl-12 bg-zinc-950 border border-zinc-800 focus:border-violet-500 outline-none rounded-2xl px-5 py-4 transition"
                    />
                  </div>
                </div>

              <div
                class="flex items-center justify-end gap-4 pt-6 border-t border-zinc-800">

                <button
                  type="submit"
                  class="bg-violet-600 hover:bg-violet-500 transition px-6 py-3 rounded-2xl font-medium">
                  Criar Plano
                </button>
            </form>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>