<?php

$para = "xxjuninhoscjxx@gmail.com";
$assunto = "Contato SpawnCorp";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];

    $corpo = "<strong>Mensagem de Contato</strong><br>";
    $corpo .= "<br><strong>Nome: </strong>$nome";
    $corpo .= "<br><strong>Assunto: </strong>$mensagem";

    $header = "Content-Type: text/html; charset = utf-8\n";
    $header .= "From: $email Reply-to: $email \n";

mail($para,$assunto,$corpo,$header);

header("location:contato.php?msg=enviado");

?>