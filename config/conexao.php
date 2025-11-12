<?php
// Simulação temporária da conexão (sem MySQL)
try {
    // cria um objeto "falso" de PDO para não quebrar o código
    class FakePDO {}
    $pdo = new FakePDO();
} catch (Exception $e) {
    die("Erro simulado na conexão (modo teste).");
}
?>
