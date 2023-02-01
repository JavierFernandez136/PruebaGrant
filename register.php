<!DOCTYPE html>
<html>
 
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Grant Thornton Bienvenida</title>
</head>
 
<body>
    
    <section class="centerForm column g-3 needs-validation shadow border border-1 rounded-3 p-3 pb-5" style="flex-direction:column;text-align:center;">
           <?php
        
        // servername => localhost
        // username => root
        // password => empty
        // database name => pruebagrant
        $conn = mysqli_connect("localhost", "root", "", "pruebagrant");
         
        // Comprobar Coneccion db
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Tomando los 3 valores desde el form.php(input)
        $firstName =  $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];
        $birthDate =  $_REQUEST['birthDate'];
         
        // Performing insert query execution
        // Nombre de la tabla datos_register
        $sql = "INSERT INTO datos_register  VALUES ('$firstName',
            '$lastName','$birthDate')";
         
        if(mysqli_query($conn, $sql)){
            echo "<p class='dato'>Los Datos fueron guardados exitosamente.</br>"
                . " Se registraron en la base de datos son los siguientes valores:"
                . " </p>";
 
            echo nl2br("<h3 class='dato'>Bienvenido: $firstName  $lastName</h3>"
                . "<p class='dato'>Tu fecha de nacimiento es el:$birthDate</p>");
                
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
        <a href="logout.php" type="button" class="btn btn-primary">Salir</a>
    </section>

</body>
 
</html>