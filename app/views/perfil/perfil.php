<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Perfil</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

  <style>
    :root {
      --neon-green: #00ff88;
      --neon-cyan: #00e0ff;
      --text-light: #ccffe6;
      --bg-dark: #0d1117;
      --bg-gradient: radial-gradient(circle at top, #0f2027, #08141c 80%);
    }

    * {
      box-sizing: border-box;
    }

    body {
      background: var(--bg-gradient);
      color: var(--text-light);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      padding-top: 80px;
      position: relative;
    }

    /* brilho suave no fundo */
    body::before {
      content: '';
      position: fixed;
      top: -100px;
      right: -100px;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(0, 255, 136, 0.15), transparent 70%);
      filter: blur(100px);
      z-index: 0;
    }

    h1 {
      color: var(--neon-green);
      text-shadow: 0 0 15px var(--neon-green);
      margin-bottom: 40px;
      text-align: center;
      z-index: 1;
    }

    .perfil-card {
      width: 90%;
      max-width: 500px;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(0, 255, 136, 0.4);
      border-radius: 16px;
      padding: 40px 30px;
      box-shadow: 0 0 20px rgba(0, 255, 136, 0.15);
      text-align: center;
      backdrop-filter: blur(10px);
      position: relative;
      z-index: 1;
    }

    .perfil-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 2px solid var(--neon-green);
      margin-bottom: 20px;
      box-shadow: 0 0 25px var(--neon-green);
      transition: transform 0.3s ease;
    }

    .perfil-card img:hover {
      transform: scale(1.05);
    }

    .perfil-card h2 {
      margin: 0;
      color: var(--neon-green);
      text-shadow: 0 0 10px var(--neon-green);
    }

    .perfil-card p {
      color: #b8ffec;
      margin: 8px 0;
      font-size: 0.95rem;
    }

    .btn-editar {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: transparent;
      color: var(--neon-green);
      border: 1px solid var(--neon-green);
      border-radius: 8px;
      padding: 10px 24px;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
      margin-top: 25px;
      box-shadow: 0 0 10px rgba(0, 255, 136, 0.25);
    }

    .btn-editar:hover {
      background: var(--neon-green);
      color: #000;
      box-shadow: 0 0 25px var(--neon-green);
      transform: translateY(-2px);
    }

    .voltar {
      margin-top: 40px;
      text-align: center;
      z-index: 1;
    }

    .voltar a {
      color: var(--neon-cyan);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .voltar a:hover {
      color: var(--neon-green);
      text-shadow: 0 0 10px var(--neon-green);
    }

    footer {
      margin-top: 60px;
      text-align: center;
      font-size: 0.85rem;
      color: var(--neon-green);
      opacity: 0.8;
      z-index: 1;
    }

    @media (max-width: 600px) {
      .perfil-card {
        padding: 30px 20px;
      }
      .perfil-card img {
        width: 100px;
        height: 100px;
      }
    }
  </style>
</head>
<body>
  <h1><i class='bx bx-id-card'></i> Meu Perfil</h1>

  <div class="perfil-card">
    <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="Foto do Usuário">
    <h2><?= htmlspecialchars($_SESSION['usuario']['email'] ?? 'Usuário Logado') ?></h2>
    <p><strong>Função:</strong> Estudante</p>
    <p><strong>Membro desde:</strong> Outubro de 2025</p>

    <a href="#" class="btn-editar"><i class='bx bx-edit'></i> Editar Perfil</a>
  </div>

  <div class="voltar">
    <a href="/Projeto-Final/public/menu"><i class='bx bx-arrow-back'></i> Voltar ao menu</a>
  </div>

  <footer>
    <p>© <?= date('Y') ?> Portal de Cursos - Desenvolvido em PHP MVC</p>
  </footer>
</body>
</html>
