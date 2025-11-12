<?php
session_start();

/**
 * Retorna o "base path" onde o app está sendo servido.
 * Ex.: se a URL for http://localhost/Projeto-Final/public/login => retorna "/Projeto-Final/public"
 * se for http://localhost:8000/login => retorna '' (vazio)
 */
function get_base_path(): string {
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
    if ($base === '/' || $base === '\\') {
        return '';
    }
    return $base;
}

/**
 * Gera URLs relativas ao base path.
 * Ex.: base_url('/login') -> '/Projeto-Final/public/login' ou '/login' dependendo do ambiente.
 */
function base_url(string $path = '/'): string {
    $base = get_base_path();
    if ($path === '') $path = '/';
    if ($path[0] !== '/') $path = '/' . $path;
    return ($base === '' ? $path : $base . $path);
}

/**
 * Compara a rota pedida ($requestPath) com uma rota relativa ($route)
 * levando em conta o base path detectado.
 *
 * Uso: route_eq($requestPath, '/login')
 */
function route_eq(string $requestPath, string $route): bool {
    $base = get_base_path();
    $req = rtrim($requestPath, '/');
    if ($req === '') $req = '/';

    $full = ($base === '' ? $route : $base . $route);
    $full = rtrim($full, '/');
    if ($full === '') $full = '/';

    return $req === $full;
}

// obter o path da request (sem querystring)
$rawPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = $rawPath === null ? '/' : $rawPath;
$path = rtrim($path, '/');
if ($path === '') $path = '/';

// ------------------ ROTEAMENTO ------------------

// LOGIN (mapeia também a raiz para a tela de login)
if (route_eq($path, '/') || route_eq($path, '/login')) {
    include __DIR__ . '/../app/views/auth/login.php';
    exit;
}

// CADASTRO (formulário)
if (route_eq($path, '/usuario/novo')) {
    include __DIR__ . '/../app/views/usuarios/form.php';
    exit;
}

// SALVAR (simulado) — POST
if (route_eq($path, '/usuario/salvar') && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simulação de salvar usuário
    header('Location: ' . base_url('/login') . '?sucesso=1');
    exit;
}

// LOGIN SIMULADO — POST
if (route_eq($path, '/auth') && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simulação: salva dados do usuário em sessão
    $_SESSION['usuario'] = ['email' => $_POST['email'] ?? ''];
    header('Location: ' . base_url('/menu'));
    exit;
}

// LISTA DE USUÁRIOS (protegida)
if (route_eq($path, '/usuarios')) {
    if (!isset($_SESSION['usuario'])) {
        header('Location: ' . base_url('/login'));
        exit;
    }
    include __DIR__ . '/../app/views/usuarios/usuarios-lista.php';
    exit;
}

// LOGOUT
if (route_eq($path, '/logout')) {
    session_destroy();
    header('Location: ' . base_url('/login'));
    exit;
}

// MENU PRINCIPAL (protegida)
if (route_eq($path, '/menu')) {
    if (!isset($_SESSION['usuario'])) {
        header('Location: ' . base_url('/login'));
        exit;
    }
    include __DIR__ . '/../app/views/usuarios/menu.php';
    exit;
}

// CURSOS (protegida)
if (route_eq($path, '/cursos')) {
    if (!isset($_SESSION['usuario'])) {
        header('Location: ' . base_url('/login'));
        exit;
    }
    include __DIR__ . '/../app/views/cursos/lista.php';
    exit;
}

// CONFIGURAÇÕES (protegida)
if (route_eq($path, '/configuracoes')) {
    if (!isset($_SESSION['usuario'])) {
        header('Location: ' . base_url('/login'));
        exit;
    }
    include __DIR__ . '/../app/views/configuracoes/configuracoes.php';
    exit;
}

// PERFIL (protegida)
if (route_eq($path, '/perfil')) {
    if (!isset($_SESSION['usuario'])) {
        header('Location: ' . base_url('/login'));
        exit;
    }
    include __DIR__ . '/../app/views/perfil/perfil.php';
    exit;
}

// --- Se você tiver rotas dinâmicas como /usuario/editar/{id} ---
// exemplo de manipulação por prefixo (adapte conforme necessário)
$prefixEditar = (get_base_path() === '' ? '/usuario/editar' : get_base_path() . '/usuario/editar');
if (strpos($path, $prefixEditar) === 0) {
    $id = trim(substr($path, strlen($prefixEditar)), '/');
    if ($id !== '') {
        // passa id como GET para o controller (ou adapte para sua estrutura)
        $_GET['id'] = $id;
        include __DIR__ . '/../app/controllers/UsuarioController.php';
        exit;
    }
}

// ROTA: formulário de recuperação - exibe o formulário
if (route_eq($path, '/esqueci')) {
    include __DIR__ . '/../app/views/auth/esqueci.php';
    exit;
}

// ROTA: processamento da etapa 1 (envia para /esqueci2 ou mostra mensagem)
// Ajuste conforme sua lógica: aqui simulamos redirecionamento para /esqueci2
if (route_eq($path, '/esqueci') && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // processa envio (ex: validar email/telefone) e redireciona para próxima etapa
    header('Location: ' . base_url('/esqueci2'));
    exit;
}

// ROTA: segunda etapa (esqueci2) — página de confirmação ou token
if (route_eq($path, '/esqueci2')) {
    // você pode incluir uma view 'esqueci2.php' ou simular resposta
    include __DIR__ . '/../app/views/auth/esqueci2.php';
    exit;
}


// Se não bateu em nenhuma rota:
http_response_code(404);
echo "<h1>404 - Página não encontrada</h1>";
echo "<p>Request path: " . htmlspecialchars($rawPath) . "</p>";
//teste//