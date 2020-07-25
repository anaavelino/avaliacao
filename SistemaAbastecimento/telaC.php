<!DOCTYPE HTML>

<html>
<head>
    <meta charset = "UTF-8">
    <title>Cadastro de Comboios</title>
    <link rel = "stylesheet" href = "style\telC.css">
</head>
<body>

    
    
    <div id = "area">      
    <form action="cadastroC.php" method = "post">
        <fieldset>
        <div class = "box">
        <legend>Cadastro de Comboio</legend>
        <div class = "cad">
            <label class = "l1">Placa:</label></br>
            <input class = "i1" type="text" name = "placa"></br>

            <label>Marca:</label></br>
            <input class = "i2" type="text" name = "marca"></br>

            
            <label>Modelo:</label></br>
            <input class = "i3"  type="text" name = "modelo"></br>

            <label>Localização:</label></br>
            <input class = "i4"  type="text" name = "local"></br>

            <label>Capacidade do tanque:</label></br>
            <input class = "i5"  type="text" name = "tanque"></br>

            <input class = "bnt"  type="submit" value = "Salvar">
            </div>
        </fieldset>
        </div>
        </form>
    
</div>

</body>

</html>