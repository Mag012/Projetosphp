<?php

include_once('conect.php'); // incluindo o meu arquivo de conexãona página que vai receber os dados via post;

$nome = $_POST['nome']; // recebendo por meio de post os dados do campo nome
$email = $_POST['email'];
$assunto = $_POST['assunto'];

  $result_msg_contato="INSERT INTO  mensagens_contatos(nome, email, assunto) VALUES ('$nome','$email','$assunto')";

  $resultado_msg_contato=mysqli_query($con,$result_msg_contato);


?>