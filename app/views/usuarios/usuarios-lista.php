<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Lista de Usuários</title>
  <link rel="stylesheet" href="/Projeto-Final/public/css/dashboard.css">
</head>
<body>

  <nav class="menu">
    <ul>
      <li><a href="/Projeto-Final/public/usuarios">Home</a></li>
      <li><a href="/Projeto-Final/public/usuario/novo">Cadastrar Usuário</a></li>
      <li><a href="/Projeto-Final/public/logout">Sair</a></li>
    </ul>
  </nav>

  <main class="conteudo">
    <h1>Bem-vindo(a) ao Sistema HexDatas</h1>
    <section class="usuarios-lista">
      <h2>Usuários Cadastrados</h2>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
          </tr>
        </thead>
        <tbody>
          <!-- Simulação de usuários -->
          <tr><td>1</td><td>Maria Silva</td><td>maria@email.com</td></tr>
          <tr><td>2</td><td>João Santos</td><td>joao@email.com</td></tr>
          <tr><td>3</td><td>Carla Oliveira</td><td>carla@email.com</td></tr>
        </tbody>
      </table>
    </section>
  </main>

  <footer>
    <p>© 2025 HexDatas - Sistema MVC demonstrativo</p>
  </footer>

</body>
</html>
