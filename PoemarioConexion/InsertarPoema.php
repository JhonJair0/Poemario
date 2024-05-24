<?php 
include('Conexion/ConexionBaseDatos.php');


if(isset($_POST['BtnAgregar']))
{
    $Autor = $_POST['TxtNombreAutor'];
    $Titulo = $_POST['TxtTitulo'];
    $Poema = $_POST['TxtPoema'];

    $insertar = "INSERT INTO Poemas (Autor,Titulo,Poema) VALUES ('$Autor','$Titulo','$Poema')";
    $resultado = mysqli_query($Conexion,$insertar);
    if(!$resultado)
    {
        die("insercion fallo");
    }
    $_SESSION['message'] = "Se a guardado de forma correcta ";
    $_SESSION['message_type'] = "success";
    
    header("location: index.php");

}