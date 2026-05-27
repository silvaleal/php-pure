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
      <?php include "components/ui/sidebar.php"; ?>

      <main class="flex-1 overflow-y-auto">
        <header
          class="h-20 border-b border-zinc-800 bg-zinc-900/70 backdrop-blur flex items-center justify-between px-8">
          <div>
            <h2 class="text-2xl font-bold">Planos</h2>
          </div>
        </header>
        <?php include "components/alerts.php"; ?>

        <section class="p-8 space-y-8">
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            <?php foreach ($plans as $plan): ?>
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6">
              <div class="flex items-center justify-between">
                <div>
                  <h3 class="text-xl font-semibold"><?= $plan["name"] ?></h3>
                  <p class="text-zinc-400 text-sm mt-1"><?= $plan["price"] ?>/mês</p>
                </div>
              </div>

              <div class="mt-4 space-y-2 text-sm text-zinc-400">
                <p><?= $plan["description"] ?></p>
              </div>

              <div class="mt-10 w-full">
                <a href="plan/<?= $plan["uuid"] ?? '0' ?>" class="w-full mt-4 bg-zinc-800 hover:bg-zinc-700 transition px-4 py-2 rounded-xl">
                Customizar 
              </a>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <div class="flex justify-end">
            <a href="plans/create" class="bg-blue-600 hover:bg-blue-700 transition px-6 py-2 rounded-xl font-medium">
              + Novo Plano
            </a>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>