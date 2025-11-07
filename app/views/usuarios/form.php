<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Usuário</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="/Projeto-Final/public/css/login.css"> <!-- reaproveita o mesmo CSS -->
</head>
<body>

  <div class="login-container">
    <div class="login-card">
      <h2>Cadastro</h2>
      <p>Crie sua conta para acessar o sistema</p>

      <form method="POST" action="/Projeto-Final/public/usuario/salvar">
        <div class="input-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" required>
        </div>

        <div class="input-group">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
        </div>

        <div class="input-group">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" placeholder="Crie uma senha" required>
        </div>

        <button type="submit" class="btn-login">Cadastrar</button>
      </form>

      <div class="link-register">
        <p>Já tem uma conta? <a href="/Projeto-Final/public/login">Voltar ao login</a></p>
      </div>
    </div>
  </div>

</body>
</html>
