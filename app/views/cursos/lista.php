<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cursos Disponíveis</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

  <style>
    :root {
      --neon-green: #00ff88;
      --neon-cyan: #00e0ff;
      --bg-dark: #0d1117;
      --bg-gradient: radial-gradient(circle at top, #0f2027, #08141c 80%);
      --text-light: #ccffe6;
    }

    * { box-sizing: border-box; }

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
      overflow-x: hidden;
      position: relative;
      padding: 60px 20px 80px;
    }

    /* brilho suave no fundo */
    body::before {
      content: '';
      position: fixed;
      top: -100px;
      left: -100px;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(0,255,136,0.18), transparent 70%);
      filter: blur(120px);
      z-index: 0;
    }

    h1 {
      color: var(--neon-green);
      text-shadow: 0 0 15px var(--neon-green);
      margin: 0 0 10px 0;
      font-size: 2rem;
      text-align: center;
      z-index: 1;
    }

    .intro {
      max-width: 1100px;
      text-align: center;
      line-height: 1.6;
      font-size: 1rem;
      margin: 10px 0 30px 0;
      color: var(--text-light);
      opacity: 0.95;
      z-index: 1;
    }

    .cursos-container {
      width: 100%;
      max-width: 1200px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 25px;
      align-items: start;
      z-index: 1;
    }

    .curso-card {
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(0,255,136,0.35);
      border-radius: 16px;
      padding: 22px;
      box-shadow: 0 0 15px rgba(0,255,136,0.12);
      backdrop-filter: blur(6px);
      transition: all 0.25s ease;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 200px;
    }

    .curso-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(120deg, transparent, rgba(0,255,136,0.08), transparent);
      transition: all 0.6s;
    }

    .curso-card:hover::before { left: 100%; }

    .curso-card:hover {
      border-color: var(--neon-green);
      box-shadow: 0 0 30px var(--neon-green);
      transform: translateY(-6px);
      background: rgba(0,255,136,0.06);
    }

    .curso-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 10px;
    }

    .curso-header i {
      font-size: 1.6rem;
      color: var(--neon-cyan);
    }

    .curso-card h3 {
      color: var(--neon-green);
      margin: 0;
      font-size: 1.05rem;
      text-shadow: 0 0 8px var(--neon-green);
    }

    .curso-info {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      font-size: 0.88rem;
      color: var(--neon-cyan);
      margin: 12px 0;
    }

    .curso-info span { display: inline-flex; align-items: center; gap:6px; }

    .curso-card p {
      color: var(--text-light);
      font-size: 0.95rem;
      line-height: 1.45;
      margin: 0 0 16px 0;
      flex-grow: 1;
    }

    .curso-actions {
      display: flex;
      gap: 10px;
      align-items: center;
      justify-content: flex-start;
      margin-top: 8px;
    }

    .btn-acessar {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: transparent;
      color: var(--neon-green);
      border: 1px solid var(--neon-green);
      border-radius: 10px;
      padding: 9px 14px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.25s ease;
      box-shadow: 0 0 8px rgba(0,255,136,0.22);
    }

    .btn-acessar:hover {
      background: var(--neon-green);
      color: #000;
      box-shadow: 0 0 24px var(--neon-green);
      transform: translateY(-3px);
    }

    .badge {
      display: inline-block;
      background: var(--neon-green);
      color: #000;
      font-size: 0.75rem;
      font-weight: 700;
      border-radius: 6px;
      padding: 4px 8px;
      margin-left: 6px;
      animation: pulse 1.8s infinite;
    }

    @keyframes pulse {
      0%,100% { box-shadow: 0 0 10px var(--neon-green); opacity: 1; }
      50% { box-shadow: 0 0 22px var(--neon-green); opacity: 0.8; }
    }

    .lancamentos {
      margin-top: 50px;
      width: 100%;
      max-width: 1200px;
      text-align: left;
      z-index: 1;
    }

    .lancamentos h2 {
      color: var(--neon-cyan);
      text-shadow: 0 0 12px var(--neon-cyan);
      margin: 20px 0;
    }

    .lancamentos .row {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(220px,1fr));
      gap: 12px;
    }

    .lanc-item {
      background: rgba(255,255,255,0.03);
      border-left: 3px solid var(--neon-cyan);
      padding: 12px;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0,224,255,0.08);
      color: var(--text-light);
      font-size: 0.95rem;
    }

    .voltar {
      margin-top: 36px;
      text-align: center;
      z-index: 1;
    }

    .voltar a {
      color: var(--neon-green);
      text-decoration: none;
      font-weight: 600;
      border: 1px solid var(--neon-green);
      border-radius: 8px;
      padding: 10px 18px;
      transition: all 0.25s ease;
      box-shadow: 0 0 10px rgba(0,255,136,0.25);
    }

    .voltar a:hover {
      background: var(--neon-green);
      color: #000;
      box-shadow: 0 0 25px var(--neon-green);
    }

    footer {
      margin-top: 48px;
      text-align: center;
      color: var(--neon-green);
      font-size: 0.9rem;
      opacity: 0.9;
      z-index: 1;
    }

    footer a { color: var(--neon-cyan); text-decoration: none; }
    footer a:hover { text-shadow: 0 0 10px var(--neon-cyan); }

    @media (max-width: 520px) {
      h1 { font-size: 1.5rem; }
      .intro { font-size: 0.95rem; padding: 0 6px; }
      .curso-card { padding: 18px; }
    }
  </style>
