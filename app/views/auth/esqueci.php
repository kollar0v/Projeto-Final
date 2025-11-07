<?php

// Formulário para iniciar recuperação de senha

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- caminho público correto -->
    <link rel="stylesheet" href="/css/esqueci.css">
    <title>Recuperação de senha</title>
</head>
<body>
    <main class="container">
        <!-- enviar para a rota que processa recuperação; usar POST -->
        <form action="/esqueci2" method="POST">
            <h1>Recuperação de senha</h1>

            <div class="input-box">
                <input name="email" type="email" placeholder="exemplo@exemplo.com" required>
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <label for="telefone-br" class="sr-only"></label>
                <input
                    id="telefone-br"
                    name="telefone"
                    type="tel"
                    placeholder="Nº Celular (ex: 5591999999999)"
                    pattern="\d{11,13}"
                    title="Informe apenas números: DDI + DDD + número (ex: 5591999999999)"
                    required>
                <i class="bx bxs-mobile"></i>
            </div>

            <button type="submit" class="login">Recuperar</button>

            <div class="link-register">
                <p>Não tem uma conta? <a href="/usuario/novo">Cadastre-se</a></p>
            </div>
        </form>
    </main>
</body>
</html>
