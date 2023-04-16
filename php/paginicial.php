<?php
 session_start(); // trabalhamos com sessão na página que queremos restringir e na página que processa o 
                  // login, por exemplo.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "./../style/inicial.css"> 
    <title> Boas-Vindas! </title>
</head>
<body>

  <h2 id = "first"> Bem-Vindo a mais um recurso de nosso sistema!  </h2>

  <button id = "exit"> <a href = "logout.php"> Sair </a> </button>

  <p> Agora que já possui seu login dentro de nossa plataforma, que tal conhecer todos os seus privilégios?  </p>

 <?php
   if(!isset($_SESSION["emailSession"]) && !isset($_SESSION["senhaSession"])){
    header("Location: index.php");
    exit;
   }
 ?>

</body>

</html>