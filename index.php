<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Introdução</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #001f3f; /* Azul marinho */
            margin: 0;
            padding: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        .container {
            margin-top: 20px;
        }
        .btns {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo ao Meu Site</h1>
        <div class="btns">
            <a href="login.php" class="btn">Login</a>
            <a href="cadastrar.php" class="btn">Cadastrar</a>
            <a href="index.php" class="btn">Inicio</a>
        </div>
    </div>
</body>
</html>



   