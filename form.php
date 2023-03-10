<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Grant Thornton Registro</title>
</head>

<body class="bg-body-tertiary">
<section class="centerForm">
<form action="register.php" method="post" class="row g-3 needs-validation shadow border border-1 rounded-3 p-3 pb-5" novalidate>
<h2>Registro</h2>
        <?php if (isset($_GET['error'])) { ?>

            <p class="error alert alert-danger "role="alert"><?php echo $_GET['error']; ?></p>

        <?php } ?>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input  type="text" name="firstName" placeholder="Nombre" class="form-control " id="validationCustom01"  required>
   
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input  type="text" name="lastName" placeholder="Apellido" class="form-control " id="validationCustom02"  required>
    
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Fecha de Nacimiento</label>
    <input type="date" name="birthDate" placeholder="Cumpleaños" class="form-control" id="validationCustom03" required>

  
  <div class="col-12 mt-3">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
 </form>
  </section>
    
  
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>