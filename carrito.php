<?php include("includes/header.php") ?>

<nav class  = "navbar navbar-dark bg-dark mb-3">
   
       <div class="container ">
        <a href="index.php" class = "navbar-brand">  <h5><i class="fa-brands fa-apple-pay fa-xl"></i> Productos</h5></a> 
        
        <ul class="nav justify-content-end nav-pills">
        <li class="nav-item">
            <a class="nav-link"  href="cliente.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page"" href="carrito.php">Carrito de compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-secondary" href="index.php">Cerrar Sesion</a>
        </li>
        </ul>    

       </div>

   
</nav>
    <div class="container">
        <div class="row">
            <div class="container">
                
                <div class="container">     
                    <div class="col-3">
                        <div id="contTotal"></div>
                    </div>
                    </div>
                </div>
                    <div class="container">
                        <div class="row">
                              <div class="col-9">
                                <p class="text-title">Productos</p>
                            <div id="carrito"></div>
                        </div>
                        </div>
                      
                    </div>
        </div>     
        </div>
    </div>

<?php include("includes/footer.php") ?>
    <script>
            var carrito = ""
            var total = 0
            var lista = localStorage.getItem("productos");
            var productos = lista.split('-') 
            console.log(productos)

           

            productos.forEach(element => {
                var datos = element.split(',')

                var nombre = datos[0]
                var precio = datos[1]
                var imagen = datos[2]
                

                

                var producto = ` <div class="col-3 ">
           <div class="card h-100" >
            <img class="card-img-top mt" src="${imagen}" alt="${imagen}">
            <div class="card-body ">
                <h5 class="card-title">${nombre}</h5>
                <p class="card-text">${precio}</p>
                
            </div>
            </div>
            </div>`

            carrito += producto

            total += parseInt(precio)

            });

            var contTotal = `
                    <div class="card" aria-hidden="true">
                    <i class="fa-brands fa-apple fa-xl"></i>
                        <div class="card-body">
                            <h5 class="card-title ">
                                  Subtotal de los productos: ${total}
                            </h5>
                            <p class="card-text">
                            Tu pedido es elegible con envío GRATIS Comprueba los productos incluidos en la oferta
                            Selecciona esta opción al tramitar el pedido.
                            </p>
                            <a href="#" tabindex="-1" class="btn btn-primary btn-block">Pagar ahora</a>
                        </div> `
            
            var cajasCarrito = document.getElementById("carrito")
            cajasCarrito.innerHTML = carrito

            var totalCarrito = document.getElementById("contTotal")
            totalCarrito.innerHTML = contTotal
    </script>

</html>