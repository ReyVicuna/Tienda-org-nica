<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesaccess.css">

</head>

<body>

    <header>
        <nav class="d-flex">
            <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html">León deJudá Cannabis → ¡Bienvenido!</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="card">
            <div class="card-header">
                <div class="text-header">Registro</div>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label for="username">Usuario:</label>
                        <input required="" class="form-control" name="username" id="username" type="text">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input required="" class="form-control" name="email" id="email" type="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input required="" class="form-control" name="password" id="password" type="password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirmar Contraseña:</label>
                        <input required="" class="form-control" name="confirm-password" id="confirm-password"
                            type="password">
                    </div>
                    <input type="submit" class="btn" value="enviar">
                    <div>
                        <a href="./login.html">¿Ya tienes una cuenta? → Da clikc aqui ← </a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <p><em>Todos los derechos reservados por el autor®</em></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>