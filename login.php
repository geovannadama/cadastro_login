<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f8ff; /* Azul claro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .btns {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <form action="processa_login.php" method="post">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="E-mail ou Nome de Usuário" required>
        <input type="password" name="password" placeholder="Senha" required>
        <input type="submit" value="Entrar">
    </form>
    <div class="btns">
            <a href="login.php" class="btn">Login</a>
            <a href="cadastrar.php" class="btn">Cadastrar</a>
            <a href="index.php" class="btn">Inicio</a>
        </div>
</body>
</html>
