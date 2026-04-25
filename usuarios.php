<?php
// usuarios.php - Página moderna de Usuários
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários - Dashboard</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

    <!-- Sidebar -->
    <nav>
        <div style="margin-bottom: 40px;">
            <h2 style="color: #00ffcc; font-size: 26px;">Dashboard</h2>
        </div>
        
        <a href="index.php"><i class="fas fa-home"></i> Início</a>
        <a href="usuarios.php" class="active"><i class="fas fa-users"></i> Usuários</a>
        <a href="categorias.php"><i class="fas fa-tags"></i> Categorias</a>
        <a href="postagens.php"><i class="fas fa-file-alt"></i> Postagens</a>

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
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <div>
                <h1>Gestão de Usuários</h1>
                <p class="subtitle">Visualize e gerencie as permissões dos usuários do sistema</p>
            </div>
            <a href="cad-usuarios.php" class="btn" style="background: #00ffcc; color: #000; padding: 14px 24px;">
                <i class="fas fa-plus"></i> Adicionar Usuário
            </a>
        </div>

        <div class="card" style="padding: 0; overflow: hidden;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background: #1a1a1a;">
                        <th style="padding: 18px 20px; text-align: left;">ID</th>
                        <th style="padding: 18px 20px; text-align: left;">NOME</th>
                        <th style="padding: 18px 20px; text-align: left;">E-MAIL</th>
                        <th style="padding: 18px 20px; text-align: left;">ACESSO</th>
                        <th style="padding: 18px 20px; text-align: center;">STATUS</th>
                        <th style="padding: 18px 20px; text-align: center;">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 18px 20px;">01</td>
                        <td style="padding: 18px 20px;">Eric Freitas</td>
                        <td style="padding: 18px 20px;">eric@unifev.edu.br</td>
                        <td style="padding: 18px 20px;">Administrador</td>
                        <td style="text-align: center;"><span style="background: #00cc88; color: #000; padding: 6px 16px; border-radius: 30px; font-size: 14px; font-weight: 600;">Ativo</span></td>
                        <td style="text-align: center; font-size: 18px;">
                            <a href="#" style="color: #00ffcc; margin: 0 8px;"><i class="fas fa-edit"></i></a>
                            <a href="#" style="color: #aaa; margin: 0 8px;"><i class="fas fa-eye"></i></a>
                            <a href="#" style="color: #ff6666; margin: 0 8px;"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr style="background: #151515;">
                        <td style="padding: 18px 20px;">02</td>
                        <td style="padding: 18px 20px;">Ana Souza</td>
                        <td style="padding: 18px 20px;">ana.souza@email.com</td>
                        <td style="padding: 18px 20px;">Editor</td>
                        <td style="text-align: center;"><span style="background: #00cc88; color: #000; padding: 6px 16px; border-radius: 30px; font-size: 14px; font-weight: 600;">Ativo</span></td>
                        <td style="text-align: center; font-size: 18px;">
                            <a href="#" style="color: #00ffcc; margin: 0 8px;"><i class="fas fa-edit"></i></a>
                            <a href="#" style="color: #aaa; margin: 0 8px;"><i class="fas fa-eye"></i></a>
                            <a href="#" style="color: #ff6666; margin: 0 8px;"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 18px 20px;">03</td>
                        <td style="padding: 18px 20px;">Carlos Lima</td>
                        <td style="padding: 18px 20px;">carlos.lima@servidor.com</td>
                        <td style="padding: 18px 20px;">Usuário</td>
                        <td style="text-align: center;"><span style="background: #ff4444; color: white; padding: 6px 16px; border-radius: 30px; font-size: 14px; font-weight: 600;">Inativo</span></td>
                        <td style="text-align: center; font-size: 18px;">
                            <a href="#" style="color: #00ffcc; margin: 0 8px;"><i class="fas fa-edit"></i></a>
                            <a href="#" style="color: #aaa; margin: 0 8px;"><i class="fas fa-eye"></i></a>
                            <a href="#" style="color: #ff6666; margin: 0 8px;"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>