<?php include("includes/header.php") ?>

<nav class  = "navbar navbar-dark bg-dark mb-3">
   
       <div class="container ">
        <a href="index.php" class = "navbar-brand">  <h5><i class="fa-brands fa-apple-pay fa-xl"></i> Productos</h5></a> 
        
        <ul class="nav justify-content-end nav-pills">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="carrito.php">Carrito de compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-secondary" href="index.php">Cerrar Sesion</a>
        </li>
        </ul>    

       </div>
</nav>


<div class="container">
    <br>
    <div class="row">

     <!--Producto-->
        <div class="col-3">
           <div class="card h-100" >
            <img class="card-img-top mt" src="Assets/ipadpro.jpg" alt="">
            <div class="card-body ">
                <h5 class="card-title">Ipad Pro</h5>
                <p class="card-text">28000</p>
                <input name="btn1" id="1" class="btn btn-primary" type="button" value="Agregar al carrito" onclick="agregarCarrito('Ipad pro,28000,Assets/ipadpro.jpg')">
            </div>
           </div>
            </div>

        <!--Producto-->
        <div class="col-3">
           <div class="card h-100" >
            <img class="card-img-top" src="Assets/ipadAir.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Ipad Air</h5>
                <p class="card-text">25,000</p>
                <input name="btn1" id="1" class="btn btn-primary" type="button" value="Agregar al carrito" onclick="agregarCarrito('Ipad Air,25000,Assets/ipadAir.jpg')">
            </div>
           </div>
            </div>

             <!--Producto-->
        <div class="col-3">
           <div class="card h-100" >
            <img class="card-img-top" src="Assets/iphone14pro.jpg" alt="">
            <div class="card-body position-absolute bottom-0 start-0">
                <h5 class="card-title">Iphone 14 Pro</h5>
                <p class="card-text">22,000</p>
                <input name="btn1" id="1" class="btn btn-primary" type="button" value="Agregar al carrito" onclick="agregarCarrito('Iphone 14 pro,22000,Assets/iphone14pro.jpg')">
            </div>
           </div>
            </div>
            
             <!--Producto-->
        <div class="col-3">
           <div class="card h-100" >
            <img class="card-img-top" src="Assets/iphoneSE.jpg" alt="">
            <div class="card-body position-absolute bottom-0 start-0">
                <h5 class="card-title">Iphone SE</h5>
                <p class="card-text">17,000</p>
                <input name="btn1" id="1" class="btn btn-primary" type="button" value="Agregar al carrito" onclick="agregarCarrito('Iphone SE,17000,Assets/iphoneSE.jpg')">
            </div>
           </div>
            </div>
            
        </div>
    </div>

       
    



<?php include("includes/footer.php") ?>
    <script>
        function agregarCarrito(producto){
            
            
            var lista = localStorage.getItem("productos");
            if(lista != null){
                localStorage.setItem("productos", lista + '-'+ producto)
            }else{
                localStorage.setItem("productos", producto)
            }
            
        }
    </script>

</html>