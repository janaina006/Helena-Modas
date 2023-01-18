<?php
$to      = Config::EMAIL_USER;
$subject = 'Contato - Loja janaina';
$message = 'Email de: '. $_GET['txtName']. $_GET['txtPhone']. "\r\n" .$_GET['txtMsg'];
$dest= $_GET['txtEmail'];


$headers = "From: ". $dest;
  
mail ($to, $subject, $message, $headers);

?>

<script>alert ('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">