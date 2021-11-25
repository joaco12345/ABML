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
    include_once("conexionBD.php");

    class Clientes_Model extends Conexion
    {

        private $conexion;

        public function __construct()
        {
            $this->conexion = new Conexion();
        }


        // Listar Clientes



        public function ListarClientes()
        {
            try {

                //$obj_conexion = Conexion::getConexion();
                $con = new Conexion();

                if (!$con) {
                    echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
                } else {
                    echo "";


                    /* ejemplo de una consulta */

                    $consulta = "SELECT * FROM clientes";
                    $resultado = $con->query($consulta);


                    var_dump($resultado);

                    echo "<table border='1' align='center'>
                        <tr bgcolor='#E6E6E6'>
                            <th>--CI--</th>
                            <th>--Nombre--</th>
                            <th>--Apellido--</th>
                            <th>--Direccion--</th>
                            <th>--Telefono--</th>
                            <th>--Email--</th>

                        </tr>";

                    foreach ($resultado as $fila) {

                        echo "<tr>
                        
                        <td>" .  $fila["cedula"] . "</td>";
                        echo "<td>" . $fila["nombre"] . "</td>";
                        echo "<td>" . $fila["apellido"] . "</td>";
                        echo "<td>" . $fila["direccion"] . "</td>";
                        echo "<td>" . $fila["telefono"] . "</td>";
                        echo "<td>" . $fila["email"] . "</td></tr>";
                    }
                }
            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }
        }







        public function ListarCliente($ci)
        {
            try {

                //$obj_conexion = Conexion::getConexion();
                $con = new Conexion();

                if (!$con) {
                    echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
                } else {
                    echo "";


                    /* ejemplo de una consulta */

                    $consulta = "SELECT * FROM clientes WHERE cedula = ?";

                    $resultado = $con->prepare($consulta);

                    $arrData = array($ci);
        
                    $resultado->execute($arrData);

                    echo "<table border='1' align='center'>
                        <tr bgcolor='#E6E6E6'>
                            <th>--CI--</th>
                            <th>--Nombre--</th>
                            <th>--Apellido--</th>
                            <th>--Direccion--</th>
                            <th>--Telefono--</th>
                            <th>--Email--</th>

                        </tr>";



                    foreach ($resultado as $fila) {

                        echo "<tr>
                        
                        <td>" .  $fila["cedula"] . "</td>";
                        echo "<td>" . $fila["nombre"] . "</td>";
                        echo "<td>" . $fila["apellido"] . "</td>";
                        echo "<td>" . $fila["direccion"] . "</td>";
                        echo "<td>" . $fila["telefono"] . "</td>";
                        echo "<td>" . $fila["email"] . "</td></tr>";
                    }
                }
            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }


        }


        



        // Agregar Clientes





        public function AgregarClientes($ci, $nom, $ape, $dir, $tel, $email)
        {

            $sql = "INSERT INTO clientes (
            cedula,
            nombre,
            apellido, 
            direccion, 
            telefono,
            email) VALUES (?,?,?,?,?,?)";

            try {

                $insert =  $this->conexion->prepare($sql);
                $arrData = array($ci, $nom, $ape, $dir, $tel, $email);
                $insert->execute($arrData);
                $idInsert =  $this->conexion->lastInsertId();
                return $idInsert;
            } catch (PDOException $error) {

                echo $error->getMessage();
            }
        }



        // Modificar Clientes


        public function ModificarClientes($ci, $nom, $ape, $dir, $tel, $email)
        {

            $con = new Conexion();
            $sql = "UPDATE clientes SET
                    nombre = ?,
                    apellido = ?, 
                    direccion = ?, 
                    telefono = ?,
                    email = ?
                    WHERE cedula = ?";

            $update = $con->prepare($sql);

            $arrData = array($nom, $ape, $dir, $tel, $email, $ci);

            return  $update->execute($arrData);
        }




        // Eliminar Clientes




        public function EliminarClientes($ci)
        {
            $con = new Conexion();
            $sql = "DELETE FROM `clientes` WHERE `cedula`= :cedula";
            $update = $con->prepare($sql);
            $update->bindParam(':cedula', $ci, PDO::PARAM_INT, 8);
            $respuesta = false;
            if ($update->execute())
                $respuesta = true;
            return $respuesta;
        }
    }

    ?>
</body>

</html>