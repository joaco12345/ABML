<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles.css">

    <title>Document</title>
</head>
<body>
    
    


<?php
  include "template.php";
?>



<!-- FORMULARIO -->



  <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img3.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Modificar Cliente:</h2>

                <form method="POST">

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_ci"></label>
                    <input type="number" name="txt_ci" class="form-control form-control-lg" placeholder="CI" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_nom"></label>
                    <input type="text" name="txt_nom" class="form-control form-control-lg" placeholder="Nombre" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_ape"></label>
                    <input type="text" name="txt_ape" class="form-control form-control-lg" placeholder="Apellido" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_dir"></label>
                    <input type="text" name="txt_dir" class="form-control form-control-lg" placeholder="Dirección" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_tel"></label>
                    <input type="text" name="txt_tel" class="form-control form-control-lg" placeholder="Teléfono" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_em"></label>
                    <input type="text" name="txt_em" class="form-control form-control-lg" placeholder="Email" required />
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">


                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Modificar</button>
                  </div>

                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




<!-- FORMULARIO -->








  <?php
  include "../Modelo/ABML.php";


  // Obtengo los datos enviados por el Formulario
  if (isset($_POST['txt_nom'])) {

    $ci = $_POST['txt_ci'];
    $nom = $_POST['txt_nom'];
    $ape = $_POST['txt_ape'];
    $dir = $_POST['txt_dir'];
    $tel = $_POST['txt_tel'];
    $email = $_POST['txt_em'];



    // Creo un objeto de la clase ABML

    $abml = new Clientes_Model();
    $abml->ModificarClientes($ci, $nom, $ape, $dir, $tel, $email);
  }
  ?>

</body>

</html>