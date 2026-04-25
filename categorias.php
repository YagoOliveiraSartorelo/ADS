<?php
// categorias.php - Gerenciamento de Categorias (Estilo Moderno)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Dashboard</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        /* Estilos específicos para o formulário */
        .form-container {
            max-width: 600px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 255, 204, 0.2);
        }

        .form-container h1 {
            color: #00ffcc;
            margin-bottom: 8px;
            text-align: center;
        }

        .form-container p {
            text-align: center;
            color: #aaa;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #ddd;
            font-weight: 500;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 14px 16px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(0, 255, 204, 0.3);
            border-radius: 8px;
            color: white;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #00ffcc;
            box-shadow: 0 0 0 3px rgba(0, 255, 204, 0.2);
        }

        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            padding: 14px 32px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            flex: 1;
        }

        .btn-success {
            background: #00cc88;
            color: white;
        }

        .btn-success:hover {
            background: #00ffaa;
            transform: translateY(-2px);
        }

        .btn-cancel {
            background: #ff3366;
            color: white;
        }

        .btn-cancel:hover {
            background: #ff5577;
            transform: translateY(-2px);
        }

        .header-page {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <!-- Sidebar (igual ao index.php) -->
    <nav>
        <div style="margin-bottom: 40px;">
            <h2 style="color: #00ffcc; font-size: 26px;">Dashboard</h2>
        </div>
        
        <a href="index.php"><i class="fas fa-home"></i> Início</a>
        <a href="usuarios.php"><i class="fas fa-users"></i> Usuários</a>
        <a href="categorias.php" class="active"><i class="fas fa-tags"></i> Categorias</a>
        <a href="postagens.php"><i class="fas fa-file-alt"></i> Postagens</a>

        <!-- Perfil -->
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
        <div class="header-page">
            <div>
                <h1>Categorias</h1>
                <p class="subtitle">Gerencie as categorias do sistema</p>
            </div>
            <a href="categorias.php" class="btn" style="background: #00ffcc; color: #000; padding: 12px 24px;">
                <i class="fas fa-plus"></i> Nova Categoria
            </a>
        </div>

        <!-- Formulário Nova Categoria -->
        <div class="form-container">
            <h1>Nova Categoria</h1>
            <p>Preencha os dados abaixo para registrar uma nova categoria</p>

            <form>
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" placeholder="Ex: CAT001" readonly>
                </div>

                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" placeholder="Digite o nome da categoria" required>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Finalizar Cadastro
                    </button>
                    <button type="button" class="btn btn-cancel" onclick="history.back()">
                        <i class="fas fa-times"></i> Cancelar
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>