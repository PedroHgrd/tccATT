<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Meu Website</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
    }
  </style>
</head>

<body>
  <!-- Conteúdo principal do seu site -->
  <main class="flex-grow-1">
    <h1>Conteúdo Principal</h1>
  </main>

  <footer class="bg-dark text-light">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-6">
          <h5>Informações de Contato</h5>
          <p>Endereço, telefone, email, etc.</p>
        </div>
        <div class="col-md-6">
          <h5>Links Úteis</h5>
          <ul class="list-unstyled">
            <li><a href="#">Página Inicial</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
