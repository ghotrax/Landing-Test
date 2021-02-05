<?php

        $addressee = 'reconghostt@gmail.com';
        $name = $_POST['Nombre'];
        $phone = $_POST['Telefono'];
        $mensaje = "DE: $name \n";
        $header.= "From: Your name <info@address.com>";
        $header.= "Reply-To: info@address.com"; 
      

      



        mail($addressee, $mensaje ,$header);

    


?>