</head>
<body>
  <h1><i class='bx bx-code-alt'></i> Cursos de Programação</h1>

  <p class="intro">
    Portal com <strong>15 temáticas</strong> essenciais de programação — do front-end ao machine learning.
    Agora o botão <em>Ver curso</em> abre o vídeo/playlist diretamente, enquanto <em>Inscrever-se</em> leva à página interna do curso.
  </p>

  <div class="cursos-container">
    <?php
      // 15 temáticas com campo 'video' (aponta para vídeo/playlist do YouTube ou busca no YouTube)
      $cursos = [
        ['id'=>'php-mvc','icone'=>'bx bx-logo-php','nome'=>'PHP Moderno com MVC','descricao'=>'Crie aplicações PHP organizadas com MVC, roteamento e boas práticas de arquitetura.','nivel'=>'Intermediário','duracao'=>'6h 30min','professor'=>'Carlos Souza','destaque'=>true,'video'=>'https://www.youtube.com/watch?v=TfsO0BGvGn0'],
        ['id'=>'javascript','icone'=>'bx bx-code','nome'=>'JavaScript do Zero ao Avançado','descricao'=>'Fundamentos, ES6+, programação assíncrona, DOM e patterns modernos.','nivel'=>'Todos os níveis','duracao'=>'10h','professor'=>'Marina Dias','destaque'=>true,'video'=>'https://www.youtube.com/watch?v=vEwPnjqWQ-g'],
        ['id'=>'python-basico','icone'=>'bx bx-bolt','nome'=>'Introdução ao Python','descricao'=>'Sintaxe, estruturas de dados, e pequenos projetos para fixar os conceitos.','nivel'=>'Iniciante','duracao'=>'5h','professor'=>'Lucas Andrade','destaque'=>false,'video'=>'https://www.youtube.com/watch?v=S9uPNppGsGo'],
        ['id'=>'html-css','icone'=>'bx bx-layout','nome'=>'HTML & CSS Profissional','descricao'=>'Crie layouts responsivos, Flexbox, Grid e componentes reutilizáveis.','nivel'=>'Iniciante','duracao'=>'8h 20min','professor'=>'Ana Paula','destaque'=>false,'video'=>'https://www.youtube.com/watch?v=Ejkb_YpuHWs'],
        ['id'=>'react','icone'=>'bx bx-atom','nome'=>'React: Componentes & Hooks','descricao'=>'Componentização, hooks, roteamento e state management prático.','nivel'=>'Intermediário','duracao'=>'9h','professor'=>'Rafael Lima','destaque'=>true,'video'=>'https://www.youtube.com/results?search_query=react+tutorial+pt-br'],
        ['id'=>'nodejs','icone'=>'bx bx-server','nome'=>'Node.js e APIs REST','descricao'=>'Construção de APIs com Express, autenticação JWT e integração com bancos.','nivel'=>'Intermediário','duracao'=>'7h 30min','professor'=>'Beatriz Costa','destaque'=>false,'video'=>'https://www.youtube.com/results?search_query=nodejs+express+tutorial+pt-br'],
        ['id'=>'typescript','icone'=>'bx bx-shape-square','nome'=>'TypeScript para JavaScript Seguro','descricao'=>'Tipagem estática, generics e patterns para projetos escaláveis.','nivel'=>'Intermediário','duracao'=>'6h','professor'=>'Pedro Melo','destaque'=>false,'video'=>'https://www.youtube.com/results?search_query=typescript+tutorial+pt-br'],
        ['id'=>'sql-mysql','icone'=>'bx bx-database','nome'=>'Banco de Dados com MySQL','descricao'=>'Modelagem, normalização, queries avançadas e integração com PHP.','nivel'=>'Intermediário','duracao'=>'5h 40min','professor'=>'Sofia Ramos','destaque'=>false,'video'=>'https://www.youtube.com/results?search_query=mysql+tutorial+pt-br'],
        ['id'=>'git-github','icone'=>'bx bx-git-branch','nome'=>'Git & GitHub — Fluxos de Trabalho','descricao'=>'Controle de versão, branches, pull requests e boas práticas colaborativas.','nivel'=>'Todos os níveis','duracao'=>'3h 20min','professor'=>'Daniel Freitas','destaque'=>false,'video'=>'https://www.youtube.com/results?search_query=git+github+tutorial+pt-br'],
        ['id'=>'docker','icone'=>'bx bx-package','nome'=>'Docker para Desenvolvedores','descricao'=>'Containers, Dockerfile, docker-compose e workflow de desenvolvimento.','nivel'=>'Intermediário','duracao'=>'4h 30min','professor'=>'Marcos Silva','destaque'=>false,'video'=>'https://www.youtube.com/results?search_query=docker+tutorial+pt-br'],
        ['id'=>'devops','icone'=>'bx bx-trending-up','nome'=>'Introdução a DevOps','descricao'=>'CICD, automação e monitoramento para entregar software com qualidade.','nivel'=>'Intermediário','duracao'=>'6h','professor'=>'Laura Mendes','destaque'=>false,'video'=>'https://www.youtube.com/results?search_query=devops+tutorial+pt-br'],
        ['id'=>'data-science','icone'=>'bx bx-bar-chart','nome'=>'Data Science Básico','descricao'=>'Análise de dados, pandas e visualização para decisões orientadas por dados.','nivel'=>'Intermediário','duracao'=>'8h','professor'=>'Thiago Rocha','destaque'=>true,'video'=>'https://www.youtube.com/results?search_query=data+science+pandas+tutorial+pt-br'],
        ['id'=>'ml','icone'=>'bx bx-brain','nome'=>'Machine Learning Prático','descricao'=>'Modelos clássicos, validação e deploy simples de modelos.','nivel'=>'Avançado','duracao'=>'12h','professor'=>'Camila Nogueira','destaque'=>true,'video'=>'https://www.youtube.com/results?search_query=machine+learning+tutorial+pt-br'],
        ['id'=>'dotnet','icone'=>'bx bx-cube','nome'=>'C# & .NET Core','descricao'=>'Desenvolvimento web e APIs com .NET, DI e patterns essenciais.','nivel'=>'Intermediário','duracao'=>'9h','professor'=>'Felipe Castro','destaque'=>false,'video'=>'https://www.youtube.com/results?search_query=dotnet+core+tutorial+pt-br'],
        ['id'=>'mobile-flutter','icone'=>'bx bx-mobile-alt','nome'=>'Desenvolvimento Mobile com Flutter','descricao'=>'Widgets, navegação, estado e publicação de apps multiplataforma.','nivel'=>'Intermediário','duracao'=>'7h 15min','professor'=>'Isabela Ferreira','destaque'=>false,'video'=>'https://www.youtube.com/results?search_query=flutter+tutorial+pt-br'],
      ];

      foreach ($cursos as $curso):
        // link interno "funcional" — ajuste para sua rota real se necessário
        $link_interno = "/Projeto-Final/public/curso.php?id=" . urlencode($curso['id']);
        $video_link = $curso['video'];
    ?>
      <article class="curso-card" role="article" aria-labelledby="title-<?= htmlspecialchars($curso['id']) ?>">
        <div>
          <div class="curso-header">
            <i class="<?= htmlspecialchars($curso['icone']) ?>" aria-hidden="true"></i>
            <h3 id="title-<?= htmlspecialchars($curso['id']) ?>"><?= htmlspecialchars($curso['nome']) ?>
              <?php if (!empty($curso['destaque'])): ?>
                <span class="badge" aria-hidden="true">🔥 Em alta</span>
              <?php endif; ?>
            </h3>
          </div>

          <div class="curso-info" aria-hidden="false">
            <span title="Nível"><i class="bx bx-signal-5"></i> <?= htmlspecialchars($curso['nivel']) ?></span>
            <span title="Duração"><i class="bx bx-time-five"></i> <?= htmlspecialchars($curso['duracao']) ?></span>
            <span title="Professor"><i class="bx bx-user-circle"></i> <?= 'Prof. ' . htmlspecialchars($curso['professor']) ?></span>
          </div>

          <p><?= htmlspecialchars($curso['descricao']) ?></p>
        </div>

        <div class="curso-actions">
          <!-- Ver curso abre o vídeo/playlist em nova aba -->
          <a class="btn-acessar" href="<?= htmlspecialchars($video_link) ?>" target="_blank" rel="noopener noreferrer">
            <i class="bx bx-play-circle"></i> Ver curso
          </a>

          <!-- Inscrever-se continua para a página interna -->
          <a class="btn-acessar" href="<?= htmlspecialchars($link_interno) ?>&action=enroll" title="Inscrever-se">
            <i class="bx bx-check-square"></i> Inscrever-se
          </a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>

  <section class="lancamentos" aria-labelledby="lanc-title">
    <h2 id="lanc-title"><i class='bx bx-bulb'></i> Próximos Lançamentos</h2>
    <div class="row">
      <div class="lanc-item"><strong>Arquitetura de Microsserviços</strong> — desenho, comunicação e patterns (em breve).</div>
      <div class="lanc-item"><strong>Segurança Web</strong> — OWASP, autenticação e proteção de APIs.</div>
      <div class="lanc-item"><strong>GraphQL</strong> — APIs modernas e performance.</div>
      <div class="lanc-item"><strong>WebAssembly</strong> — perfis e uso em aplicações críticas.</div>
    </div>
  </section>

  <div class="voltar">
    <a href="/Projeto-Final/public/menu"><i class='bx bx-arrow-back'></i> Voltar ao menu</a>
  </div>

  <footer>
    <p>© <?= date('Y') ?> Portal de Cursos - Desenvolvido em PHP MVC &nbsp;|&nbsp; <a href="/Projeto-Final/public/suporte">Suporte Técnico</a></p>
  </footer>
</body>
</html>
