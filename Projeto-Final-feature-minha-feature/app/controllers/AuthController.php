<?php
class AuthController {
    private $pdo;
    public function __construct($pdo) { $this->pdo = $pdo; }

    public function showLogin() {
        $title = "Login";
        $viewFile = __DIR__ . '/../views/auth/login.php';
        include __DIR__ . '/../views/layout/layout.php';
    }

    public function login() {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        if (!$email || !$senha) {
            echo "<script>alert('Preencha os campos!');history.back();</script>";
            return;
        }

        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {
            $_SESSION['usuario'] = $user['nome'];
            header("Location: /Projeto-Final/public/usuarios");
            exit;
        } else {
            echo "<script>alert('Credenciais inválidas!');history.back();</script>";
        }
    }
}
?>
