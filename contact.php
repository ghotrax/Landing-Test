<?php
$addressee = 'reconghostt@gmail.com';
if (isset($_POST['send'])){
    if(!empty($_POST['Nombre'] && !empty($_POST['Telefono']))){
        $name = $_POST['Nombre'];
        $phone = $_POST['Telefono'];


        $mensaje = '
<html>
<head>
  <title>Informacion</title>
</head>
<body>
  <table>
    <tr>
      <th>Nombre</th><th>Telefono</th>
    </tr>
    <tr>
      <td>$name</td><td>$phone</td>
    </tr>
  </table>
</body>
</html>
';
$header = 'Informacion';
$header = 'From: Your name <info@address.com>';
$header.= 'Reply-To: info@address.com'; 
$header.= 'X-Mailer: PHP/'. phpversion();

        mail($addressee, $name ,$phone , $header , $mensaje);
    }
}

?>