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
          <div class="bg-zinc-900 border border-zinc-800 rounded-2xl">
            <div
              class="p-6 border-b border-zinc-800 flex items-center justify-between">
              <div>
                <h3 class="text-xl font-semibold">
                  Lista de Planos
                </h3>
              </div>

              <a
                href="/admin/plans/create"
                class="bg-blue-600 hover:bg-blue-700 transition px-4 py-2 rounded-xl font-medium">
                + Novo Plano
              </a>
            </div>

            <div class="overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr class="text-left text-zinc-400 border-b border-zinc-800">
                    <th class="p-4">Nome</th>
                    <th class="p-4">Preço</th>
                    <th class="p-4">Descrição</th>
                    <th class="p-4">Ações</th>
                  </tr>
                </thead>

                <tbody>
                  <?php if (!empty($plans)): ?>
                    <?php foreach ($plans as $plan): ?>
                      <tr>
                        <td class="p-4"><?= htmlspecialchars($plan["name"] ?? "", ENT_QUOTES, "UTF-8") ?></td>
                        <td class="p-4"><?= htmlspecialchars("R$".($plan["price"] ?? "0") . "/mês", ENT_QUOTES, "UTF-8") ?></td>
                        <td class="p-4 text-zinc-400"><?= htmlspecialchars($plan["description"] ?? "", ENT_QUOTES, "UTF-8") ?></td>
                        <td class="p-4">
                          <div class="flex gap-3">
                            <a class="text-blue-400 hover:text-blue-300" href="/admin/plan/<?= $plan["uuid"] ?>">Editar</a>
                            <form method="POST" action="/admin/plan/<?= $plan["uuid"] ?>">
                              <input type="hidden" name="_method" value="DELETE">
                            </form>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td class="p-6 text-zinc-400" colspan="4">Nenhum plano cadastrado.</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>

        </section>
      </main>
    </div>
  </body>
</html>
