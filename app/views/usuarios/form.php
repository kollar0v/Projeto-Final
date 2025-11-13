<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Usuário</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

  <style>
    :root {
      --neon-green: #00ff88;
      --neon-cyan: #00e0ff;
      --bg-dark: #0d1117;
      --bg-gradient: radial-gradient(circle at top, #0f2027, #08141c 80%);
      --text-light: #ccffe6;
    }

    * {
      box-sizing: border-box;
    }

    body {
      background: var(--bg-gradient);
      color: var(--text-light);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
      position: relative;
      padding: 40px 20px;
    }

    /* brilho suave no fundo */
    body::before {
      content: '';
      position: fixed;
      top: -100px;
      left: -100px;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(0, 255, 136, 0.2), transparent 70%);
      filter: blur(120px);
      z-index: 0;
    }

    h1 {
      color: var(--neon-green);
      text-shadow: 0 0 15px var(--neon-green);
      margin-bottom: 10px;
      font-size: 2rem;
      text-align: center;
      z-index: 1;
    }

    p {
      color: #b7ffe0;
      margin-bottom: 25px;
      font-size: 1rem;
      text-align: center;
      z-index: 1;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(0, 255, 136, 0.4);
      border-radius: 16px;
      padding: 40px 35px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 25px rgba(0, 255, 136, 0.15);
      backdrop-filter: blur(10px);
      z-index: 1;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    label {
      display: block;
      text-align: left;
      font-size: 0.9rem;
      color: var(--neon-green);
      margin-bottom: 6px;
    }

    input {
      width: 100%;
      padding: 12px;
      border: 1px solid rgba(0, 255, 136, 0.5);
      border-radius: 8px;
      background: rgba(0, 0, 0, 0.4);
      color: var(--text-light);
      font-size: 1rem;
      outline: none;
      transition: all 0.3s ease;
    }

    input:focus {
      box-shadow: 0 0 15px var(--neon-green);
      border-color: var(--neon-green);
      background: rgba(0, 0, 0, 0.6);
    }

    .btn-cadastrar {
      background: transparent;
      color: var(--neon-green);
      border: 1px solid var(--neon-green);
      border-radius: 8px;
      padding: 12px;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 0 10px rgba(0, 255, 136, 0.3);
    }

    .btn-cadastrar:hover {
      background: var(--neon-green);
      color: #000;
      box-shadow: 0 0 25px var(--neon-green);
      transform: translateY(-2px);
    }

    .link-login {
      margin-top: 25px;
      color: #b7ffe0;
      font-size: 0.9rem;
      text-align: center;
    }

    .link-login a {
      color: var(--neon-green);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s ease;
    }

    .link-login a:hover {
      color: var(--neon-cyan);
      text-shadow: 0 0 10px var(--neon-green);
    }

    @media (max-width: 600px) {
      h1 { font-size: 1.6rem; }
      .form-container { padding: 30px 25px; }
    }
  </style>
</head>
<body>

  <h1><i class='bx bx-user-plus'></i> Cadastro</h1>
  <p>Crie sua conta para acessar o portal</p>

  <div class="form-container">
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

      <button type="submit" class="btn-cadastrar">Cadastrar</button>
    </form>
  </div>

  <div class="link-login">
    <p>Já tem uma conta? <a href="/Projeto-Final/public/login">Voltar ao login</a></p>
  </div>

</body>
</html>
