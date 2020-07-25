<?php
    require_once ".db\conect.php";

    $Placa = mysqli_real_escape_string($link,$_REQUEST['placa']);
    $Marca = mysqli_real_escape_string($link,$_REQUEST['marca']);
    $Modelo = mysqli_real_escape_string($link,$_REQUEST['modelo']);
    $localizacao = mysqli_real_escape_string($link,$_REQUEST['local']);
    $Tanque = mysqli_real_escape_string($link,$_REQUEST['tanque']);

    $sql = "INSERT INTO cadastro(placa,marca,modelo,localizacao,capacidade) VALUES ('$Placa','$Marca','$Modelo',
    '$localizacao','$Tanque')";
    if(mysqli_query($link,$sql)){
    echo "Dados inseridos com SUCESSO!";
    }else{
    echo "Processo falhou" . mysqli_error($link);
    }


?>