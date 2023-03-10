<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesaccess.css">
</head>

<body>

    <header>
        <nav class="d-flex">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html">León deJudá Cannabis → ¡Bienvenido!</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="card">
            <div class="card-header">
            <iconify-icon icon="fa6-brands:wolf-pack-battalion" style="color: wheat;" width="45" height="44"></iconify-icon>
                <div class="text-header">Registro</div>
            </div>
            <div class="card-body">
                <form action="php/registro_usuario_be.php" method="POST">
                    <div class="form-group">
                        <label for="username">Nombre completo:</label>
                        <input required="" class="form-control" name="nombre_completo"  id="nombre_completo" type="text" placeholder="Nombre(s) y apellidos">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input required="" class="form-control" name="correo" id="correo" type="email" placeholder="example@dominio.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Usuario:</label>
                        <input required="" class="form-control" name="usuario" id="usuario" type="text" placeholder="(puedes acceder con tu nickname también)">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Contraseña:</label>
                        <input required="" class="form-control" name="contrasena" id="contrasena" type="password" placeholder="Tip: Siempre mira a tu alrededor">
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-lg" >Submit</button>
                    <div>
                        <a href="./login.php">¿Cuentas con membresia? → Da clikc aqui ← </a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <p><em>Siguenos en nuestras redes sociales: Facebook, Instagram, Telegram, WhatsApp y Web</em></p>
    </footer>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>