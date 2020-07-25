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

            
            <label>Localização:</label></br>
            <input class = "i3"  type="text" name = "loc"></br>

           
            <input class = "bnt" type="submit" value = "Salvar">
            </div>
            </fieldset>

</div>
        </div>
        </form>
    
    

</body>

</html>