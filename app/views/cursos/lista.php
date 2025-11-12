<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cursos Disponíveis</title>
  <link rel="stylesheet" href="/Projeto-Final/public/css/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      background: radial-gradient(circle at center, #0a0a0a 0%, #000 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: #00ff88;
      padding-top: 60px;
    }

    h1 {
      text-align: center;
      color: #00ff88;
      text-shadow: 0 0 10px #00ff88;
      margin-bottom: 30px;
    }

    .cursos-container {
      width: 90%;
      max-width: 800px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .curso-card {
      background: rgba(0, 0, 0, 0.6);
      border: 1px solid #00ff88;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
      transition: all 0.2s ease;
    }

    .curso-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 25px #00ff88;
    }

    .curso-card h3 {
      color: #00ff88;
      margin-bottom: 10px;
      text-shadow: 0 0 8px #00ff88;
    }

    .curso-card p {
      color: #ccc;
      font-size: 0.95rem;
      line-height: 1.4;
      margin-bottom: 15px;
    }

    .btn-acessar {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      background: transparent;
      color: #00ff88;
      border: 1px solid #00ff88;
      border-radius: 8px;
      padding: 8px 16px;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s ease;
    }

    .btn-acessar:hover {
      background: #00ff88;
      color: #000;
      box-shadow: 0 0 20px #00ff88;
    }

    .voltar {
      margin-top: 30px;
      text-align: center;
    }

    .voltar a {
      color: #00ff88;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .voltar a:hover {
      color: #00ffaa;
      text-shadow: 0 0 8px #00ff88;
    }
  </style>
</head>
<body>
  <h1><i class='bx bx-code-alt'></i> Cursos de Programação</h1>

  <div class="cursos-container">
    <?php
      // Lista simulada de cursos (sem banco)
      $cursos = [
        ['nome' => 'PHP Moderno com MVC', 'descricao' => 'Aprenda a estruturar projetos PHP com o padrão MVC e boas práticas.'],
        ['nome' => 'JavaScript do Zero ao Avançado', 'descricao' => 'Domine o JavaScript moderno com exemplos práticos e interativos.'],
        ['nome' => 'Introdução ao Python', 'descricao' => 'Aprenda a programar em Python de forma simples, direta e prática.'],
        ['nome' => 'HTML e CSS Profissional', 'descricao' => 'Crie sites modernos e responsivos com HTML5 e CSS3.'],
      ];

      foreach ($cursos as $curso):
    ?>
      <div class="curso-card">
        <h3><?= htmlspecialchars($curso['nome']) ?></h3>
        <p><?= htmlspecialchars($curso['descricao']) ?></p>
        <a href="#" class="btn-acessar"><i class='bx bx-play-circle'></i> Acessar</a>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="voltar">
    <a href="/Projeto-Final/public/menu"><i class='bx bx-arrow-back'></i> Voltar ao menu</a>
  </div>
</body>
</html>
