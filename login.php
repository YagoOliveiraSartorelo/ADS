<?php
// login.php - Login Moderno
$erro = isset($_GET['erro']) ? true : false;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: linear-gradient(135deg, #0a0a0a, #1a1a2e);
            color: #e0e0e0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: #111111;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
            width: 100%;
            max-width: 420px;
            border: 1px solid #222;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo i {
            font-size: 60px;
            color: #00ffcc;
            margin-bottom: 10px;
        }

        .logo h1 {
            font-size: 28px;
            color: #fff;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #ccc;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #aaa;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 16px;
            background: #1f1f1f;
            border: 1px solid #333;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #00ffcc;
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 255, 204, 0.2);
        }

        .btn-login {
            width: 100%;
            padding: 16px;
            background: #00ffcc;
            color: #000;
            border: none;
            border-radius: 10px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
        }

        .btn-login:hover {
            background: #00ccaa;
            transform: translateY(-2px);
        }

        .error {
            background: #440000;
            color: #ff6666;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
            border: 1px solid #ff3333;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #555;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="logo">
            <i class="fas fa-shield-alt"></i>
            <h1>Dashboard</h1>
        </div>

        <h2>Acesso ao Painel</h2>

        <?php if ($erro): ?>
            <div class="error">
                <i class="fas fa-exclamation-circle"></i> Usuário ou senha incorretos!
            </div>
        <?php endif; ?>

        <form action="valida_login.php" method="POST">
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> E-mail</label>
                <input type="email" id="email" name="email" placeholder="admin@blog.com" required>
            </div>

            <div class="form-group">
                <label for="senha"><i class="fas fa-lock"></i> Senha</label>
                <input type="password" id="senha" name="senha" placeholder="123456" required>
            </div>

            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt"></i> Entrar no Painel
            </button>
        </form>

        <div class="footer">
            © 2026 - Desenvolvido por Yago Oliveira
        </div>
    </div>

</body>
</html>