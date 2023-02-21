//Declaraciones generales
const contenedorProductos = document.getElementById("contenedorProductos");
const contadorCarrito = document.getElementById("contadorCarrito");
const carritoOffcanvas = document.getElementById("carritoOffcanvas");
const contenedorContadorCarrito = document.getElementById("contenedorContadorCarrito");
const precioTotalCarrito = document.getElementById("precioTotalCarrito");
const terminarCompra = document.getElementById("terminarCompra");
const contador = document.createElement("p");



// baseProductos

const variedades = [
    { id: 1, nombre: "Blacberry Moonroocks", imagen: "./Idproductos/blackberryMoonrocks.jpg", precio: 30, cantidad: 1, actualización: 2, Disponibilidad: 10 },
    { id: 2, nombre: "Most Sale: Bubba Kush", imagen: "./Idproductos/bubbaKush.jpg", precio: 42, cantidad: 1, actualización: 4, Disponibilidad: 22 },
    { id: 3, nombre: "More THC: Critical ++ 2.0", imagen: "./Idproductos/criticalMasMas.jpg", precio: 28, cantidad: 1, actualización: 5, Disponibilidad: 40 },
    { id: 4, nombre: "Mex: Golden Acapulco", imagen: "./Idproductos/goldenAcapulco.jpg", precio: 42, cantidad: 1, actualización: 6, Disponibilidad: 38 },
    { id: 5, nombre: "Northern Lights", imagen: "./Idproductos/northernLights.jpg", precio: 32, cantidad: 1, actualización: 7, Disponibilidad: 29 },
    { id: 6, nombre: "Gorilla Breath", imagen: "./Idproductos/gorillaBreath.jpg", precio: 24, cantidad: 1, actualización: 9, Disponibilidad: 51 },
    { id: 7, nombre: "Special: Purple Kush", imagen: "./Idproductos/purpleKush.webp", precio: 20, cantidad: 1, actualización: 9, Disponibilidad: 10 },
    { id: 8, nombre: "¡Offer!: Amnesia Haze", imagen: "./Idproductos/amnesiaHaze.jpg", precio: 22, cantidad: 1, actualización: 3, Disponibilidad: 5 },
    { id: 9, nombre: "New : Cookies Gelato", imagen: "./Idproductos/cookiesGelato.jpg", precio: 22, cantidad: 1, actualización: 7, Disponibilidad: 2 },
    { id: 10, nombre: "New: Royal Highness", imagen: "./Idproductos/royalHighness.webp", precio: 22, cantidad: 1, actualización: 1, Disponibilidad: 1 }
];

let carritoDeCompras = [];

//Repositorio de venta

variedades.forEach(item => {
    const div = document.createElement("div");
    div.innerHTML +=
        `
    <div class="card mb-3">
        <img src="${item.imagen}" class="card-img-top" alt="${item.nombre}">
        <div class="card-body">
            <h2 class="card-title">${item.nombre}</h2>
            <p> Precio /gramo:  ${item.precio} ($)</p>
            <p> Disponibilidad:  ${item.Disponibilidad} (kg)</p>
            <button id="variedades${item.id}" type="button" class="btn btn-dark" ><iconify-icon inline icon="ic:outline-add-shopping-cart"  style="color: gold;" width="25" height="25"></iconify-icon>Add</button>    
        </div>
    `

    contenedorProductos.appendChild(div);

    const botonAgregarCarrito = document.getElementById(`variedades${item.id}`);
    botonAgregarCarrito.addEventListener("click", () => {
        agregarAlCarrito(item.id, carritoDeCompras);
        agregarContadorCarrito();
        mostrarCarrito();
    })
})


const agregarAlCarrito = (productoSeleccionado, carrito) => {
    const productoExiste = carritoDeCompras.some(variedad => variedad.id === productoSeleccionado);
    const productoElegido = variedades.find(variedad => variedad.id === productoSeleccionado);
    if (productoExiste) {
        let precioInicial = productoElegido.precio;
        productoElegido.cantidad++;
        productoElegido.nuevoPrecio = productoElegido.cantidad * precioInicial;
    } else {
        carrito.push(productoElegido);
        console.log("Se agregó correctamente");
        console.log(carrito);
    }
}

const agregarContadorCarrito = () => {
    if (typeof foo !== 'undefinided') {
        contenedorContadorCarrito.appendChild(contador);
        contador.textContent = carritoDeCompras.length;
        contador.classList.add("contadorCarrito");
    } else {
        contador.textContent = "";
        contador.classList.remove("contadorCarrito");
    }
}

const mostrarCarrito = () => {
    carritoOffcanvas.innerHTML = "";
    carritoDeCompras.forEach(producto => {
        tr = document.createElement("tr");
        tr.classList.add("tablaProductos");
        tr.innerHTML +=
            `
        <td>
            <img src ="${producto.imagen}" alt="${producto.nombre}">
        </td>
            <td class="infoProducto">Tipo ${producto.nombre}</td>
            <td class="infoProducto">${producto.cantidad}</td>
            <td class="infoProducto">${producto.precio}</td>
            <td class="infoProducto eliminarProducto">
                <iconify-icon icon="material-symbols:delete-outline" class="deleteIconify" id="eliminar${producto.id}"></iconify-icon>
        </td>
        `
        carritoOffcanvas.appendChild(tr)

        const botonEliminar = document.getElementById(`eliminar${producto.id}`);
        botonEliminar.addEventListener("click", () => {
            eliminarProducto(producto.id)
        })
    })
    
    const totalCarrito = carritoDeCompras.reduce((acumulador, producto) => acumulador + producto.precio * producto.cantidad, 0);
    precioTotalCarrito.innerText = `Precio total: ${totalCarrito}`;
}

const eliminarProducto = (productoClickeado) => {
    const productoEliminado = carritoDeCompras.find(variedad => variedad.id === productoClickeado);
    const index = carritoDeCompras.indexOf(productoEliminado);
    carritoDeCompras.splice(index, 1);
    agregarContadorCarrito();
    mostrarCarrito();
}

const vaciarCarrito = () => {
    carritoDeCompras.innerHTML = [];
    carritoOffcanvas.innerHTML = [];
    precioTotalCarrito.textContent = "";
    contador.textContent = "";
    contador.classList.remove("contadorCarrito");
}

terminarCompra.addEventListener("click", () => {
    vaciarCarrito();
})
