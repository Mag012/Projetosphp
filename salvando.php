<?php

include_once('conect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato</title>
</head>
<style> 
.btn{
    background: fixed;

}



</style>

<body>
    
<form  method ="post" action="salvando_mensagem.php"> <!--No action temos a página para onde será enviado os dados do formulário-->
Nome:<input type = "text" name = "nome" placeholder="Digite o seu nome" required></br></br>
Email:<input type = "email" name = "email" placeholder="Digite o seu email" required></br></br>
Assunto:<input type="text" name = "assunto" placeholder="Assunto do contato" required></br></br>

<div class="btn">
<input type="submit" value="Enviar">
</div>



</form>
    
</body>
</html>

