<?php
// Get values from the form
$name=$_POST['name'];
$msj=$_POST['msj'];
$email=$_POST['email'];
 
$to = "serviciocliente@ldsingenieria.com.co";
$subject = "Contacto de Pagina WEB";
$message = " Nombre: " . $name . "\r\n Mensaje: " . $msj . "\r\n Email: " . $email;
 
 
$from = "Contacto de Pagina WEB";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://www.ldsingenieria.com.co/contacto.html';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}
?>