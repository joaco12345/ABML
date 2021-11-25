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



<section class="vh-100 bg-image" style="background-color:orange">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
           
                <h2 class="text-uppercase text-center mb-1">Clientes:</h2>

                

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

// Creo un objeto de la clase ABML

$abml = new Clientes_Model();
$abml->ListarClientes();



?>

</body>
</html>