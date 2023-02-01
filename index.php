<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Grant Thornton Login</title>
</head>

<body class="bg-body-tertiary">
<section class="centerForm">
<form action="login.php" method="post" class="row g-3 needs-validation shadow border border-1 rounded-3 p-3 pb-5" novalidate>
<h2>INGRESO</h2>
        <?php if (isset($_GET['error'])) { ?>

            <p class="error alert alert-danger "role="alert"><?php echo $_GET['error']; ?></p>

        <?php } ?>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Usuario</label>
    <input  name="uname" placeholder="Nombre de Usuario" type="text" class="form-control" id="validationCustom01"  required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Contraseña</label>
    <input  type="password" name="password" placeholder="Password" class="form-control" id="validationCustom02"  required>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Ingresar</button>
  </div>
 </form>
  </section>
</body>

</html>