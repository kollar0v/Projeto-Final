<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Configurações do Sistema</title>
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
      color: #00ff88;
      text-shadow: 0 0 10px #00ff88;
      margin-bottom: 30px;
      text-align: center;
    }

    .config-container {
      width: 90%;
      max-width: 700px;
      background: rgba(0, 0, 0, 0.6);
      border: 1px solid #00ff88;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
    }

    .config-item {
      margin-bottom: 20px;
    }

    .config-item label {
      display: block;
      margin-bottom: 8px;
      color: #00ff88;
      font-weight: 500;
    }

    .config-item input {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #00ff88;
      background: transparent;
      color: #00ff88;
    }

    .btn-salvar {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: transparent;
      color: #00ff88;
      border: 1px solid #00ff88;
      border-radius: 8px;
      padding: 10px 20px;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s ease;
      margin-top: 20px;
    }

    .btn-salvar:hover {
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
  <h1><i class='bx bx-cog'></i> Configurações do Sistema</h1>

  <div class="config-container">
    <div class="config-item">
      <label for="tema">Tema do site</label>
      <input type="text" id="tema" value="Neon Verde" readonly>
    </div>

    <div class="config-item">
      <label for="idioma">Idioma</label>
      <input type="text" id="idioma" value="Português (Brasil)" readonly>
    </div>

    <div class="config-item">
      <label for="notificacoes">Notificações por email</label>
      <input type="text" id="notificacoes" value="Ativadas" readonly>
    </div>

    <a href="#" class="btn-salvar"><i class='bx bx-save'></i> Salvar Alterações</a>
  </div>

  <div class="voltar">
    <a href="/Projeto-Final/public/menu"><i class='bx bx-arrow-back'></i> Voltar ao menu</a>
  </div>
</body>
</html>
