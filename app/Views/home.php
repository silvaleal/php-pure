<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_ENV['APP_NAME'] ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="p-4">
        <h2>Projeto para fins de portfólio</h2>
        <h1 class="text-2xl">Boas-vindas ao <?= $_ENV['APP_NAME'] ?>.</h1>
        <p class="text-sm">Neste projeto, desenvolvi um painel administrativo para gerenciar conteúdo de forma eficiente.</p>
    

        <a href="/admin" class="text-blue-500 hover:text-blue-700">Página Administrativa</a>

    </main>
</body>
</html>