<?php
include("Conexion/ConexionBaseDatos.php");

if (isset($_GET['id_poema']))
{
  $id = $_GET['id_poema'];
  $ElimarPoema =  "DELETE FROM Poemas WHERE id_poemas = $id";
  $Resultado = mysqli_query($Conexion, $ElimarPoema);

  if (!$Resultado) {
    die("Error en la Eliminación");
  }
  $_SESSION['message'] = "Se a eliminado de forma correcta";
  $_SESSION['message_type'] = "success";

  header("location: index.php");
}
