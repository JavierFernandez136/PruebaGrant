<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=Nombre de Usuario Requerido");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Contraseña Requerida");

        exit();

    }else{

        $sql = "SELECT * FROM datos_login1 WHERE user='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user'] = $row['user'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: form.php");

                exit();

            }else{

                header("Location: index.php?error=Nombre de Usuario o Contraseña Incorrecta");

                exit();

            }

        }else{

            header("Location: index.php?error=Nombre de Usuario o Contraseña Incorrecta");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}