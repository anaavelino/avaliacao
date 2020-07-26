<!DOCTYPE html>
<html>
<head>
    <meta charset= "UTF-8">
    <title> Relatorio </title>
    <link rel="stylesheet" href="style\relA.css">
</head>

<body>

<a href="cadastroA.php"><input class = "bnt" type="submit" value="+ Adicionar"></a>

<?php   
        require_once "db\conect.php";
        $sql = "SELECT * FROM cadabast";

        if($result = mysqli_query($link,$sql)){
            if(mysqli_num_rows($result)>0){
                echo "<div>";
                echo "<table>";
                    echo "<tr>";
                    echo "<th>Placa</th>";   
                    echo "<th>Prefixo</th>";
                    echo "<th>Data do Abastecimento</th>";
                    echo "<th>Quantidade Abastecida</th>"; 
                   
                    echo "</tr>";  
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['placa'] . "</td>";
                    echo "<td>" . $row['prefixo'] . "</td>";
                    echo "<td>" . date( 'd/m/Y' , strtotime($row['data_abast'])) . "</td>";
                    echo "<td>" . $row['abastecido'] . "</td>";
    
            }    echo "</tr>";
            echo "</table>";
            echo "</div>";   
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