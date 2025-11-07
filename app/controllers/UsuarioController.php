<?php
class UsuarioController {
    private $pdo;
    public function __construct($pdo) { $this->pdo = $pdo; }

    public function index() {
        if (!isset($_SESSION['usuario'])) {
            header("Location: /Projeto-Final/public/login");
            exit;
        }

        $title = "Lista de Usuários";
        $viewFile = __DIR__ . '/../views/usuarios/lista.php';
        include __DIR__ . '/../views/layout/layout.php';
    }

    public function form() {
        $title = "Novo Usuário";
        $viewFile = __DIR__ . '/../views/usuarios/form.php';
        include __DIR__ . '/../views/layout/layout.php';
    }
}
?>
