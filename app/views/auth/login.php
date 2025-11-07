<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sistema MVC</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="/Projeto-Final/public/css/login.css">
</head>
<body>

<?php if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1): ?>
  <div class="alerta-sucesso">Usuário cadastrado com sucesso! Faça login para continuar.</div>
<?php endif; ?>


  <!-- ✅ Mensagem de sucesso pós-cadastro -->
  <?php
  if (isset($_SESSION['msg'])) {
      echo "<div style='
        background:#00ff73;
        color:#000;
        padding:10px;
        border-radius:5px;
        margin:10px auto;
        width:80%;
        text-align:center;
        font-weight:bold;
        box-shadow:0 0 10px #00ff73;
      '>{$_SESSION['msg']}</div>";
      unset($_SESSION['msg']); // remove a mensagem da sessão
  }
  ?>
  <!-- ✅ Fim da mensagem -->

  <div class="login-container">
    <div class="login-card">
      <h2>Bem-vindo(a)</h2>
      <p>Faça login para acessar o sistema</p>

      <form method="POST" action="/Projeto-Final/public/auth">
        <div class="input-group">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
        </div>

        <div class="input-group">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
        </div>

        <button type="submit" class="btn-login">Entrar</button>
      </form>

      <div class="link-register">
        <p>Não tem uma conta? <a href="/Projeto-Final/public/usuario/novo">Cadastre-se</a></p>
      </div>
    </div>
  </div>
</body>
</html>
