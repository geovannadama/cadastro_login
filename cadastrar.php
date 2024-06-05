<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .form-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .navbar {
            justify-content: flex-end;
        }
        .title-center {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <div class="btn-group">
                <a class="nav-link btn btn-secondary" href="index.php">Home</a>
                <a class="nav-link btn btn-secondary" href="login.php">Login</a>
                <a class="nav-link active btn btn-secondary" aria-current="page" href="cadastrar.php">Cadastro</a>
            </div>
        </nav>
        <main class="px-3">
        <h1>Cadastro</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nome de usuário</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Endereço de email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="mt-5 pt-3 pb-3 text-center" style="background-color: #343a40; color: #fff;">
        <p>Aplicação PHP com Bootstrap 5, by <a href="https://getbootstrap.com/" style="color: white;">Bootstrap</a>.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


