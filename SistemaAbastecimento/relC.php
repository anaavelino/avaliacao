<!DOCTYPE html>
<html>
<head>
    <meta charset= "UTF-8">
    <title> Relatorio </title>
    <link rel="stylesheet" href="style\relC.css">
</head>

<body>

<a href="cadastroC.php"><input class = "bnt" type="submit" value="+ Adicionar "></a>

<?php   
        require_once "db\conect.php";
        $sql = "SELECT * FROM cadastro";

        if($result = mysqli_query($link,$sql)){
            if(mysqli_num_rows($result)>0){
                echo "<div>";
                echo "<table>";
                    echo "<tr>";
                    echo "<th>Placa</th>";   
                    echo "<th>Marca</th>";
                    echo "<th>Modelo</th>";
                    echo "<th>Cidade</th>";
                    echo "<th>Capacidade do Tanque</th>"; 
                   
                    echo "</tr>";  
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['placa'] . "</td>";
                    echo "<td>" . $row['marca'] . "</td>";
                    echo "<td>" . $row['modelo'] . "</td>";
                    echo "<td>" . $row['localizacao'] . "</td>";
                    echo "<td>" . $row['capacidade'] . "</td>";
    
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