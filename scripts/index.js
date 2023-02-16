// Contedor de Productos

const contenedorProductos = document.getElementById("contenedorProductos")

// baseProductos

const variedades = [
    { id: 1, nombre: "Blacberry Moonroocks", imagen: "../Idproductos/blackberryMoonrocks.jpg", precio: 30, cantidad: 1, actualización: 2},
    { id: 2, nombre: "Bubba Kush", imagen: "../Idproductos/bubbaKush.jpg", precio: 42, cantidad: 1, actualización: 4},
    { id: 3, nombre: "Critical ++ 2.0", imagen: "../Idproductos/criticalMasMas.jpg", precio: 28, cantidad: 1, actualización: 5},
    { id: 4, nombre: "Special: Golden Acapulco", imagen: "../Idproductos/goldenAcapulco.jpg", precio: 42, cantidad: 1, actualización: 6 },
    { id: 5, nombre: "Northern Lights", imagen: "../Idproductos/northernLights.jpg", precio: 32, cantidad: 1, actualización: 7},
    { id: 6, nombre: "Gorilla Breath", imagen: "../Idproductos/gorillaBreath.jpg", precio: 24, cantidad: 1, actualización: 9},
    { id: 7, nombre: "Purple Kush", imagen: "../Idproductos/purpleKush.webp", precio: 20, cantidad: 1, actualización: 9},
    { id: 8, nombre: "¡Offer!: Amnesia Haze", imagen: "../Idproductos/amnesiaHaze.jpg", precio: 22, cantidad: 1, actualización: 42}
]

//Repositorio de venta

variedades.forEach(item => {
    contenedorProductos.innerHTML +=
    `
    <div class="card mb-3">
        <img src="${item.imagen}" class="card-img-top" alt="${item.nombre}">
        <div class="card-body">
            <h2 class="card-title">${item.nombre}</h2>
            <p> Precio /gramo: $ ${item.precio}</p>
            <p> Ultima actualización: ${item.actualización} días </p>
            <button id="variedades${item.id}">Comprar gramos
            <iconify-icon icon="ic:outline-add-shopping-cart" style="color: yellowgreen;" width="50" height="15"></iconify-icon></button>
    </div>
    `
})


