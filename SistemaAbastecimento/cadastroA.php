<?php
require_once ".db\conect.php";

$Placa = mysqli_real_escape_string($link,$_REQUEST['placa']);
$Prefixo = mysqli_real_escape_string($link,$_REQUEST['prefixo']);
$Abastecido = mysqli_real_escape_string($link,$_REQUEST['abast']);
$Data = mysqli_real_escape_string($link,$_REQUEST['data']);

$sql = "INSERT INTO cadabast(placa,prefixo,abastecido,data_abast) VALUES ('$Placa','$Prefixo','$Abastecido',
'$Data')";
if(mysqli_query($link,$sql)){
echo "Dados inseridos com SUCESSO!";
}else{
echo "Processo falhou" . mysqli_error($link);
}

?>