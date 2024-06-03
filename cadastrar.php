<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f8ff; /* Azul claro */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h2 {
            margin-top:0;
       
        }
        container.{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
        <h2>Cadastrar</h2>
        <input type="text" name="username" placeholder="nome" required>
        <input type="text" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="Senha" required>
        <input type="password" name="password2" placeholder="Confirme a senha" required>
        <input type="submit" value="Criar">
    </form>
</body>
</html>
