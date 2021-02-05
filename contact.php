<?php
$addressee = 'reconghostt@gmail.com';
if (isset($_POST['send'])){
    if(!empty($_POST['Nombre'] && !empty($_POST['Telefono']))){
        $name = $_POST['Nombre'];
        $phone = $_POST['Telefono'];
        $mensaje = "DE: $name \n";
        $header .= "From: Your name <info@address.com>";
        $header.= "Reply-To: info@address.com"; 
        $header.= "X-Mailer: PHP/". phpversion();

      



        mail($addressee, $mensaje ,$header);

    }
}

?>