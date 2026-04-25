<?php
// postagens.php - Gestão de Postagens (Estilo Moderno)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens - Dashboard</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <style>
        .header-page {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .table-container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 255, 204, 0.2);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid rgba(0, 255, 204, 0.1);
        }

        th {
            color: #00ffcc;
            font-weight: 600;
            background: rgba(0, 255, 204, 0.05);
        }

        tr:hover {
            background: rgba(0, 255, 204, 0.08);
        }

        .status {
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
        }

        .status.ativo {
            background: rgba(0, 204, 136, 0.2);
            color: #00ffaa;
        }

        .status.inativo {
            background: rgba(255, 51, 102, 0.2);
            color: #ff5577;
        }

        .acoes button {
            background: none;
            border: none;
            color: #aaa;
            font-size: 18px;
            margin: 0 6px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .acoes button:hover {
            color: #00ffcc;
            transform: scale(1.2);
        }

        .btn-add {
            background: #00ffcc;
            color: #000;
            padding: 12px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s;
        }

        .btn-add:hover {
            background: #00ffaa;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <nav>
        <div style="margin-bottom: 40px;">
            <h2 style="color: #00ffcc; font-size: 26px;">Dashboard</h2>
        </div>
        
        <a href="index.php"><i class="fas fa-home"></i> Início</a>
        <a href="usuarios.php"><i class="fas fa-users"></i> Usuários</a>
        <a href="categorias.php"><i class="fas fa-tags"></i> Categorias</a>
        <a href="postagens.php" class="active"><i class="fas fa-file-alt"></i> Postagens</a>

        <!-- Perfil -->
        <div class="perfil-usuario">
            <i class="fas fa-user-circle" style="font-size: 46px; color: #00ffcc;"></i>
            <div>
                <strong>Otávio Augusto</strong><br>
                <small style="color: #00ffcc;">Administrador</small>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="header-page">
            <div>
                <h1>Gestão de Postagens</h1>
                <p class="subtitle">Visualize e gerencie as postagens de produtos do sistema</p>
            </div>
            <a href="cad-postagens.php" class="btn-add">
                <i class="fas fa-plus"></i> Nova Postagem
            </a>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Conteúdo</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Smartphone Galaxy S25 Ultra</td>
                        <td>Review completo do novo flagship da Samsung com câmera de 200MP...</td>
                        <td>Eletrônicos</td>
                        <td><span class="status ativo">Ativo</span></td>
                        <td class="acoes">
                            <button title="Editar"><i class="fas fa-pen"></i></button>
                            <button title="Visualizar"><i class="fas fa-eye"></i></button>
                            <button title="Excluir"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Camiseta Básica Algodão Premium</td>
                        <td>Camiseta 100% algodão egípcio, disponível em várias cores...</td>
                        <td>Roupas e Moda</td>
                        <td><span class="status ativo">Ativo</span></td>
                        <td class="acoes">
                            <button title="Editar"><i class="fas fa-pen"></i></button>
                            <button title="Visualizar"><i class="fas fa-eye"></i></button>
                            <button title="Excluir"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Notebook Dell Inspiron 15</td>
                        <td>Processador Intel i7, 16GB RAM, SSD 512GB...</td>
                        <td>Eletrônicos</td>
                        <td><span class="status inativo">Inativo</span></td>
                        <td class="acoes">
                            <button title="Editar"><i class="fas fa-pen"></i></button>
                            <button title="Visualizar"><i class="fas fa-eye"></i></button>
                            <button title="Excluir"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Kit de Panelas Antiaderente</td>
                        <td>Conjunto com 5 peças, revestimento antiaderente de alta qualidade...</td>
                        <td>Utilidades Domésticas</td>
                        <td><span class="status ativo">Ativo</span></td>
                        <td class="acoes">
                            <button title="Editar"><i class="fas fa-pen"></i></button>
                            <button title="Visualizar"><i class="fas fa-eye"></i></button>
                            <button title="Excluir"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>