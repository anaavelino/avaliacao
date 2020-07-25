<?php
require_once ".db\conect.php";

$Prefixo = mysqli_real_escape_string($link,$_REQUEST['prefixo']);
$Tipo = mysqli_real_escape_string($link,$_REQUEST['tipo']);
$Local = mysqli_real_escape_string($link,$_REQUEST['loc']);

$sql = "INSERT INTO cadmaq(prefixo,tipoeq,localizacao) VALUES ('$Prefixo','$Tipo','$Local')";
if(mysqli_query($link,$sql)){
echo "Dados inseridos com SUCESSO!";
}else{
echo "Processo falhou" . mysqli_error($link);
}

?>