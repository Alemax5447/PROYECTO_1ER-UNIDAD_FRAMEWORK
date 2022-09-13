
<?php include("includes/header.php") //contiene el header de nuestro index ?> 

    <nav class  = "navbar navbar-dark bg-dark mb-3">
   
        <div class="container ">
            <a href="index.php" class = "navbar-brand"> <h5><i class="fa-brands fa-apple"></i> PROYECTO 1ER-UNIDAD</h5> <small class="text-muted">With faded secondary text</small></a> 
            
    </nav>

    <!--Formulario de inicio de sesion-->
   <div class="container">
        <div class="row">

        <!--Formulario, inicio de sesion!-->
            <div class="col-md-4 ">
                <div class="card card-body -3 ">
                <!--Envia los datos con el form al archivo login-comprobacion-->
                    <form action="login_comprobacion.php" method="POST">
                        <div class="form-group ">
                            <label for="staticEmai" class="col-form-label">Email</label>
                            <input type="text" name="staticEmail" class="form-control" placeholder="¡Ingresa tu nombre de usuario o Correo" autofocus required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="staticPassword" class="col-form-label">Password</label>
                            <input type="password" name="staticPassword" class="form-control" placeholder="¡Ingresa tu contraseña!">
                        </div>
                        <input type="submit" class="btn btn-success" name = "login_comprobacion" value="Inicia sesion">
                    </form>
                </div>
            </div>
            
            <div class="col-md-8">

            </div>
        </div>
   </div>
    
 <?php include("includes/footer.php") //contiene el footer de la pagina ?>
 </html>