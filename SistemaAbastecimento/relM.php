<!DOCTYPE html>
<html>
<head>
    <meta charset= "UTF-8">
    <title> Relatorio </title>
    <link rel="stylesheet" href="style\relM.css">
</head>

<body>

<a href="cadastroM.php"><input class = "bnt" type="submit" value="+ Adicionar "></a>

<?php   
        require_once "db\conect.php";
        $sql = "SELECT * FROM cadmaq";

        if($result = mysqli_query($link,$sql)){
            if(mysqli_num_rows($result)>0){
                echo "<div>";
                echo "<table>";
                    echo "<tr>";
                    echo "<th>Prefixo</th>";   
                    echo "<th>Tipo Equipamento</th>";
                    echo "<th>Cidade</th>";
                   
                    echo "</tr>";  
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['prefixo'] . "</td>";
                    echo "<td>" . $row['tipoeq'] . "</td>";                   
                    echo "<td>" . $row['localizacao'] . "</td>";
                   
    
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