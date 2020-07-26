
<!DOCTYPE html>

<html>
<head>
    <meta charset= "UTF-8">
    <title> Relatorio </title>
    <link rel="stylesheet" href="style\relat.css">
</head>

<body>

<?php

    require_once "db\conect.php";

    $sql = "SELECT t1.placa,t1.marca,t1.modelo,t3.tipoeq,
            t3.prefixo,t2.data_abast,t2.abastecido 
            FROM cadastro AS t1
            INNER JOIN cadabast AS t2 ON t2.placa=t1.placa 
            INNER JOIN cadmaq As t3 ON t3.prefixo=t2.prefixo";

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
                echo "<th>Quantidade Abastecida</th>";
                echo "</tr>";  
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['placa'] . "</td>";
                echo "<td>" . $row['marca'] . "</td>";
                echo "<td>" . $row['modelo'] . "</td>";
                echo "<td>" . $row['tipoeq'] . "</td>";
                echo "<td>" . $row['prefixo'] . "</td>";
                echo "<td>" . date( 'd/m/Y' , strtotime($row['data_abast'])) . "</td>";
                echo "<td>" . $row['abastecido'] . "</td>";
               


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
<a href="index.php"><input class = "bnt" type="submit" value="Voltar"></a>
</body>
</html>