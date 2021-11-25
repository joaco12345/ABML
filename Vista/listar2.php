<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <h2 class="text-uppercase text-center mb-5">Solicitar Cliente:</h2>

                <form method="POST">

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_ci"></label>
                    <input type="number" name="txt_ci" class="form-control form-control-lg" placeholder="CI" required />
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">


                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Mostrar</button>
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
  if (isset($_POST['txt_ci'])) {

    $ci = $_POST['txt_ci'];

   
    // Creo un objeto de la clase ABML

    $abml = new Clientes_Model();
   echo "ESTOY RETORNANDO :: " . $abml->ListarCliente($ci);
    
  }

?>





<!-- LISTADO DE DATOS -->



<section class="vh-100 bg-image" style="background-color:orange">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
           
                <h2 class="text-uppercase text-center mb-1">Cliente:</h2>

                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






</body>
</html>