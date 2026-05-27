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
      <?php include "components/ui/sidebar.php"; ?>
      
      <main class="flex-1 overflow-y-auto">
        
        <header
        class="h-20 border-b border-zinc-800 bg-zinc-900/70 backdrop-blur flex items-center justify-between px-8">
        <div>
          <h2 class="text-2xl font-bold">Dashboard</h2>
        </div>
      </header>
      
      <?php include "components/alerts.php"; ?>

        <section class="p-8 space-y-8">
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6">
              <p class="text-zinc-400 text-sm">Usuários</p>
              <h3 class="text-4xl font-bold mt-2">0</h3>
            </div>

            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6">
              <p class="text-zinc-400 text-sm">Planos</p>
              <h3 class="text-4xl font-bold mt-2">0</h3>
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>
