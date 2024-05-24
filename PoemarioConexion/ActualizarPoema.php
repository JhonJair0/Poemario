<?php 
include("Conexion/ConexionBaseDatos.php"); 



    $id = $_POST['TxtIdPoema'];
    $Autor = $_POST['TxtNombreAutor'];
    $Titulo = $_POST['TxtTitulo'];
    $Poema = $_POST['TxtPoema'];


   

    $Query = "UPDATE Poemas SET Autor = '$Autor',
                                Titulo = '$Titulo', 
                                Poema = '$Poema'
    WHERE id_poemas  =  $id";



    $result = mysqli_query($Conexion,$Query);
    if(!$result)
    {
        die("insercion fallo");
    }
    $_SESSION['message'] = "Se a actualizado de forma correcta ";
    $_SESSION['message_type'] = "success";
    header("location: index.php");
    
