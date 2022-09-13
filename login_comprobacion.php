<?php 

    if(isset($_POST['login_comprobacion']))
    {
        

      $email=$_POST['staticEmail'];
      $password=$_POST['staticPassword'];
      
        

      if($email == 'administrador')
      {
        if($password == 'asd')
        {
            header("Location: admin.php");
        }else{
          echo 'error';
        }
      }
      if($email == 'cliente')
      {
        if($password == '123')
        {
            header("Location: cliente.php");
        }else{
            echo 'error';
        }
      }

       
       
    }

?>