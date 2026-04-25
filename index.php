<?php
// index.php - Dashboard Moderno
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Painel</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

    <!-- Sidebar -->
    <nav>
        <div style="margin-bottom: 40px;">
            <h2 style="color: #00ffcc; font-size: 26px;">Dashboard</h2>
        </div>
        
        <a href="index.php" class="active"><i class="fas fa-home"></i> Início</a>
        <a href="usuarios.php"><i class="fas fa-users"></i> Usuários</a>
        <a href="categorias.php"><i class="fas fa-tags"></i> Categorias</a>
        <a href="postagens.php"><i class="fas fa-file-alt"></i> Postagens</a>

        <!-- Perfil do usuário no final -->
        <div class="perfil-usuario">
            <i class="fas fa-user-circle" style="font-size: 46px; color: #00ffcc;"></i>
            <div>
                <strong>Yago Oliveira</strong><br>
                <small style="color: #00ffcc;">Administrador</small>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <h1>Bem-vindo ao Painel</h1>
        <p class="subtitle">Gerencie seu sistema de forma simples, rápida e organizada.</p>

        <div class="container-cards">
            
            <div class="card">
                <h2><i class="fas fa-users"></i> Módulo de Usuários</h2>
                <p>Gerencie os acessos, permissões e cadastros de usuários do sistema.</p>
                <a href="usuarios.php" class="btn">Acessar</a>
            </div>

            <div class="card">
                <h2><i class="fas fa-tags"></i> Categorias</h2>
                <p>Organize e gerencie as categorias dos produtos e conteúdos.</p>
                <a href="categorias.php" class="btn">Acessar</a>
            </div>

            <div class="card">
                <h2><i class="fas fa-file-alt"></i> Gestão de Postagens</h2>
                <p>Crie, edite e gerencie todas as postagens do sistema.</p>
                <a href="postagens.php" class="btn">Acessar</a>
            </div>

        </div>
    </main>

</body>
</html>