<?php require "config.ini"; ?>

<?php

ini_set ("SMTP","smtp.eb.mil.br");


$nome=$_POST["nome"];

$email=$_POST["email"];

$assunto="Contato pelo Site";

$mensagem=$_POST["mensagem"];

if ($certo== "1")

{

mail ("$emaildest","$assunto","Nome:$nome\n\n Email:$email\n\n Mensagem:\n$mensagem\n\n ...::: Recebido do site LAT :::...","From:$nome<$email>");

}

// HTML do redirecionameto e se não redirecionar aparece um link

echo "<html><head>";

echo "<meta http-equiv=\"refresh\" content=\"0;url=$redirecionar\">";

echo "<title>Redirecionado ...</title>";

echo "</head><body bgcolor=\"#ffffff\">";

echo "<a href=\"$redirecionar\" target=\"_top\">Voltar Para O Site</a>";

echo "</body></html>";

?>