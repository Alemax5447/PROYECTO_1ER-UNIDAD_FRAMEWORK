<?php 

    if(isset($_POST['login_comprobacion']))
    {
        

      $email=$_POST['staticEmail'];
      $password=$_POST['staticPassword'];
      
        
 if($email != 'administrador' || $email != 'cliente'){
        header("Location: error.php");

      }
      if($email == 'administrador')
      {
        if($password == 'asd')
        {
            header("Location: admin.php");
        }else{
           header("Location: error.php");
        }
      }
     
      if($email == 'cliente')
      {
        if($password == '123')
        {
            header("Location: cliente.php");
        }else{
            header("Location: error.php");
        }
      }

       
       
    }

?>