<?php
// versão de teste independente (não depende de base_url())
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperação de senha</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --neon-green: #00ff88;
      --neon-cyan: #00e0ff;
      --text-light: #d6fff1;
      --bg-dark: #0d1117;
      --bg-gradient: radial-gradient(circle at top, #0f2027, #08141c 80%);
    }

    * { box-sizing: border-box; }

    body {
      background: var(--bg-gradient);
      color: var(--text-light);
      font-family: 'Roboto', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
      position: relative;
      overflow: hidden;
    }

    body::before {
      content: '';
      position: fixed;
      top: -80px;
      left: -100px;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(0, 255, 136, 0.2), transparent 70%);
      filter: blur(100px);
      z-index: 0;
    }

    main.container {
      width: 100%;
      max-width: 420px;
      z-index: 1;
    }

    form {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(0, 255, 136, 0.2);
      border-radius: 14px;
      box-shadow: 0 0 25px rgba(0, 255, 136, 0.1);
      padding: 36px 28px;
      text-align: center;
    }

    form h1 {
      color: var(--neon-green);
      text-shadow: 0 0 12px var(--neon-green);
      margin-bottom: 30px;
    }

    .input-box {
      position: relative;
      margin-bottom: 22px;
    }

    .input-box input {
      width: 100%;
      padding: 12px 40px 12px 14px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.08);
      color: var(--text-light);
      font-size: 1rem;
      outline: none;
      transition: all 0.3s ease;
    }

    .input-box input:focus {
      border-color: var(--neon-green);
      box-shadow: 0 0 10px rgba(0, 255, 136, 0.3);
      transform: scale(1.01);
    }

    .input-box i {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--neon-green);
      font-size: 1.2rem;
    }

    button.login {
      width: 100%;
      padding: 12px;
      background: transparent;
      border: 1px solid var(--neon-green);
      border-radius: 10px;
      color: var(--neon-green);
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 0 10px rgba(0, 255, 136, 0.2);
    }

    button.login:hover {
      background: var(--neon-green);
      color: #000;
      box-shadow: 0 0 25px var(--neon-green);
      transform: translateY(-2px);
    }

    .link-register {
      margin-top: 22px;
      color: var(--text-light);
    }

    .link-register a {
      color: var(--neon-cyan);
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    .link-register a:hover {
      color: var(--neon-green);
      text-shadow: 0 0 8px var(--neon-green);
    }

    @media (max-width: 450px) {
      form { padding: 28px 20px; }
    }
  </style>
</head>
<body>
  <main class="container">
    <!-- action relativo para teste local -->
    <form action="esqueci2" method="POST">
      <h1><i class="bx bx-lock-open"></i> Recuperação de senha</h1>

      <div class="input-box">
        <input name="email" type="email" placeholder="exemplo@exemplo.com" required>
        <i class="bx bxs-user"></i>
      </div>

      <div class="input-box">
        <input id="telefone-br" name="telefone" type="tel" placeholder="Nº Celular"
               pattern="\d{11,13}" title="Informe apenas números" required>
        <i class="bx bxs-mobile"></i>
      </div>

      <button type="submit" class="login">Recuperar</button>

      <div class="link-register">
        <p>Não tem uma conta? <a href="usuario/novo">Cadastre-se</a></p>
      </div>
    </form>
  </main>
</body>
</html>
