<?php
session_start();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// LOGIN
if ($path === '/Projeto-Final/public/login' || $path === '/') {
    include __DIR__ . '/../app/views/auth/login.php';
    exit;
}

// CADASTRO
if ($path === '/Projeto-Final/public/usuario/novo') {
    include __DIR__ . '/../app/views/usuarios/form.php';
    exit;
}

// SALVAR (simulado)
if ($path === '/Projeto-Final/public/usuario/salvar' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Aqui futuramente entra o PDO
    header('Location: /Projeto-Final/public/login?sucesso=1');
    exit;
}

// LOGIN SIMULADO
if ($path === '/Projeto-Final/public/auth' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Login simulado
    $_SESSION['usuario'] = [
        'email' => $_POST['email']
    ];
    header('Location: /Projeto-Final/public/usuarios');
    exit;
}

// DASHBOARD (protegido)
if ($path === '/Projeto-Final/public/usuarios') {
    if (!isset($_SESSION['usuario'])) {
        header('Location: /Projeto-Final/public/login');
        exit;
    }
    include __DIR__ . '/../app/views/usuarios/usuarios-lista.php';
    exit;
}

// LOGOUT
if ($path === '/Projeto-Final/public/logout') {
    session_destroy();
    header('Location: /Projeto-Final/public/login');
    exit;
}

http_response_code(404);
echo "<h1>404 - Página não encontrada</h1>";
