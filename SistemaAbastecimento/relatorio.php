
<!DOCTYPE html>

<html>
<head>
    <meta charset= "UTF-8">
    <title> Relatorio </title>
    <link rel="stylesheet" href="style\rel.css">
</head>

<body>

<?php

    require_once ".db\conect.php";

    $sql = "SELECT t2.placa,t2.marca,t2.modelo,t3.tipoeq,
    t3.prefixo,t1.data_abast 
    FROM cadastro AS t2
    INNER JOIN cadabast AS t1 ON t1.placa=t2.placa 
    INNER JOIN cadmaq As t3 ON t3.prefixo=t1.prefixo";

    if($result = mysqli_query($link,$sql)){
        if(mysqli_num_rows($result)>0){
            echo "<table>";
                echo "<tr>";
                echo "<th>Placa</th>";   
                echo "<th>Marca</th>";
                echo "<th>Modelo</th>"; 
                echo "<th>Tipo de Equipamento</th>"; 
                echo "<th>Prefixo</th>";
                echo "<th>Data do Abastecimento</th>";
                echo "</tr>";  
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['placa'] . "</td>";
                echo "<td>" . $row['marca'] . "</td>";
                echo "<td>" . $row['modelo'] . "</td>";
                echo "<td>" . $row['tipoeq'] . "</td>";
                echo "<td>" . $row['prefixo'] . "</td>";
                echo "<td>" . $row['data_abast'] . "</td>";


        }    echo "</tr>";
        echo "<table>";   
        mysqli_free_result($result);
        } else{
            echo "Nenhum registro correspondente à sua consulta foi encontrado.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " ;

    };

?>

</body>
</html>