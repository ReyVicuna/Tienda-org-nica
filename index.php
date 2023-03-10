<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zeyada&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Organic Store</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header class="d-flex justify-content-center">
        <nav class="navbar  navbar-expand-lg w-100">
            <div class="container-fluid d-flex justify-content-center">
                    <iconify-icon icon="fa6-brands:wolf-pack-battalion" style="color: purple;" width="58" height="58"></iconify-icon>
                <section id="entrarCarrito">
                    <div class="d-flex align-items-center" id="contadorCarrito">
                        <button type="button" class="btn btn-dark" type="button"><iconify-icon class="align-bottom" icon="mdi:sign-in-variant" style="color: wheat;" width="26" height="28"></iconify-icon></button>
                    </div>
                    <div class="d-flex align-items-center" id="contenedorContadorCarrito">
                        <div>
                            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <iconify-icon inline icon="ic:outline-add-shopping-cart" style="color: wheat;" width="28" height="26">
                                </iconify-icon>
                            </button>
                        </div>
                </section>
            </div>
        </nav>
    </header>
    <main>
        <h1>" León deJudá"</h1>
        <section id="contenedorProductos"></section>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrito de compras:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <table class="w-100">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Q</th>
                            <th scope="col">($)</th>
                            <th scope="col">X</th>
                        </tr>
                    </thead>
                    <tbody id="carritoOffcanvas"></tbody>
                </table>
                <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
                    <p id="precioTotalCarrito">Precio Total: </p>
                    <button id="terminarCompra" class="botonComprar">COMPRAR</button>
                </div>
            </div>
        </div>
        <section id="formulario">
            <h5>
                <em>Toda la información sensible será guardada de manera segura
                </em>
            </h5>
            <input type="text" name="" id="" required placeholder="Nombre (s) de quien solicita" class="primerFormulario">
            <input type="text" name="" id="" required placeholder="Apellidos" class="primerFormulario">
            <input type="number" name="" id="" required placeholder="Edad" class="primerFormulario">
            <input type="email" name="" id="" placeholder="Agrega tu email" required class="primerFormulario">
            <input type="submit" value="Enviar datos">
            <div>
                <h3>Medios de pago</h3>
                <label for="">Transferencia</label>
                <input type="checkbox" name="Transferencia" id="">
                <label for="">Cheques</label>
                <input type="checkbox" name="" id="">
                <label for="">Bonos</label>
                <input type="checkbox" name="" id="">
            </div>
            <div>
                <h3>Tipo de contacto</h3>
                <select name="Tipo de contacto" id="">
                    <option value="Directo">Directo</option>
                    <option value="Hibrido">Hibrido</option>
                    <option value="OnLine">OnLine</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div>
                <label for=""></label>
                <input type="text" name="" id="" placeholder="Agrega tu otra opción">
                <input type="submit" value="Mandar información...">
            </div>
            </form>
            </div>
            </div>
        </section>
    </main>
    <footer>
        <section id="sponsorAdvertencia">
            <em>
                "Nota importante al consumidor: !En la compra de más de 28 gramos tu envio es gratis¡ (Válido hasta
                agotar existencias)"
            </em>
            <section>
    </footer>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./scripts/index.js"></script>
</body>

</html>