<?php
require_once "db\conect.php";

if(isset($_POST['prefixo'])){
    $prefixo = mysqli_real_escape_string($link,$_REQUEST['prefixo']);
    $tipo = mysqli_real_escape_string($link,$_REQUEST['tipo']);
    $local = mysqli_real_escape_string($link,$_REQUEST['loc']);

$sql = "INSERT INTO cadmaq(prefixo,tipoeq,localizacao) 
        VALUES ('$prefixo','$tipo','$local')";

if(mysqli_query($link,$sql)){
    header('Location: relM.php');
}else{
    echo "Processo falhou" . mysqli_error($link);
}
}
?>

<!DOCTYPE HTML>

<html>
<head>
    <meta charset = "UTF-8">
    <title>Cadastro de Maquinas</title>
    <link rel = "stylesheet" href = "style\telM.css">
</head>
<body>
    
    
    <div id = "area">
        <form id = "form1" action="cadastroM.php" method = "post">

        <fieldset>
        <div class = box>
            <legend>Cadastro de Maquinas</legend>
            <div class = "cad">
            <label class = "l1">Prefixo:</label></br>
            <input class = "i1" type="text" name = "prefixo"></br>

            <label>Tipo do equipamento:</label></br>
            <input class = "i2" type="text" name = "tipo"></br>

            
            <label>Cidade:</label></br>
            <input class = "i3"  type="text" name = "loc"></br>

           
            <input class = "bnt" type="submit" value = "Salvar">
            </div>
            </fieldset>

</div>
        </div>
        </form>
    
    

</body>

</html>