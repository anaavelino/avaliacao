<DOCTYPY HTML>

<html>
    <head>
    <meta charset = "UTF - 8" >
    <link rel="stylesheet" href="">
    </head>

</html>
<body>

    <?php
        
        $link = mysqli_connect("localhost","root","","dbsystem");      
        if($link == false){
        die("ERROR: Could not connect ");
    }

       // echo "Conexão realizada com sucesso!";


    //CRIANDO DB
    /*
    $sql = "CREATE DATABASE dbsystem";
    if(mysqli_query($link,$sql)){
        echo "SUCCESSFULLY - database created ";
    }else{
        echo "FAILED";
    }
    */


    $sql = "SELECT * FROM cadabast";
    ?>
</body>
