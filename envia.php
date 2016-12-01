<?php
$cabecera = "From: ".$_POST['nombre']."<". $_POST['email'].">";
$message = "Correo:".$_POST['email']."\nTelefono: ".$_POST['tel']."\nMensaje: \n".$_POST['comment'];
if(mail("jozz_alex@outlook.com", "INFORMES DE PAGINA",$message,$cabecera)){
  header('Location: contacto.html'); exit;
}else{
  header('Location: index.html'); exit;
}
