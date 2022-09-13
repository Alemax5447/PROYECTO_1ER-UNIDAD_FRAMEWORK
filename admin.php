<?php 
include("includes/header.php"); #Header
?>

<nav class  = "navbar navbar-dark bg-dark mb-3">
   
   <div class="container ">
    <a href="admin" class = "navbar-brand">  <h5><i class="fa-brands fa-apple-pay fa-xl"></i> Productos</h5><small class="text-muted">Cuentas con una cuenta Administrador</small></a> 
    
    <ul class="nav justify-content-end nav-pills">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Administrador</a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-secondary" href="index.php">Cerrar Sesion</a>
    </li>
    </ul>    

   </div>


</nav>

<nav class="navbar bg-light ">
      <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon offcanvas-start"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Administrador</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ventas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cambios de producto</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ajustes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Inicio de sesion</a></li>
                  <li><a class="dropdown-item" href="#">Seguridad</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Pagos</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>

<div class="container ">
    <div class="row">

    <div class="col-7 m-3">
        <div class="row">
          
        <div class="card col-12">
            <div class=" justify-content-lg-start">
                 <i class="fa-brands fa-google-pay  fa-2xl col-2"></i>
            </div>
       
            <div class="card-body col-10">
                <h5 class="card-title">Pagos</h5>
                <p class="card-text">Administrar y configuraciones y metodos de pago, ver tu saldos</p>
            </div>
            
        </div>

        <div class="card col-12  mt-3">
            <div class=" justify-content-lg-start">
            <i class="fa-solid fa-truck-fast fa-2xl"></i>
            </div>
       
            <div class="card-body">
                <h5 class="card-title">Pedidos</h5>
                <p class="card-text">Administrar y configuraciones de todos los pedidos </p>
            </div> 
            
        </div>

        <div class="card col-12  mt-3">
            <div class=" justify-content-lg-start">
                <i class="fa-solid fa-shield-halved fa-2xl"></i>
            </div>
       
            <div class="card-body">
                <h5 class="card-title">Seguridad</h5>
                <p class="card-text">Administrar y configuraciones sobre seguridad</p>
            </div> 
            
        </div>
      
        </div>
       
    </div>

    <div class="card col-4 ">
    <div class="card-body">
        <h5 class="card-title">Productos</h5>
        <p class="card-text  ">Grafica de las ventas de los productos</p> 
        <canvas id="myChart" width="200" height="200"></canvas>
    </div>
    </div>
</div>
</div>


<?php 
include("includes/footer.php"); #Footer
?><script>  


const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Air Pad', 'Ipad Pro', 'Iphone 14', 'Iphone 14 Pro', 'Purple', 'Orange'],
        datasets: [{
            label: '# Venta de Productos',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</html>