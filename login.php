<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesLogIn.css">

</head>

<body>
    <header>
        <nav class="d-flex">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html">Portal de acceso → Leon de Judá </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="login-card">
            <div class="card-header">
                <div class="log"> → Entrar a la Store ← </div>
            </div>
            <form>
                <div class="form-group">
                    <label for="username">Usuario: </label>
                    <input required="" name="username" id="username" type="text">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña: </label>
                    <input required="" name="password" id="password" type="password">
                </div>
                <div class="form-group">
                    <input value="Ingresar" type="submit">
                </div>
                <div>
                    <a href="./register.html">¿Aún no te asocias con nosotros...? ¿¡Qué esperas ;) ¡?</a>
                </div>
            </form>
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