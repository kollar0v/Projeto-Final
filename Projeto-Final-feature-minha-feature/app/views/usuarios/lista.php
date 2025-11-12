<link rel="stylesheet" href="/Projeto-Final/public/css/site.css">

<section class="container">
  <h1>Bem-vindo(a), <?= $_SESSION['usuario'] ?? '' ?>!</h1>
  <h2>Lista de Usuários</h2>

  <a href="/Projeto-Final/public/usuario/novo" class="btn">+ Novo Usuário</a>

  <table class="tabela-usuarios">
    <thead>
      <tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Elayne</td>
        <td>elayne@teste.com</td>
        <td>
          <a href="#">Editar</a> | <a href="#">Excluir</a>
        </td>
      </tr>
    </tbody>
  </table>
</section>
