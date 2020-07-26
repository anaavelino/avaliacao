
<?php
require_once "db\conect.php";

if(isset($_POST['placa'])){
    $placa = mysqli_real_escape_string($link,$_POST['placa']);
    $prefixo = mysqli_real_escape_string($link,$_POST['prefixo']);
    $abastecido = mysqli_real_escape_string($link,$_POST['abast']);
    $data = mysqli_real_escape_string($link,$_POST['data']);

$sql = "INSERT INTO cadabast(placa,prefixo,abastecido,data_abast) 
        VALUES ('$placa','$prefixo','$abastecido','$data')";

if(mysqli_query($link,$sql)){
    header('Location: relA.php');
}else{
    echo "Processo falhou" . mysqli_error($link);
  }
}

?>

<!DOCTYPE HTML>

<html>
<head>
    <meta charset = "UTF-8">
    <title>Cadastro de Abastecimentos</title>
    <link rel = "stylesheet" href = "style\telA.css">
</head>
<body>
    
<div id = "area">      
    <form action="cadastroA.php" method = "post">
        <fieldset>
        <div class = "box">
        <legend>Cadastro de Abastecimentos</legend>
        <div class = "cad">
            <label class = "l1">Placa:</label></br>
            <input class = "i1" type="text" name = "placa"></br>

            <label>Prefixo:</label></br>
            <input class = "i2" type="text" name = "prefixo"></br>

            
            <label>Abastecimento:</label></br>
            <input class = "i3"  type="text" name = "abast"></br>

            <label>Data Abastecimento:</label></br>
            <input class = "i4"  type="date" name = "data"></br>


            <input class = "bnt"  type="submit" value = "Salvar">
            </div>
        </fieldset>
        </div>
        </form>
    
</div>
</body>

</html>

